<?php

/**
 * question actions.
 *
 * @package    symfony
 * @subpackage question
 * @author     Your name here
 */
class questionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->questions = QuestionPeer::doSelect(new Criteria());
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new questionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new questionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($question = QuestionPeer::retrieveByPk($request->getParameter('id_question')), sprintf('Object question does not exist (%s).', $request->getParameter('id_question')));
    $this->form = new questionForm($question);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($question = QuestionPeer::retrieveByPk($request->getParameter('id_question')), sprintf('Object question does not exist (%s).', $request->getParameter('id_question')));
    $this->form = new questionForm($question);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($question = QuestionPeer::retrieveByPk($request->getParameter('id_question')), sprintf('Object question does not exist (%s).', $request->getParameter('id_question')));
    $question->delete();

    $this->redirect('question/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $question = $form->save();

      $this->redirect('question/edit?id_question='.$question->getIdQuestion());
    }
  }
}

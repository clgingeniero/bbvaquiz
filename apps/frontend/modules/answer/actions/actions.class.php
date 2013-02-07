<?php

/**
 * answer actions.
 *
 * @package    symfony
 * @subpackage answer
 * @author     Your name here
 */
class answerActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->answers = AnswerPeer::doSelect(new Criteria());
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new answerForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new answerForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($answer = AnswerPeer::retrieveByPk($request->getParameter('id_answer')), sprintf('Object answer does not exist (%s).', $request->getParameter('id_answer')));
    $this->form = new answerForm($answer);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($answer = AnswerPeer::retrieveByPk($request->getParameter('id_answer')), sprintf('Object answer does not exist (%s).', $request->getParameter('id_answer')));
    $this->form = new answerForm($answer);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($answer = AnswerPeer::retrieveByPk($request->getParameter('id_answer')), sprintf('Object answer does not exist (%s).', $request->getParameter('id_answer')));
    $answer->delete();

    $this->redirect('answer/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $answer = $form->save();

      $this->redirect('answer/edit?id_answer='.$answer->getIdAnswer());
    }
  }
}

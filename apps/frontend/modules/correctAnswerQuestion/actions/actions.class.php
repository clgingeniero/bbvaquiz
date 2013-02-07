<?php

/**
 * correctAnswerQuestion actions.
 *
 * @package    symfony
 * @subpackage correctAnswerQuestion
 * @author     Your name here
 */
class correctAnswerQuestionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->correctAnswerQuestions = CorrectAnswerQuestionPeer::doSelect(new Criteria());
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new correctAnswerQuestionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new correctAnswerQuestionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($correctAnswerQuestion = CorrectAnswerQuestionPeer::retrieveByPk($request->getParameter('id_correct_answer_question')), sprintf('Object correctAnswerQuestion does not exist (%s).', $request->getParameter('id_correct_answer_question')));
    $this->form = new correctAnswerQuestionForm($correctAnswerQuestion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($correctAnswerQuestion = CorrectAnswerQuestionPeer::retrieveByPk($request->getParameter('id_correct_answer_question')), sprintf('Object correctAnswerQuestion does not exist (%s).', $request->getParameter('id_correct_answer_question')));
    $this->form = new correctAnswerQuestionForm($correctAnswerQuestion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($correctAnswerQuestion = CorrectAnswerQuestionPeer::retrieveByPk($request->getParameter('id_correct_answer_question')), sprintf('Object correctAnswerQuestion does not exist (%s).', $request->getParameter('id_correct_answer_question')));
    $correctAnswerQuestion->delete();

    $this->redirect('correctAnswerQuestion/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $correctAnswerQuestion = $form->save();

      $this->redirect('correctAnswerQuestion/edit?id_correct_answer_question='.$correctAnswerQuestion->getIdCorrectAnswerQuestion());
    }
  }
}

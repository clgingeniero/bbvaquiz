<?php

/**
 * questionsQuiz actions.
 *
 * @package    symfony
 * @subpackage questionsQuiz
 * @author     Your name here
 */
class questionsQuizActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->questionsQuizs = QuestionsQuizPeer::doSelect(new Criteria());
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new questionsQuizForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new questionsQuizForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($questionsQuiz = QuestionsQuizPeer::retrieveByPk($request->getParameter('id_questions_quiz')), sprintf('Object questionsQuiz does not exist (%s).', $request->getParameter('id_questions_quiz')));
    $this->form = new questionsQuizForm($questionsQuiz);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($questionsQuiz = QuestionsQuizPeer::retrieveByPk($request->getParameter('id_questions_quiz')), sprintf('Object questionsQuiz does not exist (%s).', $request->getParameter('id_questions_quiz')));
    $this->form = new questionsQuizForm($questionsQuiz);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($questionsQuiz = QuestionsQuizPeer::retrieveByPk($request->getParameter('id_questions_quiz')), sprintf('Object questionsQuiz does not exist (%s).', $request->getParameter('id_questions_quiz')));
    $questionsQuiz->delete();

    $this->redirect('questionsQuiz/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $questionsQuiz = $form->save();

      $this->redirect('questionsQuiz/edit?id_questions_quiz='.$questionsQuiz->getIdQuestionsQuiz());
    }
  }
}

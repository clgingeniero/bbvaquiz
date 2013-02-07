<?php

/**
 * quiz actions.
 *
 * @package    symfony
 * @subpackage quiz
 * @author     Your name here
 */
class quizActions extends sfActions
{
    public function executeIndex(sfWebRequest $request)
    {
      //$this->quizs = QuizPeer::doSelect(new Criteria());
        $this->forward('quiz', 'list');
    }

    public function executeNew(sfWebRequest $request)
    {
      $this->form = new quizForm();
    }

    public function executeCreate(sfWebRequest $request)
    {
      $this->forward404Unless($request->isMethod(sfRequest::POST));

      $this->form = new quizForm();

      $this->processForm($request, $this->form);

      $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request)
    {
      $this->forward404Unless($quiz = QuizPeer::retrieveByPk($request->getParameter('id_quiz')), sprintf('Object quiz does not exist (%s).', $request->getParameter('id_quiz')));
      $this->form = new quizForm($quiz);
    }

    public function executeUpdate(sfWebRequest $request)
    {
      $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
      $this->forward404Unless($quiz = QuizPeer::retrieveByPk($request->getParameter('id_quiz')), sprintf('Object quiz does not exist (%s).', $request->getParameter('id_quiz')));
      $this->form = new quizForm($quiz);

      $this->processForm($request, $this->form);

      $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request)
    {
      $request->checkCSRFProtection();

      $this->forward404Unless($quiz = QuizPeer::retrieveByPk($request->getParameter('id_quiz')), sprintf('Object quiz does not exist (%s).', $request->getParameter('id_quiz')));
      $quiz->delete();

      $this->redirect('quiz/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form)
    {
      $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
      if ($form->isValid())
      {
        $quiz = $form->save();

        $this->redirect('quiz/edit?id_quiz='.$quiz->getIdQuiz());
      }
    }

    public function executeList()
    {
        $criteria = new Criteria();
        $criteriaEnd = new Criteria();

        $criteria->add(QuizPeer::INICIAL_TIME, time(),Criteria::LESS_THAN);
        $criteria->add(QuizPeer::FINAL_TIME, time(),Criteria::GREATER_THAN);

        $criteriaEnd->add(QuizPeer::FINAL_TIME, time(),Criteria::LESS_THAN);

        $this->quiz_active_list = QuizPeer::doSelect($criteria);
        $this->quiz_end_list = QuizPeer::doSelect($criteriaEnd);
    }
  
  
    public function executeDo(sfWebRequest $request, $action = '')
    {
        $this->forward404Unless($quiz = QuizPeer::retrieveByPk($request->getParameter('id')), 
                sprintf('Object quiz does not exist (%s).', $request->getParameter('id')));

        $this->finish = false;

        if($action != 'save') {
            $question = $this->getQuestionStatus($request->getParameter('id')); 
            $this->question = $this->getQuestionActive($question, $request);

            if($this->question != null)
              $this->answers = $this->getAnswers($this->question);
            else {
              $this->setTemplate('finish');
              return;
            }
            $this->action = $action;

            $this->timesQuiz();
        } else {
             $this->setTemplate('save');
             return;
        } 

        $this->setTemplate('do');
    }
  
    /**
     * 
     * @param int $idQuestion
     * @return array ids
     * 
     * retorna los ids de las preguntas ya realizadas
     */
    public function getQuestionStatus($idQuiz)
    {

          $criteria = new Criteria();        
          $criteria->add(QuizusrPeer::ID_QUIZ, $idQuiz);
          $criteria->add(QuizusrPeer::ID_USR_QU, $this->getUser()->getGuardUser()->getId());
          $questions = QuizusrPeer::doSelect($criteria);

          $res = array();

          foreach($questions as $question){
              $res[] = $question->getIdQuestion();
          }

          return $res;
    }
  
    public function getQuestionActive($questions, $request)
    {
        $criteria = new Criteria();
        $criteria->add(QuestionsQuizPeer::ID_QUIZ, $request->getParameter('id'));
        $criteria->add(QuestionsQuizPeer::ID_QUESTION, $questions, Criteria::NOT_IN);
        $criteria->addJoin(QuestionsQuizPeer::ID_QUESTION, QuestionPeer::ID_QUESTION);
        
        return QuestionPeer::doSelectOne($criteria);
      
    }
    
    public function timesQuiz()
    {
        if($this->getUser()->getAttribute('active_time') == null) {
            $criteria = new Criteria();
            $criteriaEnd = new Criteria();

            $criteria->add(QuizPeer::INICIAL_TIME, time(),Criteria::LESS_THAN);
            $criteria->add(QuizPeer::FINAL_TIME, time(),Criteria::GREATER_THAN);

            $criteriaEnd->add(QuizPeer::FINAL_TIME, time(),Criteria::LESS_THAN);

            $this->getUser()->setAttribute('active_time', QuizPeer::doSelect($criteria));
            $this->getUser()->setAttribute('end_time', QuizPeer::doSelect($criteriaEnd));
        }

        $this->quiz_active_list = $this->getUser()->getAttribute('active_time');
        $this->quiz_end_list = $this->getUser()->getAttribute('end_time');
    }
    
    public function getAnswers($question)
    {
        
        $criteria = new Criteria();
        $criteria->add(AnswerPeer::ID_QUESTION, $question->getIdQuestion());
        
        return AnswerPeer::doSelect($criteria);
    }
    
    public function saveQuizLog($request)
    {
        $qusr = new Quizusr();
       
        if($request->getParameter('question') != '' && $request->getParameter('answers') != '' &&
                $this->getUser()->getGuardUser()->getId() != '' && $request->getParameter('id') != '') {
            $qusr->setIdQuestion($request->getParameter('question'));
            $qusr->setIdAnswer($request->getParameter('answers'));
            $qusr->setIdUsrQu($this->getUser()->getGuardUser()->getId());
            $qusr->setIdQuiz($request->getParameter('id'));
            $qusr->save(); 
        }
    }
    
    public function executeSave(sfWebRequest $request)
    {
        
        $this->saveQuizLog($request);
        $this->executeDo($request, 'save');
    }
    
    public function executeViewans(sfWebRequest $request)
    {
        $this->saveQuizLog($request);
        return $this->renderText('1');
        
    }
    
    public function executeNext(sfWebRequest $request)
    {
        return $this->renderText('as results.');
        
    }
    
    
    
  
}
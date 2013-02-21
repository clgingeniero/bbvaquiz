<?php

/**
 * quizlog actions.
 *
 * @package    symfony
 * @subpackage quizlog
 * @author     Your name here
 */
class quizlogActions extends sfActions
{
    const finish = 1;
    const partial = 2;
    
  public function executeIndex(sfWebRequest $request)
  {
    $this->quizusrs = QuizusrPeer::doSelect(new Criteria());
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new quizusrForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new quizusrForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($quizusr = QuizusrPeer::retrieveByPk($request->getParameter('id_quiz_usr')), sprintf('Object quizusr does not exist (%s).', $request->getParameter('id_quiz_usr')));
    $this->form = new quizusrForm($quizusr);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($quizusr = QuizusrPeer::retrieveByPk($request->getParameter('id_quiz_usr')), sprintf('Object quizusr does not exist (%s).', $request->getParameter('id_quiz_usr')));
    $this->form = new quizusrForm($quizusr);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($quizusr = QuizusrPeer::retrieveByPk($request->getParameter('id_quiz_usr')), sprintf('Object quizusr does not exist (%s).', $request->getParameter('id_quiz_usr')));
    $quizusr->delete();

    $this->redirect('quizlog/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $quizusr = $form->save();

      $this->redirect('quizlog/edit?id_quiz_usr='.$quizusr->getIdQuizUsr());
    }
  }
  
  // -- reports
    
    public function executeReport(sfWebRequest $request)
    {
        $type = $request->getParameter('t');
        $id_quiz = $request->getParameter('id');
        $result = '';
        $criteria = '';
        switch ($type) {
            case 'u': // user
                $result = $this->ranking($criteria, $id_quiz);
                break;
            case 'o': // office
                $result = $this->ranking($criteria, $id_quiz);
                break;
            
            case 'z': // zone
                $result = $this->ranking($criteria, $id_quiz);
                break;
            
            case 't': // territorial
                $result = $this->ranking($criteria, $id_quiz);
                break;
            
            case 'p': //
                $result = $this->ranking($criteria, $id_quiz);
                break;
        }
        
        $this->report = $result;
        $this->setTemplate('report');
        
    }
    
    public function ranking($criteria, $id_quiz)
    {
        $c = new Criteria();
        $c->clearSelectColumns();
        //$c->add($criteria);
       
        //$c->addJoin(QuizlogPeer::ID_QUIZ_USR_LOG, QuizPeer::ID_QUIZ);
        $c->addJoin(QuizlogPeer::ID_USRQL, sfGuardUserProfilePeer::USER_ID);
        //$c->addAsColumn('first_name', sfGuardUserProfilePeer::FIRST_NAME);
        //sfGuardUserProfilePeer::addSelectColumns($c);
        //QuizlogPeer::addSelectColumns($c);
        $c->add(QuizlogPeer::ID_QUIZLOG, $id_quiz);
        $c->add(QuizlogPeer::STATUS, self::finish);
        $c->addAscendingOrderByColumn(QuizlogPeer::RESULT);
        return QuizlogPeer::doSelect($c);
    }
    
    
    
}

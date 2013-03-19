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
  
  public function executePreparereport()
  {
     // $offices
      //$zones
      //$territorial
      $this->activities = QuizPeer::doSelect(new Criteria());
      $this->offices = DeptoPeer::doSelect(new Criteria());
      $this->zones = ZonePeer::doSelect(new Criteria());
      $this->territorial = AreaPeer::doSelect(new Criteria());
      $this->setTemplate('preparereport');
      
  }
  
    
    public function executeReport(sfWebRequest $request)
    {
        $type = $request->getParameter('t');
        $status =  $request->getParameter('s');
        $id_quiz = $request->getParameter('id');
        
        $c = new Criteria();
        $c->addJoin(QuizlogPeer::ID_USRQL, sfGuardUserProfilePeer::USER_ID);
        
        
        
        switch ($type) {
            case 'u': // user
                $id_depto = 3; // $request->getParameter('z');
                $c->add(sfGuardUserProfilePeer::ID_DEPTO,  $id_depto);
                
                break;
            case 'o': // office
                $id_depto = $request->getParameter('offices'); // $request->getParameter('z');
                $c->add(sfGuardUserProfilePeer::ID_DEPTO,  $id_depto);
                break;
          
            case 'z': // zone
                $zona = $request->getParameter('zone');; // $request->getParameter('z');
                $c->add(sfGuardUserProfilePeer::ID_ZONE,  $zona);
                break;
            
            case 't': // territorial
                $area = $request->getParameter('ter');; // $request->getParameter('z');
                $c->add(sfGuardUserProfilePeer::ID_AREA,  $area);
                break;
            
            default : // Colombia
                
                break;
        }
        
        
        $c->add(QuizlogPeer::ID_QUIZLOG, $id_quiz);
        $c->add(QuizlogPeer::STATUS, $status);
        $c->addAscendingOrderByColumn(QuizlogPeer::RESULT);
        $this->report =  QuizlogPeer::doSelectJoinsfGuardUserProfile($c);
        
        //$this->setTemplate('report');
        
    }
    
    
}

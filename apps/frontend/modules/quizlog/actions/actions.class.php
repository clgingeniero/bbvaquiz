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
        $this->usersreport = null;
        $this->usrf = false;
        $opusr = $request->getParameter('uo');
        
        
        
        $c = new Criteria();
        $c->addJoin(QuizlogPeer::ID_USRQL, sfGuardUserProfilePeer::USER_ID, Criteria::INNER_JOIN);
        
        
        
        switch ($type) {
            
            case 'o': // office
                $id_depto = $request->getParameter('office'); // $request->getParameter('z'); 
               
                $c->add(sfGuardUserProfilePeer::ID_DEPTO,  $id_depto, Criteria::IN);
                break;
          
            case 'z': // zone
                $zona = $request->getParameter('zone');; // $request->getParameter('z');
                $c->add(sfGuardUserProfilePeer::ID_ZONE,  $zona, Criteria::IN);
                break;
            
            case 't': // territorial
                $area = $request->getParameter('terr'); // $request->getParameter('z');
                $c->add(sfGuardUserProfilePeer::ID_AREA,  $area, Criteria::IN);
                break;
            
            case 'u': // Colombia
                /*$c->addJoin(QuizlogPeer::ID_USRQL, sfGuardUserProfilePeer::USER_ID, Criteria::RIGHT_JOIN);
                
                $area = $request->getParameter('users'); // $request->getParameter('z');
                $c->add(sfGuardUserProfilePeer::ID_AREA,  $area, Criteria::IN);
                $c->add(QuizlogPeer::ID_QUIZ_USR_LOG, Criteria::ISNULL);
                $c->addOr(QuizlogPeer::ID_QUIZLOG, $id_quiz); */
                
                if($opusr == 'ut' || $opusr == 'uf') {
                    $con = Propel::getConnection();
                    //no han presentado nada
                    $sql = "SELECT sf_guard_user_profile.*, quizlog.ID_QUIZ_USR_LOG, quizlog.ID_QUIZLOG, quizlog.ID_USRQL, quizlog.STATUS, 
                    quizlog.RESULT, quizlog.BONUS, quizlog.DATE_END FROM `quizlog` 
                    right JOIN sf_guard_user_profile 
                    ON (quizlog.ID_USRQL=sf_guard_user_profile.USER_ID) 
                    WHERE quizlog.ID_QUIZ_USR_LOG is null  ";

                    $stmt = $con->prepare($sql);
                    $stmt->execute();
                    $this->usersreport = sfGuardUserProfilePeer::populateObjects($stmt);
                
                }
                
                 if($opusr == 'uf') {
                     $this->usrf = true;
                     return;}
                
                break;
        }
        
        
        
        $c->add(QuizlogPeer::ID_QUIZLOG, $id_quiz);
        if($status != 2) { $c->add(QuizlogPeer::STATUS, $status); }
        $c->addDescendingOrderByColumn(QuizlogPeer::RESULT);
        $c->addAscendingOrderByColumn(QuizlogPeer::DATE_END);
        $this->report =  QuizlogPeer::doSelect($c);
        $this->llega = $request;
        //$this->setTemplate('report');
        
    }
    
    
}

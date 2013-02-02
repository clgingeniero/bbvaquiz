<?php

/**
 * quiz actions.
 *
 * @package    bbvaquiz
 * @subpackage quiz
 * @author     clgingeniero@gmail.com
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class quizActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
public function executeIndex(sfWebRequest $request)
  {
    $this->forward('quiz', 'list');
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

 /**
  * Executes show post action
  */
  public function executeShow()
  {
  }
  
}

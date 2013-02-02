<?php

/**
 * question actions.
 *
 * @package    bbvaquiz
 * @subpackage question
 * @author     clgingeniero@gmail.com
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class questionActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('question', 'list');
  }
  
  public function executeList()
  {
  }

 /**
  * Executes show post action
  */
  public function executeShow()
  {
  }
  
}

<?php

/**
 * instructions actions.
 *
 * @package    symfony
 * @subpackage instructions
 * @author     Your name here
 */
class instructionsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->instructionss = InstructionsPeer::doSelect(new Criteria());
  }
  
  public function executeHome()
  {
    $this->setTemplate('home');
  }
  
  public function executeHelp()
  {
      $this->instructionss = InstructionsPeer::doSelect(new Criteria());
      $this->setTemplate('help');
  }
}

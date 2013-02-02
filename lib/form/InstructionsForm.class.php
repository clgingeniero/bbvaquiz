<?php

/**
 * Instructions form.
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
class InstructionsForm extends BaseInstructionsForm
{
  public function configure()
  {
      $this->widgetSchema['instruction'] =
      new sfWidgetFormTextareaTinyMCE();
  }
}

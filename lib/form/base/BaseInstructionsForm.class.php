<?php

/**
 * Instructions form base class.
 *
 * @method Instructions getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseInstructionsForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_instruction' => new sfWidgetFormInputHidden(),
      'instruction'    => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id_instruction' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdInstruction()), 'empty_value' => $this->getObject()->getIdInstruction(), 'required' => false)),
      'instruction'    => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('instructions[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Instructions';
  }


}

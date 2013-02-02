<?php

/**
 * Dificulty form base class.
 *
 * @method Dificulty getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDificultyForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_dificulty' => new sfWidgetFormInputHidden(),
      'name'         => new sfWidgetFormInputText(),
      'value'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_dificulty' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdDificulty()), 'empty_value' => $this->getObject()->getIdDificulty(), 'required' => false)),
      'name'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'value'        => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dificulty[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Dificulty';
  }


}

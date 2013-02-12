<?php

/**
 * Area form base class.
 *
 * @method Area getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAreaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_area' => new sfWidgetFormInputHidden(),
      'area'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_area' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdArea()), 'empty_value' => $this->getObject()->getIdArea(), 'required' => false)),
      'area'    => new sfValidatorString(array('max_length' => 145)),
    ));

    $this->widgetSchema->setNameFormat('area[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Area';
  }


}

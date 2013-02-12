<?php

/**
 * Zone form base class.
 *
 * @method Zone getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseZoneForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_zone' => new sfWidgetFormInputHidden(),
      'zone'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_zone' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdZone()), 'empty_value' => $this->getObject()->getIdZone(), 'required' => false)),
      'zone'    => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->widgetSchema->setNameFormat('zone[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Zone';
  }


}

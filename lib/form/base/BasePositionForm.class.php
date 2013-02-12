<?php

/**
 * Position form base class.
 *
 * @method Position getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePositionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_position' => new sfWidgetFormInputHidden(),
      'position'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_position' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdPosition()), 'empty_value' => $this->getObject()->getIdPosition(), 'required' => false)),
      'position'    => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->widgetSchema->setNameFormat('position[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Position';
  }


}

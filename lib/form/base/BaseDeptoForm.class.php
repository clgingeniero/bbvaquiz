<?php

/**
 * Depto form base class.
 *
 * @method Depto getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDeptoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_depto' => new sfWidgetFormInputHidden(),
      'depto'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_depto' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdDepto()), 'empty_value' => $this->getObject()->getIdDepto(), 'required' => false)),
      'depto'    => new sfValidatorString(array('max_length' => 200)),
    ));

    $this->widgetSchema->setNameFormat('depto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Depto';
  }


}

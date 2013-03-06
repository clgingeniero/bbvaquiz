<?php

/**
 * Perfil form base class.
 *
 * @method Perfil getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePerfilForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'correo'     => new sfWidgetFormInputText(),
      'nombre'     => new sfWidgetFormInputText(),
      'sexo'       => new sfWidgetFormInputText(),
      'usuario'    => new sfWidgetFormInputText(),
      'cargo'      => new sfWidgetFormInputText(),
      'costo'      => new sfWidgetFormInputText(),
      'oficina'    => new sfWidgetFormInputText(),
      'zona'       => new sfWidgetFormInputText(),
      'area'       => new sfWidgetFormInputText(),
      'id_zona'    => new sfWidgetFormInputText(),
      'id_oficina' => new sfWidgetFormInputText(),
      'id_area'    => new sfWidgetFormInputText(),
      'id_cargo'   => new sfWidgetFormInputText(),
      'id'         => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'correo'     => new sfValidatorString(array('max_length' => 145, 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 145, 'required' => false)),
      'sexo'       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'usuario'    => new sfValidatorString(array('max_length' => 145, 'required' => false)),
      'cargo'      => new sfValidatorString(array('max_length' => 145, 'required' => false)),
      'costo'      => new sfValidatorString(array('max_length' => 145, 'required' => false)),
      'oficina'    => new sfValidatorString(array('max_length' => 145, 'required' => false)),
      'zona'       => new sfValidatorString(array('max_length' => 145, 'required' => false)),
      'area'       => new sfValidatorString(array('max_length' => 245, 'required' => false)),
      'id_zona'    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'id_oficina' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'id_area'    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'id_cargo'   => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('perfil[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Perfil';
  }


}

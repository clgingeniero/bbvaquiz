<?php

/**
 * Perfil filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BasePerfilFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'correo'     => new sfWidgetFormFilterInput(),
      'nombre'     => new sfWidgetFormFilterInput(),
      'sexo'       => new sfWidgetFormFilterInput(),
      'usuario'    => new sfWidgetFormFilterInput(),
      'cargo'      => new sfWidgetFormFilterInput(),
      'costo'      => new sfWidgetFormFilterInput(),
      'oficina'    => new sfWidgetFormFilterInput(),
      'zona'       => new sfWidgetFormFilterInput(),
      'area'       => new sfWidgetFormFilterInput(),
      'id_zona'    => new sfWidgetFormFilterInput(),
      'id_oficina' => new sfWidgetFormFilterInput(),
      'id_area'    => new sfWidgetFormFilterInput(),
      'id_cargo'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'correo'     => new sfValidatorPass(array('required' => false)),
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'sexo'       => new sfValidatorPass(array('required' => false)),
      'usuario'    => new sfValidatorPass(array('required' => false)),
      'cargo'      => new sfValidatorPass(array('required' => false)),
      'costo'      => new sfValidatorPass(array('required' => false)),
      'oficina'    => new sfValidatorPass(array('required' => false)),
      'zona'       => new sfValidatorPass(array('required' => false)),
      'area'       => new sfValidatorPass(array('required' => false)),
      'id_zona'    => new sfValidatorPass(array('required' => false)),
      'id_oficina' => new sfValidatorPass(array('required' => false)),
      'id_area'    => new sfValidatorPass(array('required' => false)),
      'id_cargo'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('perfil_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Perfil';
  }

  public function getFields()
  {
    return array(
      'correo'     => 'Text',
      'nombre'     => 'Text',
      'sexo'       => 'Text',
      'usuario'    => 'Text',
      'cargo'      => 'Text',
      'costo'      => 'Text',
      'oficina'    => 'Text',
      'zona'       => 'Text',
      'area'       => 'Text',
      'id_zona'    => 'Text',
      'id_oficina' => 'Text',
      'id_area'    => 'Text',
      'id_cargo'   => 'Text',
      'id'         => 'Number',
    );
  }
}

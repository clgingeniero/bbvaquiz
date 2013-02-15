<?php

/**
 * Depto filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseDeptoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'depto'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'depto'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('depto_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Depto';
  }

  public function getFields()
  {
    return array(
      'id_depto' => 'Number',
      'depto'    => 'Text',
    );
  }
}

<?php

/**
 * Zone filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseZoneFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'zone'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'zone'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('zone_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Zone';
  }

  public function getFields()
  {
    return array(
      'id_zone' => 'Number',
      'zone'    => 'Text',
    );
  }
}

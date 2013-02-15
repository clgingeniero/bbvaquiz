<?php

/**
 * Area filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAreaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'area'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'area'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('area_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Area';
  }

  public function getFields()
  {
    return array(
      'id_area' => 'Number',
      'area'    => 'Text',
    );
  }
}

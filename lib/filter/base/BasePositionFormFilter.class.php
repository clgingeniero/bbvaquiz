<?php

/**
 * Position filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BasePositionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'position'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'position'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('position_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Position';
  }

  public function getFields()
  {
    return array(
      'id_position' => 'Number',
      'position'    => 'Text',
    );
  }
}

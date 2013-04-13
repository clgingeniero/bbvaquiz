<?php

/**
 * Instructions filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseInstructionsFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'instruction'    => new sfWidgetFormFilterInput(),
    ));
    
    $this->widgetSchema["instruction"] = new sfWidgetFormFilterInput(array('with_empty' => false));


    $this->setValidators(array(
      'instruction'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('instructions_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Instructions';
  }

  public function getFields()
  {
    return array(
      'id_instruction' => 'Number',
      'instruction'    => 'Text',
    );
  }
}

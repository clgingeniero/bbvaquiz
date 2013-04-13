<?php

/**
 * Quiz filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseQuizFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'description'  => new sfWidgetFormFilterInput(),
      'inicial_time' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'final_time'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'description'  => new sfValidatorPass(array('required' => false)),
      'inicial_time' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'final_time'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));
    
    $this->widgetSchema["description"] = new sfWidgetFormFilterInput(array('with_empty' => false));


    $this->widgetSchema->setNameFormat('quiz_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Quiz';
  }

  public function getFields()
  {
    return array(
      'id_quiz'      => 'Number',
      'description'  => 'Text',
      'inicial_time' => 'Date',
      'final_time'   => 'Date',
    );
  }
}

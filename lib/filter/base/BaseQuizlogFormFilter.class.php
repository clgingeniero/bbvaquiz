<?php

/**
 * Quizlog filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseQuizlogFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_quizlog'      => new sfWidgetFormPropelChoice(array('model' => 'Quiz', 'add_empty' => true)),
      'id_usrql'        => new sfWidgetFormPropelChoice(array('model' => 'SfGuardUserProfile', 'add_empty' => true, 'key_method' => 'getUserId')),
      'status'          => new sfWidgetFormFilterInput(),
      'result'          => new sfWidgetFormFilterInput(),
      'bonus'           => new sfWidgetFormFilterInput(),
      'date_end'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'id_quizlog'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Quiz', 'column' => 'id_quiz')),
      'id_usrql'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'SfGuardUserProfile', 'column' => 'user_id')),
      'status'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'result'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bonus'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'date_end'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('quizlog_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Quizlog';
  }

  public function getFields()
  {
    return array(
      'id_quiz_usr_log' => 'Number',
      'id_quizlog'      => 'ForeignKey',
      'id_usrql'        => 'ForeignKey',
      'status'          => 'Number',
      'result'          => 'Number',
      'bonus'           => 'Number',
      'date_end'        => 'Date',
    );
  }
}

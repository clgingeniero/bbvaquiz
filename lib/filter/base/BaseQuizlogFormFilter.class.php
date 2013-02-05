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
      'id_usrql'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'status'          => new sfWidgetFormFilterInput(),
      'result'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_quizlog'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Quiz', 'column' => 'id_quiz')),
      'id_usrql'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'result'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
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
      'id_usrql'        => 'Number',
      'status'          => 'Number',
      'result'          => 'Number',
    );
  }
}

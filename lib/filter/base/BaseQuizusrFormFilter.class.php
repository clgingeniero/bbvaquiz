<?php

/**
 * Quizusr filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseQuizusrFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_usr_qu'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_question' => new sfWidgetFormPropelChoice(array('model' => 'Question', 'add_empty' => true)),
      'id_answer'   => new sfWidgetFormPropelChoice(array('model' => 'Answer', 'add_empty' => true)),
      'id_quiz'     => new sfWidgetFormPropelChoice(array('model' => 'Quiz', 'add_empty' => true)),
    ));
    

    $this->setValidators(array(
      'id_usr_qu'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_question' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Question', 'column' => 'id_question')),
      'id_answer'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Answer', 'column' => 'id_answer')),
      'id_quiz'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Quiz', 'column' => 'id_quiz')),
    ));

    $this->widgetSchema->setNameFormat('quizusr_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Quizusr';
  }

  public function getFields()
  {
    return array(
      'id_quiz_usr' => 'Number',
      'id_usr_qu'   => 'Number',
      'id_question' => 'ForeignKey',
      'id_answer'   => 'ForeignKey',
      'id_quiz'     => 'ForeignKey',
    );
  }
}

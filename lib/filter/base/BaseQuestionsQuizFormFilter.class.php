<?php

/**
 * QuestionsQuiz filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseQuestionsQuizFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_quiz'           => new sfWidgetFormPropelChoice(array('model' => 'Quiz', 'add_empty' => true)),
      'id_question'       => new sfWidgetFormPropelChoice(array('model' => 'Question', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id_quiz'           => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Quiz', 'column' => 'id_quiz')),
      'id_question'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Question', 'column' => 'id_question')),
    ));

    $this->widgetSchema->setNameFormat('questions_quiz_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'QuestionsQuiz';
  }

  public function getFields()
  {
    return array(
      'id_questions_quiz' => 'Number',
      'id_quiz'           => 'ForeignKey',
      'id_question'       => 'ForeignKey',
    );
  }
}

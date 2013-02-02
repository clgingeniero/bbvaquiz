<?php

/**
 * CorrectAnswerQuestion filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseCorrectAnswerQuestionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_question'                => new sfWidgetFormPropelChoice(array('model' => 'Question', 'add_empty' => true)),
      'id_answer'                  => new sfWidgetFormPropelChoice(array('model' => 'Answer', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id_question'                => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Question', 'column' => 'id_question')),
      'id_answer'                  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Answer', 'column' => 'id_answer')),
    ));

    $this->widgetSchema->setNameFormat('correct_answer_question_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CorrectAnswerQuestion';
  }

  public function getFields()
  {
    return array(
      'id_correct_answer_question' => 'Number',
      'id_question'                => 'ForeignKey',
      'id_answer'                  => 'ForeignKey',
    );
  }
}

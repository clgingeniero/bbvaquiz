<?php

/**
 * QuestionsQuiz form base class.
 *
 * @method QuestionsQuiz getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseQuestionsQuizForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_questions_quiz' => new sfWidgetFormInputHidden(),
      'id_quiz'           => new sfWidgetFormPropelChoice(array('model' => 'Quiz', 'add_empty' => true)),
      'id_question'       => new sfWidgetFormPropelChoice(array('model' => 'Question', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id_questions_quiz' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdQuestionsQuiz()), 'empty_value' => $this->getObject()->getIdQuestionsQuiz(), 'required' => false)),
      'id_quiz'           => new sfValidatorPropelChoice(array('model' => 'Quiz', 'column' => 'id_quiz', 'required' => false)),
      'id_question'       => new sfValidatorPropelChoice(array('model' => 'Question', 'column' => 'id_question', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('questions_quiz[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'QuestionsQuiz';
  }


}

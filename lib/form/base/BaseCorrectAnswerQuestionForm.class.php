<?php

/**
 * CorrectAnswerQuestion form base class.
 *
 * @method CorrectAnswerQuestion getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCorrectAnswerQuestionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_correct_answer_question' => new sfWidgetFormInputHidden(),
      'id_question'                => new sfWidgetFormPropelChoice(array('model' => 'Question', 'add_empty' => true)),
      'id_answer'                  => new sfWidgetFormPropelChoice(array('model' => 'Answer', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id_correct_answer_question' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdCorrectAnswerQuestion()), 'empty_value' => $this->getObject()->getIdCorrectAnswerQuestion(), 'required' => false)),
      'id_question'                => new sfValidatorPropelChoice(array('model' => 'Question', 'column' => 'id_question', 'required' => false)),
      'id_answer'                  => new sfValidatorPropelChoice(array('model' => 'Answer', 'column' => 'id_answer', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('correct_answer_question[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CorrectAnswerQuestion';
  }


}

<?php

/**
 * DificultyQuiz form base class.
 *
 * @method DificultyQuiz getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDificultyQuizForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_dif_quiz' => new sfWidgetFormInputHidden(),
      'easy'        => new sfWidgetFormInputText(),
      'medium'      => new sfWidgetFormInputText(),
      'hard'        => new sfWidgetFormInputText(),
      'id_quiz'     => new sfWidgetFormPropelChoice(array('model' => 'Quiz', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id_dif_quiz' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdDifQuiz()), 'empty_value' => $this->getObject()->getIdDifQuiz(), 'required' => false)),
      'easy'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'medium'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'hard'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'id_quiz'     => new sfValidatorPropelChoice(array('model' => 'Quiz', 'column' => 'id_quiz', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dificulty_quiz[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DificultyQuiz';
  }


}

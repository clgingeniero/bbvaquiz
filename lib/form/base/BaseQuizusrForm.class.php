<?php

/**
 * Quizusr form base class.
 *
 * @method Quizusr getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseQuizusrForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_quiz_usr' => new sfWidgetFormInputHidden(),
      'id_usr_qu'   => new sfWidgetFormInputText(),
      'id_question' => new sfWidgetFormPropelChoice(array('model' => 'Question', 'add_empty' => true)),
      'id_answer'   => new sfWidgetFormPropelChoice(array('model' => 'Answer', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id_quiz_usr' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdQuizUsr()), 'empty_value' => $this->getObject()->getIdQuizUsr(), 'required' => false)),
      'id_usr_qu'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'id_question' => new sfValidatorPropelChoice(array('model' => 'Question', 'column' => 'id_question', 'required' => false)),
      'id_answer'   => new sfValidatorPropelChoice(array('model' => 'Answer', 'column' => 'id_answer', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('quizusr[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Quizusr';
  }


}

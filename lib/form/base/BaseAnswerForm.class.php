<?php

/**
 * Answer form base class.
 *
 * @method Answer getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAnswerForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_answer'   => new sfWidgetFormInputHidden(),
      'answer'      => new sfWidgetFormInputText(),
      'id_question' => new sfWidgetFormPropelChoice(array('model' => 'Question', 'add_empty' => true)),
      'correct'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_answer'   => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAnswer()), 'empty_value' => $this->getObject()->getIdAnswer(), 'required' => false)),
      'answer'      => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'id_question' => new sfValidatorPropelChoice(array('model' => 'Question', 'column' => 'id_question', 'required' => false)),
      'correct'     => new sfValidatorInteger(array('min' => -32768, 'max' => 32767, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('answer[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Answer';
  }


}

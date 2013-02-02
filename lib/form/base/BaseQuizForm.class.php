<?php

/**
 * Quiz form base class.
 *
 * @method Quiz getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseQuizForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_quiz'      => new sfWidgetFormInputHidden(),
      'description'  => new sfWidgetFormTextarea(),
      'inicial_time' => new sfWidgetFormDateTime(),
      'final_time'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_quiz'      => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdQuiz()), 'empty_value' => $this->getObject()->getIdQuiz(), 'required' => false)),
      'description'  => new sfValidatorString(array('required' => false)),
      'inicial_time' => new sfValidatorDateTime(array('required' => false)),
      'final_time'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('quiz[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Quiz';
  }


}

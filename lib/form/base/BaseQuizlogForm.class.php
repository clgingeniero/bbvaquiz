<?php

/**
 * Quizlog form base class.
 *
 * @method Quizlog getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseQuizlogForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_quiz_usr_log' => new sfWidgetFormInputHidden(),
      'id_quizlog'      => new sfWidgetFormPropelChoice(array('model' => 'Quiz', 'add_empty' => true)),
      'id_usrql'        => new sfWidgetFormPropelChoice(array('model' => 'SfGuardUserProfile', 'add_empty' => false, 'key_method' => 'getUserId')),
      'status'          => new sfWidgetFormInputText(),
      'result'          => new sfWidgetFormInputText(),
      'bonus'           => new sfWidgetFormInputText(),
      'date_end'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_quiz_usr_log' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdQuizUsrLog()), 'empty_value' => $this->getObject()->getIdQuizUsrLog(), 'required' => false)),
      'id_quizlog'      => new sfValidatorPropelChoice(array('model' => 'Quiz', 'column' => 'id_quiz', 'required' => false)),
      'id_usrql'        => new sfValidatorPropelChoice(array('model' => 'SfGuardUserProfile', 'column' => 'user_id')),
      'status'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'result'          => new sfValidatorNumber(array('required' => false)),
      'bonus'           => new sfValidatorNumber(array('required' => false)),
      'date_end'        => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('quizlog[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Quizlog';
  }


}

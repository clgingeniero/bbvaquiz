<?php

/**
 * BonusQuiz form base class.
 *
 * @method BonusQuiz getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBonusQuizForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_bonus_quiz' => new sfWidgetFormInputHidden(),
      'id_quiz'       => new sfWidgetFormPropelChoice(array('model' => 'Quiz', 'add_empty' => true)),
      'hours'         => new sfWidgetFormInputText(),
      'bonus'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_bonus_quiz' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdBonusQuiz()), 'empty_value' => $this->getObject()->getIdBonusQuiz(), 'required' => false)),
      'id_quiz'       => new sfValidatorPropelChoice(array('model' => 'Quiz', 'column' => 'id_quiz', 'required' => false)),
      'hours'         => new sfValidatorNumber(array('required' => false)),
      'bonus'         => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('bonus_quiz[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'BonusQuiz';
  }


}

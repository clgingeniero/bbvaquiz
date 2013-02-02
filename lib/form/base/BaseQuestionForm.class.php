<?php

/**
 * Question form base class.
 *
 * @method Question getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseQuestionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_question'   => new sfWidgetFormInputHidden(),
      'question'      => new sfWidgetFormTextarea(),
      'id_dificultad' => new sfWidgetFormPropelChoice(array('model' => 'Dificulty', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id_question'   => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdQuestion()), 'empty_value' => $this->getObject()->getIdQuestion(), 'required' => false)),
      'question'      => new sfValidatorString(array('required' => false)),
      'id_dificultad' => new sfValidatorPropelChoice(array('model' => 'Dificulty', 'column' => 'id_dificulty', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('question[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Question';
  }


}

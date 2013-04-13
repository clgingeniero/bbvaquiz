<?php

/**
 * Question filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseQuestionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'question'      => new sfWidgetFormFilterInput(),
      'id_dificultad' => new sfWidgetFormPropelChoice(array('model' => 'Dificulty', 'add_empty' => true)),
    ));

    $this->widgetSchema["question"] = new sfWidgetFormFilterInput(array('with_empty' => false));


    $this->setValidators(array(
      'question'      => new sfValidatorPass(array('required' => false)),
      'id_dificultad' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Dificulty', 'column' => 'id_dificulty')),
    ));

    $this->widgetSchema->setNameFormat('question_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Question';
  }

  public function getFields()
  {
    return array(
      'id_question'   => 'Number',
      'question'      => 'Text',
      'id_dificultad' => 'ForeignKey',
    );
  }
}

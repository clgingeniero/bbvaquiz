<?php

/**
 * Answer filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAnswerFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'answer'      => new sfWidgetFormFilterInput(),
      'id_question' => new sfWidgetFormPropelChoice(array('model' => 'Question', 'add_empty' => true)),
      'correct'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'answer'      => new sfValidatorPass(array('required' => false)),
      'id_question' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Question', 'column' => 'id_question')),
      'correct'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('answer_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Answer';
  }

  public function getFields()
  {
    return array(
      'id_answer'   => 'Number',
      'answer'      => 'Text',
      'id_question' => 'ForeignKey',
      'correct'     => 'Text',
    );
  }
}

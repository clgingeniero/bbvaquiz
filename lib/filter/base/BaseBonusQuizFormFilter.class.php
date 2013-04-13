<?php

/**
 * BonusQuiz filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseBonusQuizFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_quiz'       => new sfWidgetFormPropelChoice(array('model' => 'Quiz', 'add_empty' => true)),
      'hours'         => new sfWidgetFormFilterInput(),
      'bonus'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_quiz'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Quiz', 'column' => 'id_quiz')),
      'hours'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bonus'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));
    
    $this->widgetSchema["hours"] = new sfWidgetFormFilterInput(array('with_empty' => false));

    $this->widgetSchema["bonus"] = new sfWidgetFormFilterInput(array('with_empty' => false));

   
    $this->widgetSchema->setNameFormat('bonus_quiz_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'BonusQuiz';
  }

  public function getFields()
  {
    return array(
      'id_bonus_quiz' => 'Number',
      'id_quiz'       => 'ForeignKey',
      'hours'         => 'Number',
      'bonus'         => 'Number',
    );
  }
}

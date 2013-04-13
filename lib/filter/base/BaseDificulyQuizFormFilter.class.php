<?php

/**
 * DificultyQuiz filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseDificultyQuizFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'easy'        => new sfWidgetFormFilterInput(),
      'medium'      => new sfWidgetFormFilterInput(),
      'hard'        => new sfWidgetFormFilterInput(),
      'id_quiz'     => new sfWidgetFormPropelChoice(array('model' => 'Quiz', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'easy'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'medium'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'hard'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_quiz'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Quiz', 'column' => 'id_quiz')),
    ));

    $this->widgetSchema["easy"] = new sfWidgetFormFilterInput(array('with_empty' => false));

    $this->widgetSchema["medium"] = new sfWidgetFormFilterInput(array('with_empty' => false));

    $this->widgetSchema["hard"] = new sfWidgetFormFilterInput(array('with_empty' => false));
    
    $this->widgetSchema->setNameFormat('dificulty_quiz_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DificultyQuiz';
  }

  public function getFields()
  {
    return array(
      'id_dif_quiz' => 'Number',
      'easy'        => 'Number',
      'medium'      => 'Number',
      'hard'        => 'Number',
      'id_quiz'     => 'ForeignKey',
    );
  }
}

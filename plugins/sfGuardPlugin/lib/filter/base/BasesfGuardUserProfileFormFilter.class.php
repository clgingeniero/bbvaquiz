<?php

/**
 * SfGuardUserProfile filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseSfGuardUserProfileFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'        => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'first_name'     => new sfWidgetFormFilterInput(),
      'last_name'      => new sfWidgetFormFilterInput(),
      'birthday'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'id_zone'        => new sfWidgetFormPropelChoice(array('model' => 'Zone', 'add_empty' => true)),
      'email'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gender'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_bank_id'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_position'    => new sfWidgetFormPropelChoice(array('model' => 'Position', 'add_empty' => true)),
      'id_center_cost' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_depto'       => new sfWidgetFormPropelChoice(array('model' => 'Depto', 'add_empty' => true)),
      'id_area'        => new sfWidgetFormPropelChoice(array('model' => 'Area', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'user_id'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
      'first_name'     => new sfValidatorPass(array('required' => false)),
      'last_name'      => new sfValidatorPass(array('required' => false)),
      'birthday'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'id_zone'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Zone', 'column' => 'id_zone')),
      'email'          => new sfValidatorPass(array('required' => false)),
      'gender'         => new sfValidatorPass(array('required' => false)),
      'user_bank_id'   => new sfValidatorPass(array('required' => false)),
      'id_position'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Position', 'column' => 'id_position')),
      'id_center_cost' => new sfValidatorPass(array('required' => false)),
      'id_depto'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Depto', 'column' => 'id_depto')),
      'id_area'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Area', 'column' => 'id_area')),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_user_profile_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SfGuardUserProfile';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'user_id'        => 'ForeignKey',
      'first_name'     => 'Text',
      'last_name'      => 'Text',
      'birthday'       => 'Date',
      'id_zone'        => 'ForeignKey',
      'email'          => 'Text',
      'gender'         => 'Text',
      'user_bank_id'   => 'Text',
      'id_position'    => 'ForeignKey',
      'id_center_cost' => 'Text',
      'id_depto'       => 'ForeignKey',
      'id_area'        => 'ForeignKey',
    );
  }
}

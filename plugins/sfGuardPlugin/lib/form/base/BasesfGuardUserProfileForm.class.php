<?php

/**
 * SfGuardUserProfile form base class.
 *
 * @method SfGuardUserProfile getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseSfGuardUserProfileForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'user_id'        => new sfWidgetFormInputHidden(),//sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => false)),
      'first_name'     => new sfWidgetFormInputText(),
      'last_name'      => new sfWidgetFormInputText(),
      'birthday'       => new sfWidgetFormDate(),
      'id_zone'        => new sfWidgetFormPropelChoice(array('model' => 'Zone', 'add_empty' => false)),
      'email'          => new sfWidgetFormInputText(),
      'gender'         => new sfWidgetFormInputText(),
      'user_bank_id'   => new sfWidgetFormInputText(),
      'id_position'    => new sfWidgetFormPropelChoice(array('model' => 'Position', 'add_empty' => false)),
      'id_center_cost' => new sfWidgetFormInputText(),
      'id_depto'       => new sfWidgetFormPropelChoice(array('model' => 'Depto', 'add_empty' => false)),
      'id_area'        => new sfWidgetFormPropelChoice(array('model' => 'Area', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'user_id'        => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id')),
      'first_name'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'last_name'      => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'birthday'       => new sfValidatorDate(array('required' => false)),
      'id_zone'        => new sfValidatorPropelChoice(array('model' => 'Zone', 'column' => 'id_zone')),
      'email'          => new sfValidatorString(array('max_length' => 100)),
      'gender'         => new sfValidatorString(array('max_length' => 10)),
      'user_bank_id'   => new sfValidatorString(array('max_length' => 45)),
      'id_position'    => new sfValidatorPropelChoice(array('model' => 'Position', 'column' => 'id_position')),
      'id_center_cost' => new sfValidatorString(array('max_length' => 45)),
      'id_depto'       => new sfValidatorPropelChoice(array('model' => 'Depto', 'column' => 'id_depto')),
      'id_area'        => new sfValidatorPropelChoice(array('model' => 'Area', 'column' => 'id_area')),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_user_profile[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SfGuardUserProfile';
  }


}

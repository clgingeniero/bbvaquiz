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
      'user_id'        => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => false)),
      'first_name'     => new sfWidgetFormInputText(),
      'last_name'      => new sfWidgetFormInputText(),
      'birthday'       => new sfWidgetFormDate(),
      'id_zone'        => new sfWidgetFormInputText(),
      'email'          => new sfWidgetFormInputText(),
      'gender'         => new sfWidgetFormInputText(),
      'user_bank_id'   => new sfWidgetFormInputText(),
      'id_position'    => new sfWidgetFormInputText(),
      'id_center_cost' => new sfWidgetFormInputText(),
      'id_depto'       => new sfWidgetFormInputText(),
      'id_area'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'user_id'        => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id')),
      'first_name'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'last_name'      => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'birthday'       => new sfValidatorDate(array('required' => false)),
      'id_zone'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'email'          => new sfValidatorString(array('max_length' => 100)),
      'gender'         => new sfValidatorString(array('max_length' => 10)),
      'user_bank_id'   => new sfValidatorString(array('max_length' => 45)),
      'id_position'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'id_center_cost' => new sfValidatorString(array('max_length' => 45)),
      'id_depto'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'id_area'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
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

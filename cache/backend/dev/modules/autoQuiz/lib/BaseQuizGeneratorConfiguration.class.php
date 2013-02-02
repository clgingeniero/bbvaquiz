<?php

/**
 * quiz module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage quiz
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseQuizGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%id_quiz%% - %%description%% - %%inicial_time%% - %%final_time%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Administrador de examenes';
  }

  public function getEditTitle()
  {
    return 'Edición de "%%description%%"';
  }

  public function getNewTitle()
  {
    return 'New Quiz';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id_quiz',  1 => 'description',  2 => 'inicial_time',  3 => 'final_time',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id_quiz' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'description' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'inicial_time' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'final_time' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'fields' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'inicial_time' =>   array(    'name' => 'inicio',    'type' => 'plain',    'params' => 'date_format=\'dd/MM/yy\'',  ),  'final_time' =>   array(    'type' => 'plain',    'params' => 'date_format=\'dd/MM/yy\'',  ),),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id_quiz' => array(),
      'description' => array(),
      'inicial_time' => array(),
      'final_time' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id_quiz' => array(),
      'description' => array(),
      'inicial_time' => array(  'name' => 'inicio',  'type' => 'plain',  'params' => 'date_format=\'dd/MM/yy\'',),
      'final_time' => array(  'type' => 'plain',  'params' => 'date_format=\'dd/MM/yy\'',),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id_quiz' => array(),
      'description' => array(),
      'inicial_time' => array(),
      'final_time' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id_quiz' => array(),
      'description' => array(),
      'inicial_time' => array(  'label' => 'Inicio',),
      'final_time' => array(  'label' => 'Fin',  'type' => 'input_date_tag',  'params' => 'date_format=\'dd/MM/yy\'',),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id_quiz' => array(),
      'description' => array(),
      'inicial_time' => array(),
      'final_time' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'quizForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'quizFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfPropelPager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getPeerMethod()
  {
    return 'doSelect';
  }

  public function getPeerCountMethod()
  {
    return 'doCount';
  }
}

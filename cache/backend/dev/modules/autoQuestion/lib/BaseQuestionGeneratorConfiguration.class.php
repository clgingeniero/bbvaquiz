<?php

/**
 * question module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage question
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseQuestionGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%question%% - %%dificulty_name%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Administrador de preguntas';
  }

  public function getEditTitle()
  {
    return 'Edición de "%%question%%"';
  }

  public function getNewTitle()
  {
    return 'Nueva pregunta';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array(  'Content' =>   array(    0 => 'question',    1 => 'id_dificultad',  ),);
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
    return array(  0 => 'question',  1 => 'dificulty_name',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id_question' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'question' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'id_dificultad' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id_question' => array(),
      'question' => array(),
      'id_dificultad' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id_question' => array(),
      'question' => array(),
      'id_dificultad' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id_question' => array(),
      'question' => array(),
      'id_dificultad' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id_question' => array(),
      'question' => array(),
      'id_dificultad' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id_question' => array(),
      'question' => array(),
      'id_dificultad' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'questionForm';
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
    return 'questionFormFilter';
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
    return 'doSelectJoinDificulty';
  }

  public function getPeerCountMethod()
  {
    return 'doCount';
  }
}

<?php

/**
 * answer module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage answer
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAnswerGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%answer%% - %%question_name%% - %%correct%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Administrador de respuestas';
  }

  public function getEditTitle()
  {
    return 'Edición de "%%answer%%"';
  }

  public function getNewTitle()
  {
    return 'Nueva respuesta';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array(  'Content' =>   array(    0 => 'answer',    1 => 'id_question',    2 => 'correct',  ),);
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
    return array(  0 => 'answer',  1 => 'question_name',  2 => 'correct',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id_answer' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'answer' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'id_question' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'correct' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id_answer' => array(),
      'answer' => array(),
      'id_question' => array(),
      'correct' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id_answer' => array(),
      'answer' => array(),
      'id_question' => array(),
      'correct' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id_answer' => array(),
      'answer' => array(),
      'id_question' => array(),
      'correct' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id_answer' => array(),
      'answer' => array(),
      'id_question' => array(),
      'correct' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id_answer' => array(),
      'answer' => array(),
      'id_question' => array(),
      'correct' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'answerForm';
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
    return 'answerFormFilter';
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
    return 'doSelectJoinQuestion';
  }

  public function getPeerCountMethod()
  {
    return 'doCount';
  }
}

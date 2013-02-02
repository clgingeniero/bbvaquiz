<?php

/**
 * correct_answer_question module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage correct_answer_question
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCorrect_answer_questionGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%question%% - %%answer%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Administrador de respuestas correctas';
  }

  public function getEditTitle()
  {
    return 'Edición de "%%answer%%"';
  }

  public function getNewTitle()
  {
    return 'Nueva respuesta correcta pregunta';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array(  'Content' =>   array(    0 => 'id_question',    1 => 'id_answer',  ),);
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
    return array(  0 => 'question',  1 => 'answer',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id_correct_answer_question' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'id_question' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'id_answer' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id_correct_answer_question' => array(),
      'id_question' => array(),
      'id_answer' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id_correct_answer_question' => array(),
      'id_question' => array(),
      'id_answer' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id_correct_answer_question' => array(),
      'id_question' => array(),
      'id_answer' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id_correct_answer_question' => array(),
      'id_question' => array(),
      'id_answer' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id_correct_answer_question' => array(),
      'id_question' => array(),
      'id_answer' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'correctAnswerQuestionForm';
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
    return 'correctAnswerQuestionFormFilter';
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

<?php

/**
 * dificulty_quiz module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage dificulty_quiz
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDificulty_quizGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%quiz%% - %%easy%% - %%medium%% - %%hard%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Dificulty quiz List';
  }

  public function getEditTitle()
  {
    return 'Edición de dificultad para "%%id_quiz%%"';
  }

  public function getNewTitle()
  {
    return 'Nueva opción de dificultad para la actividad';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array(  'Content' =>   array(    0 => 'id_quiz',    1 => 'easy',    2 => 'medium',    3 => 'hard',  ),);
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
    return array(  0 => 'quiz',  1 => 'easy',  2 => 'medium',  3 => 'hard',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id_dif_quiz' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'easy' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'medium' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'hard' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'id_quiz' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id_dif_quiz' => array(),
      'easy' => array(),
      'medium' => array(),
      'hard' => array(),
      'id_quiz' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id_dif_quiz' => array(),
      'easy' => array(),
      'medium' => array(),
      'hard' => array(),
      'id_quiz' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id_dif_quiz' => array(),
      'easy' => array(),
      'medium' => array(),
      'hard' => array(),
      'id_quiz' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id_dif_quiz' => array(),
      'easy' => array(),
      'medium' => array(),
      'hard' => array(),
      'id_quiz' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id_dif_quiz' => array(),
      'easy' => array(),
      'medium' => array(),
      'hard' => array(),
      'id_quiz' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'DificultyQuizForm';
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
    return 'DificultyQuizFormFilter';
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
    return 'doSelectJoinQuiz';
  }

  public function getPeerCountMethod()
  {
    return 'doCount';
  }
}

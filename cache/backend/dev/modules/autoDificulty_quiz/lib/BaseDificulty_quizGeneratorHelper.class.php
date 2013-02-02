<?php

/**
 * dificulty_quiz module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage dificulty_quiz
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseDificulty_quizGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'dificulty_quiz' : 'dificulty_quiz_'.$action;
  }
}

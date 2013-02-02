<?php

/**
 * quiz module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage quiz
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseQuizGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'quiz' : 'quiz_'.$action;
  }
}

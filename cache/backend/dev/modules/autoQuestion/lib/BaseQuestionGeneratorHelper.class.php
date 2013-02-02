<?php

/**
 * question module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage question
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseQuestionGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'question' : 'question_'.$action;
  }
}

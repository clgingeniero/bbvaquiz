<?php

/**
 * answer module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage answer
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseAnswerGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'answer' : 'answer_'.$action;
  }
}

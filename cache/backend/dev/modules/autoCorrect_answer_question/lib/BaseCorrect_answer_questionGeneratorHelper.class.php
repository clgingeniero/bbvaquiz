<?php

/**
 * correct_answer_question module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage correct_answer_question
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseCorrect_answer_questionGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'correct_answer_question' : 'correct_answer_question_'.$action;
  }
}

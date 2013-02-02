<?php

require_once dirname(__FILE__).'/../lib/correct_answer_questionGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/correct_answer_questionGeneratorHelper.class.php';

/**
 * correct_answer_question actions.
 *
 * @package    bbvaquiz
 * @subpackage correct_answer_question
 * @author     clgingeniero@gmail.com
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class correct_answer_questionActions extends autoCorrect_answer_questionActions
{
     public function __toString(){
        return $this->getIdQuestion();
    }
}

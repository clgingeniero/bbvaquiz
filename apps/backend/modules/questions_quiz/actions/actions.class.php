<?php

require_once dirname(__FILE__).'/../lib/questions_quizGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/questions_quizGeneratorHelper.class.php';

/**
 * questions_quiz actions.
 *
 * @package    bbvaquiz
 * @subpackage questions_quiz
 * @author     clgingeniero@gmail.com
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class questions_quizActions extends autoQuestions_quizActions
{
     public function __toString(){
        return $this->getIdQuestion();
    }
}

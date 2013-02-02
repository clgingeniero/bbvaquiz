<?php

require_once dirname(__FILE__).'/../lib/quizGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/quizGeneratorHelper.class.php';

/**
 * quiz actions.
 *
 * @package    bbvaquiz
 * @subpackage quiz
 * @author     clgingeniero@gmail.com
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class quizActions extends autoQuizActions
{
    public function __toString(){
        return $this->getNombre(); ;
    }
}

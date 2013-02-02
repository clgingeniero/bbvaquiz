<?php

require_once dirname(__FILE__).'/../lib/dificultyGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/dificultyGeneratorHelper.class.php';

/**
 * dificulty actions.
 *
 * @package    bbvaquiz
 * @subpackage dificulty
 * @author     clgingeniero@gmail.com
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class dificultyActions extends autoDificultyActions
{
     public function __toString(){
        return $this->getNombre(); ;
    }
}

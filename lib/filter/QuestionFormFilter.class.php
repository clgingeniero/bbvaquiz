<?php

/**
 * Question filter form.
 *
 * @package    bbvaquiz
 * @subpackage filter
 * @author     clgingeniero@gmail.com
 */
class QuestionFormFilter extends BaseQuestionFormFilter
{
  public function configure()
  {
      $this->widgetSchema->setLabels(array(
    'question'  => 'Pregunta',
    'id_dificultad'   => 'Dificultad',
    
));
     
  }
}

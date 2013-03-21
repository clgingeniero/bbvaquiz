<?php

/**
 * QuestionsQuiz filter form.
 *
 * @package    bbvaquiz
 * @subpackage filter
 * @author     clgingeniero@gmail.com
 */
class QuestionsQuizFormFilter extends BaseQuestionsQuizFormFilter
{
  public function configure()
  {
      $this->widgetSchema->setLabels(array(
    'id_quiz'  => 'Pregunta',
    'id_question'   => 'Dificultad',
    
));
  }
}

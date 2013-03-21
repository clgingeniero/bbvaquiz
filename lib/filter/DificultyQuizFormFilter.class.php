<?php

/**
 * DificultyQuiz filter form.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
class DificultyQuizFormFilter extends BaseDificultyQuizFormFilter
{
  public function configure()
  {
          $this->widgetSchema->setLabels(array(
    'easy'  => 'Facil',
    'medium'   => 'Medio',
    'hard' => 'Duro',
    'id_quiz' => 'Actividad',
));
  }
}

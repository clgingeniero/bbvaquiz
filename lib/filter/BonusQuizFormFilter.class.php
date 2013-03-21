<?php

/**
 * BonusQuiz filter form.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
class BonusQuizFormFilter extends BaseBonusQuizFormFilter
{
  public function configure()
  {
          $this->widgetSchema->setLabels(array(
            'id_quiz'  => 'Actividad',
            'hours'   => 'Horas',
            'bonus' => 'Bono',
    
));
  }
}

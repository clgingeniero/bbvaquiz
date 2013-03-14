<?php

/**
 * Quiz filter form.
 *
 * @package    bbvaquiz
 * @subpackage filter
 * @author     clgingeniero@gmail.com
 */
class QuizFormFilter extends BaseQuizFormFilter
{
  public function configure()
  {
    $this->widgetSchema['inicial_time'] = new sfWidgetFormJQueryDate(array(  
    'image' => '/images/calendar.gif',  
    //'culture' => sfContext::getInstance()->getUser()->getCulture(),
    'culture' => 'es',
    //'format' => '%day%/%month%/%year%',
    'config' => "{showOn: 'button',buttonImageOnly: true,changeMonth: true,changeYear: true,minDate:new Date()}",
     'date_widget' => new sfWidgetFormDate(array('format' => '%day%/%month%/%year%')) 
  ));  
  $this->widgetSchema['final_time'] = new sfWidgetFormJQueryDate(array(  
    'image' => '/images/calendar.gif',  
    //'culture' => sfContext::getInstance()->getUser()->getCulture(),
       'culture' => 'es',
    //'format' => '%day%/%month%/%year%',
    'config' => "{showOn: 'button',buttonImageOnly: true,changeMonth: true,changeYear: true,minDate:new Date()}",
      'date_widget' => new sfWidgetFormDate(array('format' => '%day%/%month%/%year%')) 
  ));  
  }
}

<?php

require_once '/home/starenw/public_html/actividad/lib/symfony/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    
    $this->enablePlugins('sfPropelPlugin');
    $this->enablePlugins('sfGuardPlugin');
    $this->enablePlugins('sfFormExtraPlugin');
    $this->enablePlugins('sfPhpExcelPlugin');
    $this->enablePlugins('sfGuardExtraPlugin');
    $this->setWebDir($this->getRootDir().'/www/actividad/web/');
  }
}

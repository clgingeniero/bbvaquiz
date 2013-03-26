<?php

sfConfig::add(array(
  'sf_upload_dir_name'  => $sf_upload_dir_name = 'uploads',
  'sf_upload_dir'       => sfConfig::get('sf_root_dir').DIRECTORY_SEPARATOR.sfConfig::get('sf_web_dir_name').DIRECTORY_SEPARATOR.$sf_upload_dir_name,      
));   

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
    
  <body>
      <div class="layout">
          <div class="logo"></div>
      <div class="menu">
       
            <a href="<?php echo url_for('/') ?>">
                <div class="men-home"></div>
            </a>
            
            <a href="<?php echo url_for('instructions/index') ?>">
                <div class="men-acco"></div>
            </a>
           
            <a href="<?php echo url_for('instructions/index') ?>">
                <div class="men-inst"></div>
            </a>
            
            <a href="<?php echo url_for('help') ?>">
                <div class="men-help"></div>
            </a>
            
            <a href="<?php echo url_for('quiz/list') ?>">
                <div class="men-clos"></div>
            </a>
           
      
      </div> 
     <div class="clear-boot"></div>
      <div class="over-smenu">
       
           
                <div class="over-men-home"></div>
           
            
           
                <div class="over-men-acco"></div>
           
           
            
                <div class="over-men-inst"></div>
            
            
           
                <div class="over-men-help"></div>
           
            
           
                <div class="over-men-clos"></div>
           
           
      
      </div> 
         
      <div class="home">
        <?php echo $sf_content ?>
      </div>
 
      <div class="footer"></div>
      <?php //if() ?> 
     <!-- <a href="<?php //echo url_for('/') ?>">
        <div class="back"></div>
      </a> -->
          
  </div>
  </body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <?php echo sfYaml::dump(array(
      'error'       => array(
        'code'      => $code,
        'message'   => $message,
        'debug'     => array(
        'name'    => $name,
        'message' => $message,
        'traces'  => $traces,
), )), 4) ?>
  <body>
      <div class="layout">
          <div class="logo"></div>
      <div class="menu">
        <a  class="confirmar" href="#">
                <div class="men-clos"></div>
            </a>
          <a href="<?php echo url_for('help') ?>">
                <div class="men-help"></div>
            </a>
           <a href="<?php echo url_for('instructions/index') ?>">
                <div class="men-inst"></div>
            </a>
           <a href="<?php echo url_for('profile') ?>">
                <div class="men-acco"></div>
            </a>
            
          
            <a href="<?php echo url_for('/') ?>">
                <div class="men-home"></div>
            </a>
            
           
           
           
            
            
           
           
      
      </div> 
        <div class="clear-boot"></div>
        <div class="over-smenu">
            <div class="over-men-help"></div>
            <div class="over-men-clos"></div>
            <div class="over-men-inst"></div>
            <div class="over-men-acco"></div>
            <div class="over-men-home"></div>
     
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
<script type="text/javascript">
    $(document).ready(function() {
            
    $('.confirmar').click(function() 
    {
       var c =  confirm(' Estas seguro que deseas salir ?');
       if(c){ 
           $(location).attr('href','<?php echo url_for('logout') ?>');
       }
    });  
    
    $('.men-home').mouseover(function() {
        $('.over-men-home').show(); 
         
        $('.over-men-help').hide();
        $('.over-men-inst').hide();
        $('.over-men-acco').hide(); 
        $('.over-men-clos').hide();
      });
      
      $('.men-help').mouseover(function() {
        $('.over-men-help').show();
        
        $('.over-men-inst').hide();
        $('.over-men-acco').hide(); 
        $('.over-men-clos').hide(); 
        $('.over-men-home').hide(); 
      });
      
      $('.men-inst').mouseover(function() {
        $('.over-men-inst').show(); 
        
        $('.over-men-help').hide();
        $('.over-men-acco').hide(); 
        $('.over-men-clos').hide(); 
        $('.over-men-home').hide(); 
      });
      
      $('.men-acco').mouseover(function() {
        $('.over-men-acco').show(); 
        
        $('.over-men-help').hide();
        $('.over-men-inst').hide();
        $('.over-men-clos').hide(); 
        $('.over-men-home').hide(); 
      });
      
      $('.men-clos').mouseover(function() {
        $('.over-men-clos').show(); 
        
        $('.over-men-help').hide();
        $('.over-men-inst').hide();
        $('.over-men-acco').hide(); 
        $('.over-men-home').hide(); 
      });
      
       
        
    $('.men-home').mouseout(function() {
       fin();
    });
    $('.men-help').mouseout(function() {
       fin();
    });
    $('.men-inst').mouseout(function() {
       fin();
    });
    $('.men-acco').mouseout(function() {
       fin();
    });
    $('.men-clos').mouseout(function() {
       fin();
    });
    
    function fin(){
        $('.over-men-help').hide();
        $('.over-men-inst').hide();
        $('.over-men-acco').hide(); 
        $('.over-men-home').hide(); 
        $('.over-men-clos').hide(); 
    }
    });
    
    
   

                
            
        </script>

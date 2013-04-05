<?php $isFront = sfContext::getInstance()->getConfiguration()->getApplication(); 
 if($isFront != 'frontend') : ?> <span>No tiene permisos para ver esta pagína</span> <?php return; endif; ?>

<div class="fond-home"></div>
    <div class="pers-gen"></div>
    <div class="tit-instru">
        <p class="titulo-inst">¡ GANA EL MAYOR PUNTAJE !</p>
          <div class="linea"></div>
        <p class="subtit-inst">Calidad eje fundamental del crecimiento</p>
         <div class="tit-admin"></div>
        
    </div>
    
  
<div class="content-report">
<span>No tiene permisos para ver esta pagína</span> 

   
</div>
    <!-- <div class="line-home"></div> -->
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

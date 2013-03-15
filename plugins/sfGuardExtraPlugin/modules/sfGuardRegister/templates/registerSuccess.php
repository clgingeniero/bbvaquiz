<?php use_helper('I18N') ?>
 
  <div class="fond-home"></div>
    <div class="pers-gen"></div>
    <div class="tit-instru">
        <p class="titulo-inst">¡ GANA EL MAYOR PUNTAJE !</p>
          <div class="linea"></div>
        <p class="subtit-inst">Calidad eje fundamental del crecimiento</p>
        <div class="tit-profile"></div>
        
    </div>
  
<div class="content-profile">
<form action="<?php echo url_for('@sf_guard_register') ?>" method="post">
  <table>
    <?php echo $form ?>
  </table>
  <input type="submit" value="<?php echo __('request') ?>" />
</form>
   
</div>
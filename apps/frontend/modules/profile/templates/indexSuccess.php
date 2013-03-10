
  
  <div class="fond-home"></div>
    <div class="pers-gen"></div>
    <div class="tit-instru">
        <p class="titulo-inst">¡ GANA EL MAYOR PUNTAJE !</p>
          <div class="linea"></div>
        <p class="subtit-inst">Calidad eje fundamental del crecimiento</p>
        <div class="tit-help"></div>
        
    </div>
  
<div class="content-profile">
    <label>Nombre: </label><label><?php echo $sfGuardUserProfile->getFirstName() ?></label><br>
    <label>Codigo: </label><label><?php echo $sfGuardUserProfile->getUserBankId() ?></label><br>
    <label>Zona: </label><label><?php echo $sfGuardUserProfile->getIdZone() ?></label><br>
    <label>Area: </label><label><?php echo $sfGuardUserProfile->getIdArea() ?></label><br>
    <label>Cargo: </label><label><?php echo $sfGuardUserProfile->getIdPosition() ?></label><br>
    
    <div class="div-btns">
    <div class="menu-btn">
<?php echo link_to('Nuevas', '@nuevas') ?>
</div>
<div class="menu-btn">
<?php echo link_to('Pendientes', '@pendientes') ?>
</div>

<div class="menu-btn">
<?php echo link_to('Finalizadas', '@finalizadas') ?>
</div>
    </div>

   
</div>

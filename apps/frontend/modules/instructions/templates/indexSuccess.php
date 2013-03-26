<div class="fond-home"></div>
    
    <div class="tit-instru">
        <p class="titulo-inst">¡ GANA EL MAYOR PUNTAJE !</p>
          <div class="linea"></div>
        <p class="subtit-inst">Calidad eje fundamental del crecimiento</p>
        <div class="titimageinstru"></div>
        
    </div>
    <div class="pers-inst"></div>
  
<div class="content-instru">
    <?php foreach ($instructionss as $instructions): ?>
    <?php if($instructions->getIdInstruction() == 1): ?>
    <?php echo html_entity_decode($instructions->getInstruction()) ?></td>
    <?php endif; ?>
    <?php endforeach; ?>
</div>

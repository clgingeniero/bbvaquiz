<div class="fond-home"></div>
    <div class="pers-inst"></div>
    <div class="tit-instru">
        <p class="titulo-inst">GANA EL MAYOR PUNTAJE!</p>
        <p class="subtit-inst">en calidad de un buen servicio</p>
        <div class="titimageinstru"></div>
        
    </div>
  
<div class="content-instru">
    <?php foreach ($instructionss as $instructions): ?>
    <?php if($instructions->getIdInstruction() == 1): ?>
    <?php echo html_entity_decode($instructions->getInstruction()) ?></td>
    <?php endif; ?>
    <?php endforeach; ?>
</div>

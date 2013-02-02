
  
  <h1>Instrucciones</h1>

<div>
    <?php foreach ($instructionss as $instructions): ?>
    <?php echo html_entity_decode($instructions->getInstruction()) ?></td>
    
    <?php endforeach; ?>
</div>

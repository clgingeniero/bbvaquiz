<div class="fond-home"></div>
    <div class="pers-gen"></div>
    <div class="tit-instru">
        <p class="titulo-inst">¡ GANA EL MAYOR PUNTAJE !</p>
          <div class="linea"></div>
        <p class="subtit-inst">Calidad eje fundamental del crecimiento</p>
        <div class="tit-profile"></div>
        
    </div>
  
<div class="content-profile">
    

<div class="quiz">
<select name="id">
    <?php foreach($activities as $activi): ?>
    <option value="<?php echo $activi->getIdQuiz() ?>"><?php echo $activi->getDescription() ?></option>
    <?php endforeach; ?>
</select>
</div>
<div class="type">
<select name="t">
    <option value="o">Oficina</option>
    <option value="z">Zona</option>
    <option value="t">Territorial</option>
    <option value="a">Usuarios</option>
</select>
</div>
<div class="office">
    
    
    <?php foreach($offices as $office): ?>
    <input type="checkbox" name="office" value="<?php echo $office->getIdDepto() ?>" />
    <span><?php echo $office->getDepto() ?></span>
    <?php endforeach; ?>
   
</div>

<div class="zone">
    
    
    <?php foreach($zones as $zone): ?>
    <input type="checkbox" name="zone" value="<?php echo $zone->getIdZone() ?>" />
    <span><?php echo $zone->getZone() ?></span>
    <?php endforeach; ?>
   
</div>

<div class="territorial">
    
    
    <?php foreach($territorial as $terri): ?>
    <input type="checkbox" name="terr" value="<?php echo $terri->getIdArea() ?>" />
    <span><?php echo $terri->getArea() ?></span>
    <?php endforeach; ?>
   
</div>


   
</div>


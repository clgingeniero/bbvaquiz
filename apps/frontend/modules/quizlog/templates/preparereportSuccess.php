<div class="fond-home"></div>
    <div class="pers-gen"></div>
    <div class="tit-instru">
        <p class="titulo-inst">¡ GANA EL MAYOR PUNTAJE !</p>
          <div class="linea"></div>
        <p class="subtit-inst">Calidad eje fundamental del crecimiento</p>
        <div class="tit-profile"></div>
        
    </div>
  
<div class="content-report">
    
    <form action="<?php echo url_for('quizlog/report')?>" id="reportform" method="post" enctype="multipart/form-data">
<div class="quiz">
<p>Actividad: </p> 
<select name="id">
    <?php foreach($activities as $activi): ?>
    <option value="<?php echo $activi->getIdQuiz() ?>"><?php echo $activi->getDescription() ?></option>
    <?php endforeach; ?>
</select>
</div>
<div class="type">
<p>Tipo de informe: </p>     
<select class="informe" name="t" onchange="cambio(this)">
    <option>Seleccione</option>
    <option value="o">Oficina</option>
    <option value="z">Zona</option>
    <option value="t">Area</option>
    <option value="u">Usuarios</option>
</select>
</div>
<div class="type">
<p>Estado: </p>     
<select name="s">
    <option value="2">Todos</option>
    <option value="1">Finalizadas</option>
    <option value="0">Pendientes</option>   
</select>
</div>
<div class="accion">
            <p>Acción</p>  
            <input type="submit" value="Generar"> 
</div>

<div class="users">
    <p>Usuarios</p> 
    
 <select class="users" name="uo">
    <option>Seleccione</option>
    <option value="ut">Todos</option>
    <option value="up">Usuarios que realizaron la actividad</option>
    <option value="uf">Usuarios que no han realizado la  actividad </option>
</select>
   
   
</div>
        
<div class="office">
    <p>Oficina</p> 
    
    <?php foreach($offices as $office): ?>
    <input type="checkbox" name="office[]" value="<?php echo $office->getIdDepto() ?>" />
    <span><?php echo $office->getDepto() ?></span><br>
    <?php endforeach; ?>
   
</div>

<div class="zone">
    <p>Zona</p> 
    
    <?php foreach($zones as $zone): ?>
    <input type="checkbox" name="zone[]" value="<?php echo $zone->getIdZone() ?>" />
    <span><?php echo $zone->getZone() ?></span><br>
    <?php endforeach; ?>
   
</div>

<div class="territorial">
    <p>Area: </p> 
    
    <?php foreach($territorial as $terri): ?>
    <input type="checkbox" name="terr[]" value="<?php echo $terri->getIdArea() ?>" />
    <span><?php echo $terri->getArea() ?></span><br>
    <?php endforeach; ?>
   
</div>

</form>
   
</div>

    
<script>
    function cambio(val) {
    
        info = $('.informe').val(); 
        switch(info)
        {
            case 'o' : 
                $('.office').show(); 
                $('.zone').hide(); 
                $('.territorial').hide(); 
                break;
           case 'z' : 
                $('.office').hide(); 
                $('.zone').show(); 
                $('.territorial').hide();
                break;
                
           case 't' : 
                $('.office').hide(); 
                $('.zone').hide(); 
                $('.territorial').show();
                break;
           default: 
                $('.office').hide(); 
                $('.zone').hide(); 
                $('.territorial').hide();
                break;     
            
           
        }
        
   
    }

</script>
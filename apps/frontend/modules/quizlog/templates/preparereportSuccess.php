<div class="fond-home"></div>
    <div class="pers-gen"></div>
    <div class="tit-instru">
        <p class="titulo-inst">¡ GANA EL MAYOR PUNTAJE !</p>
          <div class="linea"></div>
        <p class="subtit-inst">Calidad eje fundamental del crecimiento</p>
         <div class="tit-admin"></div>
        
    </div>
    
     <div class="menu-2">
               

<div class="menu-admin">
<?php echo link_to('Puntaje', '/backend.php/dificulty_quiz') ?>
</div>
<div class="menu-admin">
<?php echo link_to('Bono', '/backend.php/bonus_quiz') ?>
</div>
<div class="menu-admin">
<?php echo link_to('Actividad', '/backend.php/quiz') ?>
</div>
              
<div class="menu-admin">
<?php echo link_to('Gestionar actividad', '/backend.php/questions_quiz') ?>
</div>
<div class="menu-admin">
<?php echo link_to('Preguntas', '/backend.php/question') ?>
</div>
<div class="menu-admin">
<?php echo link_to('Instrucciones', '/backend.php/instructions') ?>
</div>
              <div class="clear-boot"></div>
<div class="menu-admin">
<?php echo link_to('Opciones de respuestas', '/backend.php/answer') ?>
</div>
<!--<div class="menu-admin">
<?php //echo link_to('Respuesta correcta', '@correct_answer_question') ?>
</div> -->
<div class="menu-admin">
<?php echo link_to('Grupos', '/backend.php/sf_guard_group') ?>
</div>
<div class="menu-admin">
<?php echo link_to('Permisos', '/backend.php/sf_guard_permission') ?>
</div>
<div class="menu-admin">
<?php echo link_to('Usuarios', '/backend.php/sf_guard_user') ?>
</div>
<div class="menu-admin">
    <a href="/frontend.php/quizlog/preparereport">Ranking</a>

</div>
<div class="menu-admin">
    <a href="/frontend.php/quiz/prepareimport">Importar</a>

</div>
    <!-- <div class="menu-admin"><?php //echo link_to('Logout', '@sf_guard_signout') ?></div> -->

 
          </div>
            
    
  
<div class="content-report">
    
    <form action="<?php echo url_for('quizlog/report')?>" id="reportform" method="post" enctype="multipart/form-data">
<div class="type">
<p>Tipo de informe</p>     
<select class="informe" name="t" onchange="cambio(this)">
    <option>Seleccione</option>
    <option value="o">Oficina</option>
    <option value="z">Zona</option>
    <option value="t">Area</option>
    <option value="u">Usuarios</option>
</select>
</div>
<div class="quiz">
<p>Actividad</p> 
<select name="id">
    <?php foreach($activities as $activi): ?>
    <option value="<?php echo $activi->getIdQuiz() ?>"><?php echo $activi->getDescription() ?></option>
    <?php endforeach; ?>
</select>
</div>
<div class="type">
<p>Estado</p>     
<select name="s">
    <option value="2">Todos</option>
    <option value="1">Finalizadas</option>
    <option value="0">Pendientes</option>   
</select>
</div>
<div class="accion">
            <p>Acción</p>  
            <input type="submit" value="Generar" disabled> 
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
    
    function valida()
    {
        if($('.informe').val()==""){
            alert('Debe seleccionar la opcion del tipo de informe que desea');
        } 
    }
    
    function cambio(val) {
    
        info = $('.informe').val(); 
        switch(info)
        {
            case 'o' : 
                $('input[type="submit"]').removeAttr('disabled');
                $('.users').hide(); 
                $('.office').show(); 
                $('.zone').hide(); 
                $('.territorial').hide(); 
                break;
           case 'z' : 
                $('input[type="submit"]').removeAttr('disabled');
               $('.users').hide(); 
                $('.office').hide(); 
                $('.zone').show(); 
                $('.territorial').hide();
                break;
                
           case 't' : 
                $('input[type="submit"]').removeAttr('disabled');
               $('.users').hide(); 
                $('.office').hide(); 
                $('.zone').hide(); 
                $('.territorial').show();
                break;
           case 'u' : 
                $('input[type="submit"]').removeAttr('disabled');
               $('.users').show(); 
                $('.office').hide(); 
                $('.zone').hide(); 
                $('.territorial').hide();
                break;
           default: 
               $('.users').hide(); 
                $('.office').hide(); 
                $('.zone').hide(); 
                $('.territorial').hide();
                $('input[type="submit"]').attr('disabled','disabled');
               
                break;     
            
               
            

        }
        
   
    }

</script>
<div class="fond-home"></div>
    <div class="pers-gen"></div>
    <div class="tit-instru">
        <p class="titulo-inst">¡ GANA EL MAYOR PUNTAJE !</p>
          <div class="linea"></div>
        <p class="subtit-inst">Calidad eje fundamental del crecimiento</p>
         <div class="tit-admin"></div>
        
    </div>
    
       <div class="menu-2front">
               

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
<?php echo link_to('Gestionar respuestas', '/backend.php/answer') ?>
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
    <a class="men-active" href="/frontend.php/quiz/prepareimport">Importar</a>

</div>
    <!-- <div class="menu-admin"><?php //echo link_to('Logout', '@sf_guard_signout') ?></div> -->

 
          </div>
            
    
  
<div class="content-report">
<span>Seleccione el archivo a importar, el archivo debe estar en formato .xls o .xlsx</span> 
<br><br>

<form action="<?php echo url_for('quiz/loadfile')?>" id="importform" method="post" enctype="multipart/form-data">

    <div class="upload">
        <input type="file" name="file" id="file">
    </div>
<div class="accion">
    
    <input type="submit" value="Cargar"> 
</div>
</form>

    <?php if($error) : ?>
    <br><br><br><span><?php echo $error; ?> </span>
    <?php endif; ?>
   
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
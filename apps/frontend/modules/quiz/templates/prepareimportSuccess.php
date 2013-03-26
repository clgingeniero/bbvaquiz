<div class="fond-home"></div>
    <div class="pers-gen"></div>
    <div class="tit-instru">
        <p class="titulo-inst">¡ GANA EL MAYOR PUNTAJE !</p>
          <div class="linea"></div>
        <p class="subtit-inst">Calidad eje fundamental del crecimiento</p>
         <div class="tit-admin"></div>
        
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
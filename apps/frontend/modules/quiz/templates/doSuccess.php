<div class="fond-home"></div>
    
    <div class="tit-instru">
        <p class="titulo-inst">¡ GANA EL MAYOR PUNTAJE !</p>
          <div class="linea"></div>
        <p class="subtit-inst">Calidad eje fundamental del crecimiento</p>
        
    </div>
<div class="pers-activ"></div>
  
<div class="content-activi">

<?php if($sin_preguntas): ?>
<span>La evaluación no tiene preguntas</span>
<?php return;  ?>
<?php endif; ?>

	<!-- TIMER -->
	<div class="timer-area">
            <div class="dv-act"><span class="actividad"><?php echo ucfirst($quiz->getDescription()); ?></span> </div>
            <div class="dv-preg"><span class="pregunta"><?php echo ucfirst($question->getQuestion()); ?></span> </div>
            <div class="dv-cd">
            <ul id="countdown">
			<li>
				<span class="days">00</span>
				<p class="timeRefDays">Días : </p>
			</li> 
			<li>
				<span class="hours">00</span>
				<p class="timeRefHours">Horas: </p>
			</li>
			<li>
				<span class="minutes">00</span>
				<p class="timeRefMinutes">Minutos : </p>
			</li>
			<li>
				<span class="seconds">00</span>
				<p class="timeRefSeconds">Seg :</p>
			</li>
		</ul>
            </div>
		
	</div> <!-- end timer-area -->
        
        <div class="dv-actividad">
            <form id="questionform" method="post" enctype="multipart/form-data">
<div class="question">
   
    <?php $i = 0; foreach($answers as $answer): $i++; ?>
    <div  class="content-pregunta">
        <div id="btn_resp_<?php echo $i; ?>" onclick="oprime('<?php echo $i; ?>', <?php echo $answer->getIdAnswer(); ?> )" class="preg_<?php echo $i; ?>">
            
        </div> 
        <div id="caja-actv" >
            
           
            <span class="desc-ans"><?php echo $answer->getAnswer(); ?></span>
            </div>
         <div class="answer_<?php echo $answer->getIdAnswer(); ?>"></div>
        
</div>
    <?php endforeach;?>
</div>
                
   <input type="hidden" name="answers" value="">
   <input type="hidden" name="question" value="<?php echo $question->getIdQuestion(); ?>">
  
    
   
</form>
            
<div class="barra-fin">         
<div id="progress-bar">
    <div class="progreso"><span><?php echo $adv . ' %' ?></span></div>
    <div id="status"></div>
</div>

<div class="btnActions">
    <div id="btnActi" class="btnSave">Guardar</div>
    <div id="btnActi" class="btnView">Ver respuesta</div>
    <div id="btnActi" class="btnNext">Siguiente</div>
</div>
    
</div>
<?php echo $action; ?>

            
        </div>

</div>






<?php //echo var_dump($quiz); die;//foreach($quiz_active_list as $quiz): ?>
        
        <script>
	
		$(document).ready(function(){
			$("#countdown").countdown({
				date: "<?php echo strftime('%d %B %Y', strtotime($quiz->getFinalTime())) ?>",
				format: "on"
			},
			
			function() {
				// callback function
			});
                        $("#status").animate( { width: "<?php echo $adv . '%' ?>" }, 1500);
		});
                
                
	
	</script>

<?php //endforeach; ?>
        
         

<script>
    
    
    
    function oprime(id, value){
        $('#btn_resp_' + id).attr("class", "active_" + id);
        for(i = 0; i < 5; i++){
            if(i != id)
                $('#btn_resp_' + i).attr("class", "preg_" + i);
        }
        
        $('input[name=answers]').val(value);
        
    }
    
    
    
    
    $('.btnSave').click(function()
    {
        
            var c =  confirm('Sus preguntas fueron guardadas satisfactoriamente. Deseas regresar al inicio  ?');
            if(c){ 
                //$(location).attr('href','<?php //echo url_for('logout') ?>');
                $(location).attr('href','<?php echo url_for('/') ?>');
            }
         
    });
    
    function alerta(){
        alert("Aún no ha seleccionado una respuesta");
    }
    
    $('.btnView').click(function()
    {
        answ = $('input[name=answers]').val(); 
        if(answ == "") {
            alerta();
            return;
        }
        
        var data = $('form').serialize();
        $.ajax({
            type: "POST",
            url: '<?php echo url_for('quiz/viewans?id=' . $quiz->getIdQuiz()) ?>',
            data:  data 
            }).done(function( msg ) {
                <?php foreach($answers as $answer): ?>
        
                <?php if($answer->getCorrect()){ ?>
                  
                    //$(".answer_<?php //echo $answer->getIdAnswer(); ?>").toggleClass('answer_<?php //echo $answer->getIdAnswer(); ?> answer_correct');
                    $(".answer_<?php echo $answer->getIdAnswer(); ?>").attr('id', 'answer_correct');
                    //alert('es correcta la ' + '<?php //echo $answer->getCorrect() . '<- esta ' . $answer->getAnswer() . ' ' . $answer->getIdAnswer()  ?>');
                <?php }else { ?> 
                    $(".answer_<?php echo $answer->getIdAnswer(); ?>").attr('id', 'answer_incorrect');
                    //$(".answer_<?php //echo $answer->getIdAnswer(); ?>").toggleClass('answer_<?php //echo $answer->getIdAnswer(); ?> answer_incorrect');
                <?php } ?>
                <?php endforeach; ?>
            
        });
    });
    
    $('.btnNext').click(function()
    {
        answ = $('input[name=answers]').val(); 
        if(answ == "") {
            alerta("Seleccione una respuesta entes de continuar");
            return;
        }
        
        $("#questionform").attr("action", '<?php echo url_for('quiz/next?id=' . $quiz->getIdQuiz()) ?>')
        $('form#questionform').submit();
    });

 
</script>
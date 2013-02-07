<?php if($finish): ?>
<span>finish congratulations</span>
<?php return;  ?>
<?php endif; ?>
	<!-- TIMER -->
	<div class="timer-area">
		
		<h1>Tienes: </h1>
		
		<ul id="countdown">
			<li>
				<span class="days">00</span>
				<p class="timeRefDays">days</p>
			</li>
			<li>
				<span class="hours">00</span>
				<p class="timeRefHours">hours</p>
			</li>
			<li>
				<span class="minutes">00</span>
				<p class="timeRefMinutes">minutes</p>
			</li>
			<li>
				<span class="seconds">00</span>
				<p class="timeRefSeconds">seconds</p>
			</li>
		</ul>
		
	</div> <!-- end timer-area -->
        
<?php //sprint_r($quiz_active_list); ?>

<?php foreach($quiz_active_list as $quiz): ?>
        <?php echo strftime('%d %B %Y', strtotime($quiz->getFinalTime())). ' 1:00:00' ?>
        <script>
	
		$(document).ready(function(){
			$("#countdown").countdown({
				date: "<?php echo strftime('%d %B %Y', strtotime($quiz->getFinalTime())) . ' 1:00:00' ?>",
				format: "on"
			},
			
			function() {
				// callback function
			});
                        $("#status").animate( { width: "70%" }, 1500);
		});
                
                
	
	</script>
<a href=""><?php echo $quiz->getDescription()?></a>
<span><?php echo $quiz->getInicialTime()?></span>
<span><?php echo $quiz->getFinalTime()?></span>
<?php endforeach; ?>
<div id="progress-bar">
    <div id="status"></div><span>progreso 70%</span>
</div>
<br><br><br><br>
<form id="questionform" method="post" enctype="multipart/form-data">
<div class="question">
    <p><?php echo $question->getQuestion(); ?></p> 
    <?php foreach($answers as $answer): ?>
    <br><input type="radio" name="answers" value="<?php echo $answer->getIdAnswer(); ?>">
    <div class="answer_<?php echo $answer->getIdAnswer(); ?>"></div>
    <?php echo $answer->getAnswer(); ?>
    <?php endforeach;?>
</div>
   
    <input type="hidden" name="question" value="<?php echo $question->getIdQuestion(); ?>">
    <input type="hidden" name="id" value="<?php echo $quiz->getIdQuiz()?>">
    
   
</form>

<div class="btnActions">
    <div class="btnSave">Guardar</div>
    <div class="btnView">Ver respuesta</div>
    <div class="btnNext">Siguiente</div>
</div>

<?php echo $action; ?>


<script>
    
    $('.btnSave').click(function()
    {
        $("#questionform").attr("action", '<?php echo url_for('quiz/save?id=' . $quiz->getIdQuiz()) ?>')
        $('form#questionform').submit();
    });
    
    $('.btnView').click(function()
    {
        var data = $('form').serialize();
        $.ajax({
            type: "POST",
            url: '<?php echo url_for('quiz/viewans?id=' . $quiz->getIdQuiz()) ?>',
            data:  data 
            }).done(function( msg ) {
                <?php foreach($answers as $answer): ?>
        
                <?php if($answer->getCorrect()){ ?>
                  
                    $(".answer_<?php echo $answer->getIdAnswer(); ?>").toggleClass('answer_<?php echo $answer->getIdAnswer(); ?> answer_correct');
                    //alert('es correcta la ' + '<?php //echo $answer->getCorrect() . '<- esta ' . $answer->getAnswer() . ' ' . $answer->getIdAnswer()  ?>');
                <?php }else { ?> 
                    $(".answer_<?php echo $answer->getIdAnswer(); ?>").toggleClass('answer_<?php echo $answer->getIdAnswer(); ?> answer_incorrect');
                <?php } ?>
                <?php endforeach; ?>
            
        });
    });
    
    $('.btnNext').click(function()
    {
        $("#questionform").attr("action", '<?php echo url_for('quiz/do?id=' . $quiz->getIdQuiz()) ?>')
        $('form#questionform').submit();
    });

 
</script>

     
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

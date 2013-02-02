<div class="pendientes">

<h1>Actividades pendientes</h1>

<?php foreach($quiz_active_list as $quiz): ?>
        
<a href=""><?php echo $quiz->getDescription()?></a>

<?php 
$fecha1 = new DateTime(date("d-m-Y H:i:s"));
$fecha2 = new DateTime($quiz->getFinalTime());
$fecha = $fecha1->diff($fecha2);
?>
<span><?php echo ($fecha->y > 0) ? $fecha->y . ' A' : '' ?></span>
<span><?php echo ($fecha->m > 0) ? $fecha->m . ' M' : '' ?></span>
<span><?php echo ($fecha->d > 0) ? $fecha->d . ' D' : '' ?></span>
<span><?php echo ($fecha->h > 0) ? $fecha->h . ' H' : '' ?></span>
<span><?php echo ($fecha->i > 0) ? $fecha->i . ' M' : '' ?></span>

<?php endforeach; ?>

</div>
<br><br>
<div class="end">
    
<h1>Actividades finalizadas</h1>

<?php foreach($quiz_end_list as $quizend): ?>
        
<a href=""><?php echo $quizend->getDescription()?></a>


<?php endforeach; ?>

    
</div>
<div class="fond-home"></div>
    <div class="pers-gen"></div>
    <div class="tit-instru">
        <p class="titulo-inst">¡ GANA EL MAYOR PUNTAJE !</p>
          <div class="linea"></div>
        <p class="subtit-inst">Calidad eje fundamental del crecimiento</p>
        <div class="tit-end"></div>
        
    </div>
  
<div class="content-instru">
   <div class="pendientes">
       
       <div class="tit-act"><span><?php echo "Actividad" ?></span></div>
       <div class="restart"><a href=""><div class="restart">@</div></a></div>
       <div class="time"><?php echo "Tiempo restante" ?></div>
       <div class="avance"><?php echo "Puntaje" ?></div>
<?php foreach($quiz_end_list as $quiz): ?>
       <div class="clear-pending"></div>
<div class="activi"><span><?php echo $quiz->getDescription()?></span></div>
       <a href="<?php echo url_for('quiz/do?id=' . $quiz->getIdQuiz()) ?>"><div class="btn-restart">@</div></a>
       <div class="time-dv">
           <?php /*
                $fecha1 = new DateTime(date("d-m-Y H:i:s"));
                $fecha2 = new DateTime($quiz->getFinalTime());
                $fecha = $fecha1->diff($fecha2); 
                ?>
                <!-- <span><?php echo ($fecha->y > 0) ? $fecha->y . ' A' : '' ?></span>
                <span><?php echo ($fecha->m > 0) ? $fecha->m . ' M' : '' ?></span>
                <span><?php echo ($fecha->d > 0) ? $fecha->d . ' D' : '' ?></span>
                <span><?php echo ($fecha->h > 0) ? $fecha->h . ' H' : '' ?></span>
                <span><?php echo ($fecha->i > 0) ? $fecha->i . ' M' : '' */?><!-- </span> -->
       </div>
       <div class="avance-dv"><?php echo "Puntaje" ?></div>
       




<?php endforeach; ?>

</div>
</div>
<div class="fond-home"></div>
    
    <div class="tit-instru">
        <p class="titulo-inst">¡ GANA EL MAYOR PUNTAJE !</p>
          <div class="linea"></div>
        <p class="subtit-inst">Calidad eje fundamental del crecimiento</p>
        <div class="tit-pending"></div>
        
    </div>
    <div class="pers-gen"></div>
  
<div class="content-instru">
   <div class="pendientes">
     <?php  if($quiz_active_list->count() == 0): ?>
       <p class="subtit-inst">No tienes actividades pendientes</p>
       <?php else: ?>
       <div class="tit-act"><span><?php echo "Actividad" ?></span></div>
       <div class="restart"><a href=""><div class="restart">@</div></a></div>
       <div class="time"><?php echo "Tiempo restante" ?></div>
       <!-- <div class="avance"><?php //echo "Avance" ?></div> -->
<?php foreach($quiz_active_list as $quiz):  ?>
       <div class="clear-pending"></div>
<div class="activi"><span><?php echo $quiz->getQuiz()->getDescription()?></span></div>
       
       <div class="time-dv">
           <?php 
                /*$fecha1 = new DateTime(date("d-m-Y H:i:s"));
                $fecha2 = new DateTime($quiz->getQuiz()->getFinalTime());
                $fecha = $fecha1->diff($fecha2);
                ?>
                <span><?php echo ($fecha->y > 0) ? $fecha->y . ' Años' : '' ?></span>
                <span><?php echo ($fecha->m > 0) ? $fecha->m . ' Meses' : '' ?></span>
                <span><?php echo ($fecha->d > 0) ? $fecha->d . ' Días' : '' ?></span>
                <span><?php echo ($fecha->h > 0) ? $fecha->h . ' Horas' : '' ?></span>
                <span><?php echo ($fecha->i > 0) ? $fecha->i . ' Minutos' : '' */ ?>
       <!--</span>
       </div>
       <!--<div class="avance-dv"><?php //echo quizActions::getAdvance($quiz->getQuiz()->getIdQuiz(), $quiz->getIdusrql()) . " %" ?></div> -->
       

<span><?php echo '2 Días'?></span>
                <span><?php echo '10 Horas'?></span>
                <span><?php echo  '20 Minutos' ?></span>
       </div>
    <a href="<?php echo url_for('quiz/do?id=' . $quiz->getQuiz()->getIdQuiz()) ?>"><div class="btn-restart">Reanudar</div></a>


<?php endforeach; ?>
<?php endif; ?>
</div>
      <a href="<?php echo url_for('profile') ?>">
        <div class="btnActions">
            <div id="btnBack" class="btnBack">Atras</div>

        </div>
    </a>
</div>

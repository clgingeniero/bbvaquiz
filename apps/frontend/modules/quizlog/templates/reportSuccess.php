<?php //print_r($report); die;
foreach($report as $rep): ?>
<p><?php echo $rep->getProfile()->getFirstname() . ' ' .  $rep->getIdUsrql() . ' tot= ' . $rep->getResult() ?></p>
<?php endforeach; ?>


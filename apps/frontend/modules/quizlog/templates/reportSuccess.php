<?php //print_r($report); die;
foreach($report as $rep): ?>
<p><?php echo $rep->getsfGuardUserProfile()->getFirstName() . ' ' .  $rep->getIdUsrql() . ' tot= ' . $rep->getResult() ?></p>
<?php endforeach; ?>


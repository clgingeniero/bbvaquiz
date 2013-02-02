<?php use_helper('I18N', 'Date') ?>
<?php include_partial('quiz/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edición de "%%description%%"', array('%%description%%' => $quiz->getDescription()), 'messages') ?></h1>

  <?php include_partial('quiz/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('quiz/form_header', array('quiz' => $quiz, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('quiz/form', array('quiz' => $quiz, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('quiz/form_footer', array('quiz' => $quiz, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial('answer/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Nueva respuesta', array(), 'messages') ?></h1>

  <?php include_partial('answer/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('answer/form_header', array('answer' => $answer, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('answer/form', array('answer' => $answer, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('answer/form_footer', array('answer' => $answer, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>

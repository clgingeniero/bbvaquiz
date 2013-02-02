<?php use_helper('I18N', 'Date') ?>
<?php include_partial('question/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edición de "%%question%%"', array('%%question%%' => $question->getQuestion()), 'messages') ?></h1>

  <?php include_partial('question/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('question/form_header', array('question' => $question, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('question/form', array('question' => $question, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('question/form_footer', array('question' => $question, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>

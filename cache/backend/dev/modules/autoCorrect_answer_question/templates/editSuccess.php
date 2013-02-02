<?php use_helper('I18N', 'Date') ?>
<?php include_partial('correct_answer_question/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edición de "%%answer%%"', array('%%answer%%' => $correctAnswerQuestion->getAnswer()), 'messages') ?></h1>

  <?php include_partial('correct_answer_question/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('correct_answer_question/form_header', array('correctAnswerQuestion' => $correctAnswerQuestion, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('correct_answer_question/form', array('correctAnswerQuestion' => $correctAnswerQuestion, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('correct_answer_question/form_footer', array('correctAnswerQuestion' => $correctAnswerQuestion, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial('dificulty_quiz/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Nueva opción de dificultad para la actividad', array(), 'messages') ?></h1>

  <?php include_partial('dificulty_quiz/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('dificulty_quiz/form_header', array('DificultyQuiz' => $DificultyQuiz, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('dificulty_quiz/form', array('DificultyQuiz' => $DificultyQuiz, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('dificulty_quiz/form_footer', array('DificultyQuiz' => $DificultyQuiz, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>

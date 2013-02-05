<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('quizusr/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_quiz_usr='.$form->getObject()->getIdQuizUsr() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('quizusr/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'quizusr/delete?id_quiz_usr='.$form->getObject()->getIdQuizUsr(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['id_usr_qu']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_usr_qu']->renderError() ?>
          <?php echo $form['id_usr_qu'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['id_question']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_question']->renderError() ?>
          <?php echo $form['id_question'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['id_answer']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_answer']->renderError() ?>
          <?php echo $form['id_answer'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>

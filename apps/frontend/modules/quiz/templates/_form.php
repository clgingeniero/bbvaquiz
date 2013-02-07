<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('quiz/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_quiz='.$form->getObject()->getIdQuiz() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('quiz/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'quiz/delete?id_quiz='.$form->getObject()->getIdQuiz(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['description']->renderLabel() ?></th>
        <td>
          <?php echo $form['description']->renderError() ?>
          <?php echo $form['description'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['inicial_time']->renderLabel() ?></th>
        <td>
          <?php echo $form['inicial_time']->renderError() ?>
          <?php echo $form['inicial_time'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['final_time']->renderLabel() ?></th>
        <td>
          <?php echo $form['final_time']->renderError() ?>
          <?php echo $form['final_time'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>

<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('question/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_question='.$form->getObject()->getIdQuestion() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('question/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'question/delete?id_question='.$form->getObject()->getIdQuestion(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['question']->renderLabel() ?></th>
        <td>
          <?php echo $form['question']->renderError() ?>
          <?php echo $form['question'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['id_dificultad']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_dificultad']->renderError() ?>
          <?php echo $form['id_dificultad'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>

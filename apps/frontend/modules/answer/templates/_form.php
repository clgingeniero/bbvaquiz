<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('answer/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_answer='.$form->getObject()->getIdAnswer() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('answer/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'answer/delete?id_answer='.$form->getObject()->getIdAnswer(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['answer']->renderLabel() ?></th>
        <td>
          <?php echo $form['answer']->renderError() ?>
          <?php echo $form['answer'] ?>
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
        <th><?php echo $form['correct']->renderLabel() ?></th>
        <td>
          <?php echo $form['correct']->renderError() ?>
          <?php echo $form['correct'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>

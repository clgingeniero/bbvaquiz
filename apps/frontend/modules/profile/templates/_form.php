<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('profile/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('profile/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'profile/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['user_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['user_id']->renderError() ?>
          <?php echo $form['user_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['first_name']->renderLabel() ?></th>
        <td>
          <?php echo $form['first_name']->renderError() ?>
          <?php echo $form['first_name'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['last_name']->renderLabel() ?></th>
        <td>
          <?php echo $form['last_name']->renderError() ?>
          <?php echo $form['last_name'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['birthday']->renderLabel() ?></th>
        <td>
          <?php echo $form['birthday']->renderError() ?>
          <?php echo $form['birthday'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['id_zone']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_zone']->renderError() ?>
          <?php echo $form['id_zone'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['email']->renderLabel() ?></th>
        <td>
          <?php echo $form['email']->renderError() ?>
          <?php echo $form['email'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['gender']->renderLabel() ?></th>
        <td>
          <?php echo $form['gender']->renderError() ?>
          <?php echo $form['gender'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['user_bank_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['user_bank_id']->renderError() ?>
          <?php echo $form['user_bank_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['id_position']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_position']->renderError() ?>
          <?php echo $form['id_position'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['id_center_cost']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_center_cost']->renderError() ?>
          <?php echo $form['id_center_cost'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['id_depto']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_depto']->renderError() ?>
          <?php echo $form['id_depto'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['id_area']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_area']->renderError() ?>
          <?php echo $form['id_area'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>

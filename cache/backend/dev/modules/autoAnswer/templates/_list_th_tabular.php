<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_answer">
  <?php if ('answer' == $sort[0]): ?>
    <?php echo link_to(__('Answer', array(), 'messages'), '@answer', array('query_string' => 'sort=answer&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Answer', array(), 'messages'), '@answer', array('query_string' => 'sort=answer&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_question_name">
  <?php echo __('Question name', array(), 'messages') ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_correct">
  <?php if ('correct' == $sort[0]): ?>
    <?php echo link_to(__('Correct', array(), 'messages'), '@answer', array('query_string' => 'sort=correct&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Correct', array(), 'messages'), '@answer', array('query_string' => 'sort=correct&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>
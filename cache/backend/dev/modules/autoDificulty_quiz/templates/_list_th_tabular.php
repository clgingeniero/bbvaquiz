<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_quiz">
  <?php echo __('Quiz', array(), 'messages') ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_easy">
  <?php if ('easy' == $sort[0]): ?>
    <?php echo link_to(__('Easy', array(), 'messages'), '@dificulty_quiz', array('query_string' => 'sort=easy&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Easy', array(), 'messages'), '@dificulty_quiz', array('query_string' => 'sort=easy&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_medium">
  <?php if ('medium' == $sort[0]): ?>
    <?php echo link_to(__('Medium', array(), 'messages'), '@dificulty_quiz', array('query_string' => 'sort=medium&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Medium', array(), 'messages'), '@dificulty_quiz', array('query_string' => 'sort=medium&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_hard">
  <?php if ('hard' == $sort[0]): ?>
    <?php echo link_to(__('Hard', array(), 'messages'), '@dificulty_quiz', array('query_string' => 'sort=hard&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Hard', array(), 'messages'), '@dificulty_quiz', array('query_string' => 'sort=hard&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>
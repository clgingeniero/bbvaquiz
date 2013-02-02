<td colspan="3">
  <?php echo __('%%answer%% - %%question_name%% - %%correct%%', array('%%answer%%' => $answer->getAnswer(), '%%question_name%%' => $answer->getQuestionName(), '%%correct%%' => $answer->getCorrect()), 'messages') ?>
</td>

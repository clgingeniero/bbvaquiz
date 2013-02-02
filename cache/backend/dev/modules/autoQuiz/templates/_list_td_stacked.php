<td colspan="4">
  <?php echo __('%%id_quiz%% - %%description%% - %%inicial_time%% - %%final_time%%', array('%%id_quiz%%' => link_to($quiz->getIdQuiz(), 'quiz_edit', $quiz), '%%description%%' => $quiz->getDescription(), '%%inicial_time%%' => false !== strtotime($quiz->getInicialTime()) ? format_date($quiz->getInicialTime(), "f") : '&nbsp;', '%%final_time%%' => false !== strtotime($quiz->getFinalTime()) ? format_date($quiz->getFinalTime(), "f") : '&nbsp;'), 'messages') ?>
</td>

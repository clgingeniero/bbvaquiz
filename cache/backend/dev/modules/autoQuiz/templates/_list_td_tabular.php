<td class="sf_admin_text sf_admin_list_td_id_quiz">
  <?php echo link_to($quiz->getIdQuiz(), 'quiz_edit', $quiz) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description">
  <?php echo $quiz->getDescription() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_inicial_time">
  <?php echo false !== strtotime($quiz->getInicialTime()) ? format_date($quiz->getInicialTime(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_final_time">
  <?php echo false !== strtotime($quiz->getFinalTime()) ? format_date($quiz->getFinalTime(), "f") : '&nbsp;' ?>
</td>

<h1>CorrectAnswerQuestions List</h1>

<table>
  <thead>
    <tr>
      <th>Id correct answer question</th>
      <th>Id question</th>
      <th>Id answer</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($correctAnswerQuestions as $correctAnswerQuestion): ?>
    <tr>
      <td><a href="<?php echo url_for('correctAnswerQuestion/edit?id_correct_answer_question='.$correctAnswerQuestion->getIdCorrectAnswerQuestion()) ?>"><?php echo $correctAnswerQuestion->getIdCorrectAnswerQuestion() ?></a></td>
      <td><?php echo $correctAnswerQuestion->getIdQuestion() ?></td>
      <td><?php echo $correctAnswerQuestion->getIdAnswer() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('correctAnswerQuestion/new') ?>">New</a>

<h1>QuestionsQuizs List</h1>

<table>
  <thead>
    <tr>
      <th>Id questions quiz</th>
      <th>Id quiz</th>
      <th>Id question</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($questionsQuizs as $questionsQuiz): ?>
    <tr>
      <td><a href="<?php echo url_for('questionsQuiz/edit?id_questions_quiz='.$questionsQuiz->getIdQuestionsQuiz()) ?>"><?php echo $questionsQuiz->getIdQuestionsQuiz() ?></a></td>
      <td><?php echo $questionsQuiz->getIdQuiz() ?></td>
      <td><?php echo $questionsQuiz->getIdQuestion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('questionsQuiz/new') ?>">New</a>

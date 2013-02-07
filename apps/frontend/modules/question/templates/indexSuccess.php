<h1>Questions List</h1>

<table>
  <thead>
    <tr>
      <th>Id question</th>
      <th>Question</th>
      <th>Id dificultad</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($questions as $question): ?>
    <tr>
      <td><a href="<?php echo url_for('question/edit?id_question='.$question->getIdQuestion()) ?>"><?php echo $question->getIdQuestion() ?></a></td>
      <td><?php echo $question->getQuestion() ?></td>
      <td><?php echo $question->getIdDificultad() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('question/new') ?>">New</a>

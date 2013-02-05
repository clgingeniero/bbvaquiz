<h1>Quizusrs List</h1>

<table>
  <thead>
    <tr>
      <th>Id quiz usr</th>
      <th>Id usr qu</th>
      <th>Id question</th>
      <th>Id answer</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($quizusrs as $quizusr): ?>
    <tr>
      <td><a href="<?php echo url_for('quizusr/edit?id_quiz_usr='.$quizusr->getIdQuizUsr()) ?>"><?php echo $quizusr->getIdQuizUsr() ?></a></td>
      <td><?php echo $quizusr->getIdUsrQu() ?></td>
      <td><?php echo $quizusr->getIdQuestion() ?></td>
      <td><?php echo $quizusr->getIdAnswer() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('quizusr/new') ?>">New</a>

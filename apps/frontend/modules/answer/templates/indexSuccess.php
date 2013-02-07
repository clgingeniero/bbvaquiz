<h1>Answers List</h1>

<table>
  <thead>
    <tr>
      <th>Id answer</th>
      <th>Answer</th>
      <th>Id question</th>
      <th>Correct</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($answers as $answer): ?>
    <tr>
      <td><a href="<?php echo url_for('answer/edit?id_answer='.$answer->getIdAnswer()) ?>"><?php echo $answer->getIdAnswer() ?></a></td>
      <td><?php echo $answer->getAnswer() ?></td>
      <td><?php echo $answer->getIdQuestion() ?></td>
      <td><?php echo $answer->getCorrect() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('answer/new') ?>">New</a>

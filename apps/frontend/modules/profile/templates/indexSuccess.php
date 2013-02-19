<h1>SfGuardUserProfiles List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>User</th>
      <th>First name</th>
      <th>Last name</th>
      <th>Birthday</th>
      <th>Id zone</th>
      <th>Email</th>
      <th>Gender</th>
      <th>User bank</th>
      <th>Id position</th>
      <th>Id center cost</th>
      <th>Id depto</th>
      <th>Id area</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sfGuardUserProfiles as $sfGuardUserProfile): ?>
    <tr>
      <td><a href="<?php echo url_for('profile/edit?id='.$sfGuardUserProfile->getId()) ?>"><?php echo $sfGuardUserProfile->getId() ?></a></td>
      <td><?php echo $sfGuardUserProfile->getUserId() ?></td>
      <td><?php echo $sfGuardUserProfile->getFirstName() ?></td>
      <td><?php echo $sfGuardUserProfile->getLastName() ?></td>
      <td><?php echo $sfGuardUserProfile->getBirthday() ?></td>
      <td><?php echo $sfGuardUserProfile->getIdZone() ?></td>
      <td><?php echo $sfGuardUserProfile->getEmail() ?></td>
      <td><?php echo $sfGuardUserProfile->getGender() ?></td>
      <td><?php echo $sfGuardUserProfile->getUserBankId() ?></td>
      <td><?php echo $sfGuardUserProfile->getIdPosition() ?></td>
      <td><?php echo $sfGuardUserProfile->getIdCenterCost() ?></td>
      <td><?php echo $sfGuardUserProfile->getIdDepto() ?></td>
      <td><?php echo $sfGuardUserProfile->getIdArea() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('profile/new') ?>">New</a>

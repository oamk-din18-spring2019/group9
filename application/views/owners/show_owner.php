<h2>Owner</h2>
<table border="1" class="table table-hover">
  <thead>
    <tr><th>ID</th><th>Firstname</th><th>Lastname</th><th>Phone number</th><th>Date of birth</th></tr>
  </thead>
  <tbody>

    <?php
    foreach ($owner as $row) {
      echo '<tr>';
       echo '<td>'.$row['owner_id'].'</td>';
       echo '<td>'.$row['owner_fname'].'</td>';
       echo '<td>'.$row['owner_lname'].'</td>';
       echo '<td>'.$row['owner_phone'].'</td>';
       echo '<td>'.$row['owner_birthday'].'</td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>

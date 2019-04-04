<h2>Staff</h2>
<table border="1">
  <thead>
    <tr><th>ID</th><th>Firstname</th><th>Lastname</th><th>Work hours</th></tr>
  </thead>
  <tbody>

    <?php
    foreach ($staff as $row) {
      echo '<tr>';
       echo '<td>'.$row['staff_id'].'</td>';
       echo '<td>'.$row['staff_fname'].'</td>';
       echo '<td>'.$row['staff_lname'].'</td>';
       echo '<td>'.$row['staff_hours'].'</td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>

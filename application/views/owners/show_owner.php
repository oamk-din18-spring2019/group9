<h2>Owner</h2>
<table border="1">
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
       echo '<td><a href="'.site_url('owner/show_edit/').$row['owner_id'].'">EDIT</a></td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>

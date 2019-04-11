
<h2> show Staff</h2>
<table border="1">
  <thead>
    <tr><th>ID</th><th>Firstname</th><th>Lastname</th><th>Work hours</th><th>Edit</th><th>Delete</th></tr>
  </thead>
  <tbody>

    <?php
    foreach ($staff as $row) {
      echo '<tr>';
       echo '<td>'.$row['staff_id'].'</td>';
       echo '<td>'.$row['staff_fname'].'</td>';
       echo '<td>'.$row['staff_lname'].'</td>';
       echo '<td>'.$row['staff_hours'].'</td>';
       echo '<td><a href="'.site_url('staff/show_edit/').$row['staff_id'].'">EDIT</a></td>';
       echo '<td><a href="'.site_url('staff/delete_staff/').$row['staff_id'].'"><button>Delete</button></a></td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>

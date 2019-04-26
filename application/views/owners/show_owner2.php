<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/form.css');  ?>">
<center><h2 class="add">Owner</h2></center>
<table border="1" class="table table-hover">
  <thead class="name">
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

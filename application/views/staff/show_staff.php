<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/form.css');  ?>">
<center><h2 class="add">Staff</h2></center>
<table border="1" class="table table-hover">
  <thead class="name">
    <tr><th>ID</th><th>Firstname</th><th>Lastname</th><th>Work hours</th><th>Edit</th></tr>
  </thead>
  <tbody>

    <?php
    foreach ($staff as $row) {
      echo '<tr>';
       echo '<td>'.$row['staff_id'].'</td>';
       echo '<td>'.$row['staff_fname'].'</td>';
       echo '<td>'.$row['staff_lname'].'</td>';
       echo '<td>'.$row['staff_hours'].'</td>';

       echo '<td><a href="'.site_url('staff/show_edit/').$row['staff_id'].'"><span class="btn">EDIT</btn></a></td>';
       echo '<td><a href="'.site_url('staff/show_delete/').$row['staff_id'].'"><button>DELETE</button></a></td>';
       echo '</tr>';


    }
    ?>
  </tbody>
</table>

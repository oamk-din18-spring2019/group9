<form class="" action="" method="post">
  <label for="">staff ID</label> <br>
  <input type="number" name="id" value=""> <br>

  <label for="">Firstname</label> <br>
  <input type="text" name="fn" value="" required> <br>

  <label for="">Lastname</label> <br>
  <input type="text" name="ln" value="" required> <br>

  <label for="">username</label> <br>
  <input type="text" name="em" value=""> <br>

  <label for="">Password</label> <br>
  <input type="text" name="em" value=""> <br>

  <input type="submit" name="" value="Add">
</form>
<h2>Staff</h2>
<table border="1">
  <thead>
    <tr><th>Firstname</th><th>Lastname</th><th>Staff_id</th>
      <th>username</th><th>hours</th></tr>
  </thead>
  <tbody>
    <?php
    foreach ($staff as $row) {
      echo '<tr>';
        echo '<td>'.$row['staff_fname'].'</td>';
        echo '<td>'.$row['staff_lname'].'</td>';
        echo '<td>'.$row['staff_username'].'</td>';
        echo '<td>'.$row['Staff_id'].'</td>';
        echo '<td>'.$row['staff_password'].'</td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>

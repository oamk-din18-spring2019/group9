<h2>Animals</h2>
<table border="1" class="table table-hover">
  <thead>
    <tr><th>ID</th><th>Name</th><th>Species</th><th>Description</th><th>Food</th><th>Medical details</th><th>instruction</th>
      <th>Check-in date</th><th>Check-out date</th></tr>
  </thead>
  <tbody>

    <?php
    foreach ($animal as $row) {
      echo '<tr>';
       echo '<td>'.$row['animal_id'].'</td>';
       echo '<td>'.$row['animal_name'].'</td>';
       echo '<td>'.$row['animal_species'].'</td>';
       echo '<td>'.$row['animal_description'].'</td>';
       echo '<td>'.$row['animal_food'].'</td>';
       echo '<td>'.$row['animal_medical'].'</td>';
       echo '<td>'.$row['animal_instruction'].'</td>';
        echo '<td>'.$row['checkin'].'</td>';
         echo '<td>'.$row['checkout'].'</td>';

      echo '</tr>';
    }


    ?>
  </tbody>
</table>

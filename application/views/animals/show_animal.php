<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/form.css');  ?>">
<center><h2 class="add">animal</h2></center>
<table border="1" class="table table-hover">
  <thead class="name">
    <tr><th>ID</th><th>Name</th><th>Species</th><th>Description</th><th>Food</th><th>Medical details</th><th>Instruction</th>
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
        echo '<td>'.$row['check_in'].'</td>';
         echo '<td>'.$row['check_out'].'</td>';

      echo '</tr>';
    }


    ?>
  </tbody>
</table>


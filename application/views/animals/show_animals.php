<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/form.css');  ?>">
<center><h2 class="add">Animals</h2></center>
<table border="1" class="table table-hover">
  <thead class="name">

    <tr><th>ID</th><th>Name</th><th>Species</th><th>Description</th><th>Food</th><th>Medical details</th><th>Instruction</th>
      <th>Edit</th></tr>

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

        echo '<td><a href="'.site_url('animal/show_edit/').$row['animal_id'].'"><button>EDIT</button></a></td>';

      echo '</tr>';
    }
    /*
    foreach ($stay as $row) {
      echo '<td>'.$row['check_in'].'</td>';
      echo '<td>'.$row['check_out'].'</td>';
    }
    */
    ?>
  </tbody>

</table>



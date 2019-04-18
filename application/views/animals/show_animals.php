<h2>Animals</h2>
<table border="1" class="table table-hover">
  <thead>

    <tr><th>ID</th><th>Name</th><th>Species</th><th>Description</th><th>Food</th><th>Medical details</th><th>instruction</th>
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

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Room table</h1>
    <table border="1" class="table table-hover">
      <thead>
        <tr><th>OWNER ID</th><th>ANIMAL ID</th><th>ROOM ID</th><th>PRICE</th><th>CHECK in</th><th>CHECK out</th><th>duration</th></tr>
      </thead>
      <tbody>

        <?php
        foreach ($room as $row) {
          echo '<tr>';
           echo '<td>'.$row['owner_id'].'</td>';
           echo '<td>'.$row['animal_id'].'</td>';
           echo '<td>'.$row['room_id'].'</td>';
           echo '<td>'.$row['stay_price'].'</td>';
           echo '<td>'.$row['check_in'].'</td>';
           echo '<td>'.$row['check_out'].'</td>';


          echo '</tr>';
        }
        ?>
      </tbody>
    </table>

  </body>
</html>

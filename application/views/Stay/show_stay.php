<center><h2>Stays</h2></center>
<center><table class="table table-hover" border="1">

    <thead>
        <tr>
            <th>Owner ID</th>
            <th>Animal ID </th>
            <th>Room ID </th>
            <th>Cost</th>
            <th>Check-in date</th>
            <th>Check-out date</th>
            <th></th>
            
</tr>
</thead>
<tbody>
    <?php
    foreach($Stay as $row)
    {
        echo '<tr>';
        echo '<td>'.$row['owner_id'].'</td>';
        echo '<td>'.$row['animal_id'].'</td>';
        echo '<td>'.$row['room_id'].'</td>';
        echo '<td>'.$row['stay_price'].'</td>';
        echo '<td>'.$row['Checkin'].'</td>';
        echo '<td>'.$row['Checkout'].'</td>';
        echo '</tr>';
    }
    ?>
</tbody>
</table>
</center>

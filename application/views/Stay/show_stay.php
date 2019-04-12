<center><h2>Stays</h2></center>
<?php
//print_r('stays')

?>
<center><table border="none" >
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
        echo '<td>'.$row['Check_in'].'</td>';
        echo '<td>'.$row['Check_out'].'</td>';
        echo '</tr>';
    } 
    ?> 
</tbody>
</table>
</center>
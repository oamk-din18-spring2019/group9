<h2>Students</h2>
<?php
print_r('stays')
?>
<table>
    <thead>
        <tr>
            <th>Owner ID</th>
            <th>Owner firstname</th>
            <th>Owner lastname</th>
            <th>Animal ID </th>
            <th>Animal name</th>
            <th>Payment</th>
            <th>Check-in date</th>
            <th>Check-out date</th>
            <th></th>

</tr>
</thead>
<tbody>
    <?php
    foreach($stays as $row)
    {
        echo '<tr>';
        echo '<td>'.$row['owner_id'].'</td>';
        echo '<td>'.$row['owner_fname'].'</td>';
        echo '<td>'.$row['owner_lname'].'</td>';
        echo '<td>'.$row['animal_id'].'</td>';
        echo '<td>'.$row['animal_name'].'</td>';
        echo '<td>'.$row['stay_price'].'</td>';
        echo '<td>'.$row['Check_in'].'</td>';
        echo '<td>'.$row['Check_out'].'</td>';
        echo '</tr>';
    } 
    ?> 
</tbody>
</table>
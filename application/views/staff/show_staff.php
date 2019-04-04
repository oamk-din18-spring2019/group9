<<<<<<< HEAD
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css">
            tr.header
            {
                font-weight:bold;
            }
            tr.alt
            {
                background-color: #777777;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function(){
               $('.striped tr:even').addClass('alt');
            });
        </script>
        <title></title>
    </head>
    <body>
        <?php

            $server = mysql_connect("localhost","hoteluser", "hotelpass");
            $db =  mysql_select_db("MyDatabase",$server);
            $query = mysql_query("select * from employees");
        ?>
        <table class="striped">
            <tr class="header">
                <td>Id</td>
                <td>Name</td>
                <td>Title</td>
            </tr>
            <?php
               while ($row = mysql_fetch_array($query)) {
                   echo "<tr>";
                   echo "<td>".$row[ID]."</td>";
                   echo "<td>".$row[Name]."</td>";
                   echo "<td>".$row[Title]."</td>";
                   echo "</tr>";
               }

            ?>
        </table>
    </body>
</html>
=======
<h2>Staff</h2>
<table border="1">
  <thead>
    <tr><th>ID</th><th>Firstname</th><th>Lastname</th><th>Work hours</th></tr>
  </thead>
  <tbody>

    <?php
    foreach ($staff as $row) {
      echo '<tr>';
       echo '<td>'.$row['staff_id'].'</td>';
       echo '<td>'.$row['staff_fname'].'</td>';
       echo '<td>'.$row['staff_lname'].'</td>';
       echo '<td>'.$row['staff_hours'].'</td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>
>>>>>>> 1b47195ed2aac20b13f0f82b436b7684ca2ba00b

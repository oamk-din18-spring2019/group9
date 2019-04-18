<?php


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>RESERVATION</title>
  <!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/form.css'); ?>"> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h1>pet rest</h1>
<?php
echo '<a href="'.site_url('animals/add_form').'"><span class="btn">Make new reservation</btn> </a>';
echo" <br>";

echo '<a href="'.site_url('login_owner/logout').'"><span class="btn">Owner Logout</btn> </a>';
echo "<br>";


 echo '<a href="'.site_url('owner/show_owner2').'"><span class="btn">your info</btn> </a>';
echo '<a href="'.site_url('animal/show_animal').'"><span class="btn">your pet info</btn> </a>';

echo "<br>";
 ?>

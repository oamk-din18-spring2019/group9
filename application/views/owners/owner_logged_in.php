<?php


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/form.css');  ?>">
    <meta charset="UTF-8">
    <title>RESERVATION</title>
  <!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/form.css'); ?>"> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<center><div class="title1"><h1>PET REST</h1></div></center>
</head>
<body>

<div class="btn-group">
  <?php
  echo '<a href="'.site_url('animal/add_new_animal_form').'"><span class="btn">Make new reservation</btn> </a>';
  echo" <br>";




  echo '<a href="'.site_url('owner/show_owner2').'"><span class="btn">Personal info</btn> </a>';

  echo "<br>";

  echo '<a href="'.site_url('animal/show_animal').'"><span class="btn">Pet info</btn> </a>';
  echo "<br>";

  echo '<a href="'.site_url('login_owner/logout').'"><span class="btn">Owner Logout</btn> </a>';
  echo "<br>";

 ?>
     <hr>
</div>

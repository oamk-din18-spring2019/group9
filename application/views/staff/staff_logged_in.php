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

<hr>
<h2 class="account">Staff account</h2>
<div class="btn-group">
<?php echo '<a href="'.site_url('staff/show_staff').'"><span class="btn">staff</btn> </a>';

echo '<a href="'.site_url('owner/show_owner').'"><span class="btn">owners</btn> </a>';

echo '<a href="'.site_url('animal/show_animals').'"><span class="btn">animals</btn> </a>';

echo '<a href="'.site_url('stay/show_stay').'"><span class="btn">stays</btn> </a>';


echo '<a href="'.site_url('login_staff/logout').'"><span class="btn">logout</btn> </a>';

 ?>
 </div>
<br>
<hr>
<br>

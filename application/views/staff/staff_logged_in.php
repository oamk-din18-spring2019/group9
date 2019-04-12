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
<h2>Staff account</h2>
<div class="btn-group">
<?php echo '<a href="'.site_url('staff/show_staff').'"><span class="btn">view staff</btn> </a>';

echo '<a href="'.site_url('owner/show_owner').'"><span class="btn">view owners</btn> </a>';

echo '<a href="'.site_url('animal/show_animals').'"><span class="btn">view animals</btn> </a>';

echo '<a href="'.site_url('stay/show_stay').'"><span class="btn">view stays</btn> </a>';

echo '<a href="'.site_url('login_staff/logout').'"><span class="btn">Staff Logout</btn> </a>';
 ?>
 </div>

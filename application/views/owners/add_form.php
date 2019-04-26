<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/form.css');  ?>">
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <center><div class="title1"><h1>PET REST</h1></div></center>
  </head>
  </head>
  <body class="body1">
   <center> <h2 class="add">Add your personal details</h2></center>
    <center><form class="" action="<?php echo site_url('owner/add_owner'); ?>" method="post">
      <input type="hidden" name="set_depart" value="<?php echo $set_depart;?>">
      <input type="hidden" name="set_arrival" value="<?php echo $set_arrival;?>">
      <input type="hidden" name="set_species" value="<?php echo $set_species;?>">

      <input type="hidden" name="owner_id" value="<?php echo $new_owner_id; ?>"><br>

      <label for="">Firstname</label><br>
      <input type="text" name="fname" value=""required><br>

      <label for="">Lastname</label><br>
      <input type="text" name="lname" value=""required><br>

      <label for="">Phone number</label><br>
      <input type="number" name="phone" value=""required><br>

      <label for="">Date of birth</label><br>
      <input type="date" name="birthday" value="" required><br>

      <label for="">Username</label><br>
      <input type="text" name="username" value=""required><br>

      <label for="">Password</label><br>
      <input type="password" name="password" value=""required>
      <br><br>

      <input type="submit" name="" value="Continue">

    </form></center>
  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/form.css');  ?>">
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <center><div class="title1"><h1>PET REST</h1></div></center>
  </head>
  <body class="body1">
    <center>
      <br><br><br><br><br>
      <div class="add"><h3>Owner login</h3></div>
    <div class="logino">
      
      <form class="" action="<?php echo site_url('login_owner/do_login'); ?>" method="post">
        <label for="">username</label><br>
        <input type="text" name="owner_username" value="" required><br>
        <label for="">password</label><br>
        <input type="password" name="owner_password" value="" required><br><br>
        <input type="submit" name="" value="Login">
      </form>
    </div>
  </center>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="centered">
      <h3>Owner login</h3>
      <form class="" action="<?php echo site_url('login_owner/do_login'); ?>" method="post">
        <label for="">username</label><br>
        <input type="text" name="owner_username" value=""><br>
        <label for="">password</label><br>
        <input type="password" name="owner_password" value=""><br><br>
        <input type="submit" name="" value="Login">
      </form>
    </div>

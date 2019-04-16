<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Room table
    <form class="" action="<?php echo site_url('room/show_stay_dates'); ?>" method="post">

    <label for="">Room id</label><br>
    <input type="text" name="room_id" value=""><br>

    <label for="">Stay duration</label><br>
    <input type="text" name="stay_duration" value="<?php echo $duration; ?>"><br>

    <label for="">Price</label><br>
    <input type="text" name="stay_cost" value="<?php echo $cost; ?>"><br>
    <br><br>

    <input type="submit" name="" value="Submit">

    </form>

  </body>
</html>

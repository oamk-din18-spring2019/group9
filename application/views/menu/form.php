<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>RESERVATION</title>
    <link rel="stylesheet" type="text/css" href="form.css">
    <!--<script src="<?php echo base_url('js/animalForm.js'); ?>" charset="utf-8"></script>-->
  <!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/form.css'); ?>"> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <div class="main">
      <h1>pet rest</h1>
      <?php
      if(!empty($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
        //do nothing
      }
      else {
        echo "Guest";
      }
      ?>
    </div>

    <form id=sourceForm action="<?php echo site_url('owner/transfer_animal_value');?>" method="post" class="name" style="height:100%;">
        <fieldset >

            <div class="animal"><p>PET</p></div>
      <div class="pet">

        <label for="Cat">Cat</label>
        <input id="Cat" type="radio" name="species" value="Cat">
        <label for="Dog">Dog</label>
        <input id="Dog" type="radio" name="species" value="Dog">
    </div>
        </fieldset>
        <fieldset class="reservation">
           <div class="room" ><legend>Booking details</legend></div>
            <label for="date">Check-in date</label>
            <input id="arrival" type="date" name="arrival" min="2019-01-01">
            <label for="date">Check-out date</label>
            <input id="depart" type="date" name="depart" min="2019-01-01">
            <br><br>
            <input type="submit" name="" value="Book Now">
            <br>
        </fieldset>
        <br>
    <div class="">
      <?php
      if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
            if ($_SESSION['owner_logged_in'] == true) {
              echo '<a href="'.site_url('').'"><span class="btn">Make new reservation</btn> </a>';
              echo" <br>";

              echo '<a href="'.site_url('login_owner/logout').'"><span class="btn">Owner Logout</btn> </a>';
              echo "<br>";

            }


          //

            else if ($_SESSION['staff_logged_in'] == true) {

              echo '<a href="'.site_url('staff/show_staff').'"><span class="btn">view staff</btn> </a>';
              echo "<br>";

              echo '<a href="'.site_url('owner/show_owner').'"><span class="btn">view owners</btn> </a>';
              echo "<br>";

              echo '<a href="'.site_url('').'"><span class="btn">view animals</btn> </a>';
              echo "<br>";

              echo '<a href="'.site_url('').'"><span class="btn">view stays</btn> </a>';
              echo "<br>";

              echo '<a href="'.site_url('login_staff/logout').'"><span class="btn">Staff Logout</btn> </a>';
              echo "<br>";
            }
      }

      else {


        echo '<a href="'.site_url('owner/add_owner_user_form').'"><span class="btn">Create a new account</btn> </a>';
        echo" <br>";

        echo '<a href="'.site_url('staff/add_staff_user_form').'"><span class="btn">Add staff user</btn> </a>';
        echo" <br>";

        echo '<a href="'.site_url('login_owner/login').'"><span class="btn"> Owner login</btn> </a>';
        echo" <br>";

        echo '<a href="'.site_url('login_staff/login').'"><span class="btn">Staff Login</btn> </a>';
        echo" <br>";
      }
      ?>
    </div>
    </form>
<hr>
<hr>

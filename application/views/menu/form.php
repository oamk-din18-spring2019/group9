<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>RESERVATION</title>
    <!--<script src="<?php echo base_url('js/animalForm.js'); ?>" charset="utf-8"></script>-->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/form.css'); ?>">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
<!--
<div class="container">
  <img src="<?php echo base_url('pictures/sc-Ultra-suite-w-Dogs.jpg');?>" >
</div>
-->
    <div class="main">
    <h1>pet rest</h1><br>
    <?php
    echo '<a href="'.site_url('login_owner/owner_login').'"><span class="btn"> Owner login</btn> </a>';
    echo" <br>";
     ?>

    <hr>
    </div>

    <form id=sourceForm action="<?php echo site_url('owner/transfer_animal_value');?>" method="post" class="name" style="height:100%;">

        <fieldset >
          <div class="animal"><legend>Pet</legend></div>
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
            
            <input id="arrival" type="date" name="arrival" min="<?php echo date("Y-m-d");?>" >
            <label for="date">Check-out date</label>
            <input id="depart" type="date" name="depart" min="<?php echo date("Y-m-d");?>" >
            <br><br>
            <input type="submit" name="" value="Book Now">
            <br>
        </fieldset>


    </form>

        <br>

    <hr>

    <div class="container">
    <button type="button" class="btn " data-toggle="collapse" data-target="#demo">About</button>

      <div id="demo" class="collapse">

        <h3>Our prices</h3>
        <i><b>Cats: </b>40e/day</i><br>
        <i><b>Dogs: </b>50e/day</i><br>

        <h3>About us</h3>
        <i>uhhhhhh</i>
      </div>
    </div>

<!--
    <div class="btn-group">

      <?php

    /*  if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
            if ($_SESSION['owner_logged_in'] == true) {
              redirect('owner/owner_logged_in');

              echo '<a href="'.site_url('animals/add_form').'"><span class="btn">Make new reservation</btn> </a>';
              echo" <br>";


              echo '<a href="'.site_url('login_owner/logout').'"><span class="btn">Owner Logout</btn> </a>';
              echo "<br>";

            }


          //

            else if ($_SESSION['staff_logged_in'] == true) {
              redirect('staff/staff_logged_in');

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


        echo '<a href="'.site_url('login_owner/owner_login').'"><span class="btn"> Owner login</btn> </a>';
        echo" <br>";

        echo '<a href="'.site_url('staff/add_staff_user_form').'"><span class="btn">Add staff user</btn> </a>';
        echo" <br>";

        echo '<a href="'.site_url('login_staff/staff_login').'"><span class="btn">Staff Login</btn> </a>';
        echo" <br>";
      }
*/
      ?>
    </div>
-->

<hr>

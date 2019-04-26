<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>RESERVATION</title>
    <!--<script src="<?php echo base_url('js/animalForm.js'); ?>" charset="utf-8"></script>-->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/form.css');  ?>">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body class="body1">
<!--<center>  <img src="<?php echo base_url('pictures/dog_cat.jpg');?>" ></center>-->
<div class="bg"> 
<div class=title><h1>PET REST</h1></div>
    <div class="main">
    <?php
    echo '<a href="'.site_url('login_owner/owner_login').'"><span class="btn btn-info"  id="login"> Owner login</btn> </a>';
    echo" <br>";
     ?>
    </div>

    <form id=sourceForm action="<?php echo site_url('owner/transfer_animal_value');?>" method="post" class="name" style="height:100%;">

      <div class="reservation">
           <div class="float">
            <h2>Pet</h2>
            <label for="Cat">Cat</label>
            <input id="Cat" type="radio" name="species" value="Cat">
            <label for="Dog">Dog</label>
            <input id="Dog" type="radio" name="species" value="Dog"> 
</div>   
        <div class="book">
            <h2>Booking Details</h2>
            <label for="date">Check-in date</label>

            <input id="arrival" type="date" name="arrival" min="<?php echo date("Y-m-d");?>" onchange=setMindate() >
            <label for="date">Check-out date</label>
            <input id="depart" type="date" name="depart" min="" >


             <button type="submit" name="">BOOK NOW!</button>
</div>

      </div>   
      </form>
    <div class="about">
        <button type="button" class="btn" id="about" data-toggle="collapse" data-target="#demo">ABOUT</button>
        <div id="demo" class="collapse">

        <h3>Our prices</h3>
          <i><b>Cats: </b>40e/day</i><br>
          <i><b>Dogs: </b>50e/day</i><br>

          <h3>About us</h3>
          <i>We love your pets as they were ours</i><br>
          <i>tel. 0x01237656</i>
          <i>email info@petrest.com</i>
        </div>
    </div>



    

        <br>



    
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

<script>
function setMindate(){
  var min=document.getElementById('arrival').value;
  console.log(min);
  document.getElementById('depart').min=min;
}
</script>

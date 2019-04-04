<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>RESERVATION</title>
    <link rel="stylesheet" type="text/css" href="form.css">
    <!--<script src="<?php echo base_url('js/animalForm.js'); ?>" charset="utf-8"></script>-->
</head>
<body>
    <div class="main">
      <h1>pet rest</h1>

    </div>

    <form id=sourceForm action="<?php echo site_url('owner/atest');?>" method="post" class="name" style="height:100%;">
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
            <input id="arrival" type="date" name="arrival" min="2019-01-01" onchange="showArrival()">
            <label for="date">Check-out date</label>
            <input id="depart" type="date" name="depart" min="2019-01-01" onchange="showDeparture()">
        </fieldset>
        <br>
        <input type="submit" name="" value="Click">
    </form>
<?php
    echo '<li> <a href="' . site_url('') . '">Search</a> </li>';
    echo" <br>";
    echo '<li> <a href="' . site_url('owner/add_form') . '">Book now</a> </li>';
    echo" <br>";
    echo '<li> <a href="' . site_url('staff/show_staff') . '">view staff</a> </li>';
    echo" <br>";
    echo '<li> <a href="' . site_url('') . '">view owners</a> </li>';
    echo" <br>";
    echo '<li> <a href="' . site_url('') . '">view animals</a> </li>';
    echo" <br>";
    echo '<li> <a href="' . site_url('') . '">view stays</a> </li>';
    echo" <br>";
    echo '<li> <a href="' . site_url('login_user/example') . '">User Login</a> </li>';
    echo" <br>";
    echo '<li> <a href="' . site_url('staff/add_staff_user_form') . '">Add staff user</a> </li>';
    echo" <br>";
    echo '<li> <a href="' . site_url('login_staff/example') . '">Staff Login</a> </li>';
    echo" <br>";
    echo '<li> <a href="' . site_url('login/logout') . '">Logout</a> </li>';

?>


<hr>

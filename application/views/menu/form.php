<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>RESERVATION</title>
    <link rel="stylesheet" type="text/css" href="form.css">

</head>
<body>
    <div class="main">
      <h1>pet rest</h1>

    </div>

    <form id=sourceForm action="" class="name" style="height:100%;">
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
            <input type="date" name="date" min="2019-01-01" onchange="showArrival()">
            <label for="date">Check-out date</label>
            <input type="date" name="date" min="2019-01-01" onchange="showDeparture()">
        </fieldset>
        <br>
<?php
    echo '<li> <a href="' . site_url('') . '">Search</a> </li>';
    echo" <br>";
    echo '<li> <a href="' . site_url('') . '">Book now</a> </li>';
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

    </form>
<hr>
<hr>

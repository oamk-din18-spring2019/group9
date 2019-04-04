<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>RESERVATION</title>
<<<<<<< HEAD
    <link rel="stylesheet" type="text/css" href="form.css">
    <!--<script src="<?php echo base_url('js/animalForm.js'); ?>" charset="utf-8"></script>-->
=======
  <!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/form.css'); ?>"> -->

>>>>>>> master
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
<<<<<<< HEAD
            <input id="depart" type="date" name="depart" min="2019-01-01" onchange="showDeparture()">
=======
            <input type="date" name="date" min="2019-01-01">
            <br>

            <?php     echo("<button onclick=\"location.href=''\">Search</button>");
                      echo" <br>";
                      echo("<button onclick=\"location.href='owner/add_owner_user_form'\">Book now</button>");
                      echo" <br>";
            ?>
>>>>>>> master
        </fieldset>
        <br>
        <input type="submit" name="" value="Click">
    </form>
<?php
<<<<<<< HEAD
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
=======
if (($_SESSION['logged_in'] == true)) {
      if ($_SESSION['owner_logged_in'] == true) {
        echo("<button onclick=\"location.href=''\">Make new reservation</button>");
        echo" <br>";
        echo("<button onclick=\"location.href='login_owner/logout'\">Owner Logout</button>");
        echo "<br>";

      }


    //

      else if ($_SESSION['staff_logged_in'] == true) {
        echo("<button onclick=\"location.href='staff/show_staff'\">view staff</button>");
        echo" <br>";

        echo("<button onclick=\"location.href='owner/show_owner'\">view owners</button>");
        echo" <br>";

        echo("<button onclick=\"location.href=''\">view animals</button>");
        echo" <br>";

        echo("<button onclick=\"location.href=''\">view stays</button>");
        echo" <br>";

        echo("<button onclick=\"location.href='login_staff/logout'\">Staff Logout</button>");
        echo "<br>";
      }
}

else {


  echo("<button onclick=\"location.href='owner/add_owner_user_form'\">Create a new account</button>");
  echo" <br>";

  echo("<button onclick=\"location.href='staff/add_staff_user_form'\">Add staff user</button>");
  echo" <br>";

  echo("<button onclick=\"location.href='login_owner/login'\">Owner Login</button>");
  echo" <br>";

  echo("<button onclick=\"location.href='login_staff/login'\">Staff Login</button>");
  echo" <br>";
}





>>>>>>> master

?>


<hr>

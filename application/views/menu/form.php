<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>RESERVATION</title>
    <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/form.css'); ?>">-->

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

    <form class="name" style="height:100%;">
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
            <input type="date" name="date" min="2019-01-01">
            <label for="date">Check-out date</label>
            <input type="date" name="date" min="2019-01-01">
            <br>

            <?php     echo '<li> <a href="' . site_url('') . '">Search</a> </li>';
                      echo" <br>";
                      echo '<li> <a href="' . site_url('') . '">Book now</a> </li>';
                      echo" <br>";
            ?>
        </fieldset>
        <br>
<?php
if (($_SESSION['logged_in'] == true)) {
      if ($_SESSION['owner_logged_in'] == true) {
        echo '<li> <a href="' . site_url('') . '">Make new reservation</a> </li>';
        echo" <br>";
        echo '<li> <a href="' . site_url('login_owner/logout') . '">Owner Logout</a> </li>';
        echo "<br>";
      }


    //

      else if ($_SESSION['staff_logged_in'] == true) {
        echo '<li> <a href="' . site_url('staff/show_staff') . '">view staff</a> </li>';
        echo" <br>";

        echo '<li> <a href="' . site_url('owner/show_owner') . '">view owners</a> </li>';
        echo" <br>";

        echo '<li> <a href="' . site_url('') . '">view animals</a> </li>';
        echo" <br>";

        echo '<li> <a href="' . site_url('') . '">view stays</a> </li>';
        echo" <br>";
        echo '<li> <a href="' . site_url('login_staff/logout') . '">Staff Logout</a> </li>';

      }
}

else {


  echo '<li> <a href="' . site_url('owner/add_owner_user_form') . '">Sign up</a> </li>';
  echo" <br>";

  echo '<li> <a href="' . site_url('staff/add_staff_user_form') . '">Add staff user</a> </li>';
  echo" <br>";

  echo '<li> <a href="' . site_url('login_owner/login') . '">Owner Login</a> </li>';
  echo" <br>";

  echo '<li> <a href="' . site_url('login_staff/login') . '">Staff Login</a> </li>';
  echo" <br>";
}






?>

    </form>
<hr>
<hr>

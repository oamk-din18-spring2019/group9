<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>RESERVATION</title>
  <!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/form.css'); ?>"> -->

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

            <?php     echo("<button onclick=\"location.href=''\">Search</button>");
                      echo" <br>";
                      echo("<button onclick=\"location.href='owner/add_owner_user_form'\">Book now</button>");
                      echo" <br>";
            ?>
        </fieldset>
        <br>
<?php
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






?>

    </form>
<hr>
<hr>

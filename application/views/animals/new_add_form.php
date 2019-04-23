<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  </head>
  <body>
    <?php
    if (isset($_SESSION['owner_id'])) {
      $active_id = $_SESSION['owner_id'];
    }
    else {
      $active_id = $new_owner_id;
    }
     ?>
    <form class="" action="<?php echo site_url('animal/add_new_animal'); ?>" method="post">
      <div class="room"><legend>Add your pet's information</legend></div><br>

      <label for="Cat">Cat</label>
      <input id="Cat" type="radio" name="animal_species" value="Cat"><br>
      <label for="Dog">Dog</label>
      <input id="Dog" type="radio" name="animal_species" value="Dog"> <br><br>

       <label for="date">Check-in date</label><br>
       <input id="checkin" type="date" name="checkin" min="2019-01-01" required><br>
       <label for="date">Check-out date</label><br>
       <input id="checkout" type="date" name="checkout" min="2019-01-01" required><br>

      <input type="hidden" name="owner_id" value="<?php echo $active_id; ?>">

      <input type="hidden" name="animal_id" value="<?php echo $new_id; ?>">

      <label for="animal_name">Name</label><br>
      <input type="text" name="animal_name" value=""required><br>

      <label for="animal_description">Pet description</label><br>
      <textarea id="animal_description" name="animal_description"required></textarea>
      <br>

      <label for="animal_food">Feeding instructions</label><br>
      <textarea id="animal_food" name="animal_food"required></textarea>
      <br>

      <label for="animal_medical">If your pet has medication, describe them here</label><br>
      <textarea id="animal_medical" name="animal_medical"></textarea>
      <br>

      <label for="animal_instruction">Your pet's special caring instructions</label><br>
      <textarea id="animal_instruction" name="animal_instruction"></textarea>
      <br><br>

      <a href="<?php echo site_url('owner/index');?>"><span class="btn btn-primary">Cancel</span></a>
      <input type="submit" name="" value="Confirm">


    </form>
  </body>
</html>

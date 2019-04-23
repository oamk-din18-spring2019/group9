<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <h2>Add your pet's information</h2>
    <?php echo $set_species;  ?>
    <form id=targetForm class="" action="<?php echo site_url('animal/add_animal'); ?>" method="post">
      <input type="hidden" name="checkout" value="<?php echo $set_depart;?>">
      <input type="hidden" name="checkin" value="<?php echo $set_arrival;?>">
      <input type="hidden" name="animal_species" value="<?php echo $set_species;?>">
      <input type="hidden" name="owner_id" value="<?php echo $new_owner_id;?>">
      <input type="hidden" name="animal_id" value="<?php echo $new_id; ?>"><br>

      <label for="animal_name">Name</label><br>
      <input type="text" name="animal_name" value="" required><br>



      <label for="checkin">Arrival date</label><br>
      <input type="date" id="selected_arrival" name="checkin" value="<?php echo $set_arrival; ?>"><br>

      <label for="checkout">Departure date</label><br>
      <input type="date" id="selected_departure" name="checkout" value="<?php echo $set_depart; ?>"><br>

      <label for="animal_description">Pet description</label><br>
      <textarea id="animal_description" name="animal_description" required></textarea>
      <br>

      <label for="animal_food">Feeding instructions</label><br>
      <textarea id="animal_food" name="animal_food" required></textarea>
      <br>

      <label for="animal_medical">If your pet has medication, describe them here</label><br>
      <textarea id="animal_medical" name="animal_medical"></textarea>
      <br>

      <label for="animal_instruction">Your pet's special caring instructions</label><br>
      <textarea id="animal_instruction" name="animal_instruction"></textarea>
      <br><br>

      <input type="submit" name="" value="Confirm">
      <a href="<?php echo site_url();?>"><span class="btn btn-primary">Cancel</span></a>

    </form>

  </body>
</html>

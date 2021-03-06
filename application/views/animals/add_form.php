<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/form.css');  ?>">
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <center><div class="title1"><h1>PET REST</h1></div></center>
  </head>
  <body class="body1">
    <center><h2 class="add">Add your pet's information</h2>
    <?php echo $set_species;  ?>
    <center><form id=targetForm class="" action="<?php echo site_url('animal/add_animal'); ?>" method="post">
      <input type="hidden" name="check_out" value="<?php echo $set_depart;?>">
      <input type="hidden" name="check_in" value="<?php echo $set_arrival;?>">
      <input type="hidden" name="animal_species" value="<?php echo $set_species;?>">
      <input type="hidden" name="owner_id" value="<?php echo $new_owner_id;?>">
      <input type="hidden" name="animal_id" value="<?php echo $new_id; ?>"><br>

      <label for="animal_name">Name</label><br>
      <input type="text" name="animal_name" value="" required><br>



      <label for="check_in">Arrival date</label><br>
      <input type="date" id="selected_arrival" name="check_in" value="<?php echo $set_arrival; ?>"><br>

      <label for="check_out">Departure date</label><br>
      <input type="date" id="selected_departure" name="check_out" value="<?php echo $set_depart; ?>"><br>

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
      
      <a href="<?php echo site_url();?>"><span class="btn"><button>Cancel</button></span></a>
      <input type="submit" name="" value="Confirm">


    </form></center>

  </body>
</html>

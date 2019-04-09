<h2>Add your pet's information</h2>
<?php echo $set_species;  ?>
<form id=targetForm class="" action="<?php echo site_url('animal/add_animal'); ?>" method="post">
  <input type="hidden" name="set_depart" value="<?php echo $set_depart;?>">
  <input type="hidden" name="set_arrival" value="<?php echo $set_arrival;?>">
  <input type="hidden" name="set_species" value="<?php echo $set_species;?>">

  <label for="">Animal ID</label><br>
  <input type="text" name="animal_id" value=""><br>

  <label for="">Name</label><br>
  <input type="text" name="name" value=""><br>

<div class="animal">
  Animal<br>
  <label for="Cat">Cat</label>
  <input id="cat" type="radio" name="cat" value="" <?php if($set_species=='Cat') echo 'checked=true'; ?>>

  <label for="Dog">Dog</label>
  <input id="dog" type="radio" name="dog" value=""<?php if($set_species=='Dog') echo 'checked=true'; ?>><br>

</div>

  <label for="">Arrival date</label><br>
  <input type="date" id="selected_arrival" name="arrival" value="<?php echo $set_arrival; ?>"><br>

  <label for="">Departure date</label><br>
  <input type="date" id="selected_departure" name="depart" value="<?php echo $set_depart; ?>"><br>

  <label for="description">Pet description</label><br>
  <textarea id="description" name="description"></textarea>
  <br>

  <label for="">Feeding instructions</label><br>
  <textarea id="food" name="food"></textarea>
  <br>

  <label for="">If your pet has medication, describe them here</label><br>
  <textarea id="medication" name="medication"></textarea>
  <br>

  <label for="">Your pet's special caring instructions</label><br>
  <textarea id="instructions" name="instructions"></textarea>
  <br><br>

  <input type="submit" name="" value="Confirm">
  <input type="button" name="" value="<?php echo '<a href="'.site_url('menu/form').'">Cancel</a>'; ?>"

</form>

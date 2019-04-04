<h2>Add your pet's information</h2>
<form id=targetForm class="" action="<?php echo site_url('animal/add_animal'); ?>" method="post">
  <label for="">Animal ID</label><br>
  <input type="text" name="animal_id" value=""><br>

  <label for="">Name</label><br>
  <input type="text" name="name" value=""><br>

<div class="animal">
  Animal<br>
  <label for="Cat">Cat</label>
  <input id="cat" type="radio" name="cat" value="">

  <label for="Dog">Dog</label>
  <input id="dog" type="radio" name="dog" value=""><br>

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

</form>

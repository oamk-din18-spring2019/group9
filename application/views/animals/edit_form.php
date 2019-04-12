<h2>Edit</h2>
<!--<?php print_r($animal); ?>-->

<form class="" action="<?php  echo site_url('animal/edit_animal'); ?>" method="post">
  <input type="hidden" name="id" value="<?php echo $animal[0]['animal_id']; ?>">
  <label for="">animal species</label><br>
  <input type="text" name="animal_species" value="<?php echo $animal[0]['animal_species']; ?>" > <br>
<label for="">animal description</label><br>
<input type="text" name="animal_description" value="<?php echo $animal[0]['animal_description']; ?>"><br>
<label for="">animal food</label><br>
<input type="text" name="animal_food" value="<?php echo $animal[0]['animal_food']; ?>"><br>
<label for="">animal medical</label> <br>
<input type="text" name="animal_medical" value="<?php echo $animal[0]['animal_medical']; ?>"> <br><br>
<label for="">animal instruction</label> <br>
<input type="text" name="animal_instruction" value="<?php echo $animal[0]['animal_instruction']; ?>"> <br><br>

<input type="submit" name="" value="Add">
</form>

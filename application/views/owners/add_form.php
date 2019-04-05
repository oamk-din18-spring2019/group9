<h2>Add your personal details</h2>
<form class="" action="<?php echo site_url('owner/add_owner'); ?>" method="post">
  <input type="hidden" name="set_depart" value="<?php echo $set_depart;?>">
  <input type="hidden" name="set_arrival" value="<?php echo $set_arrival;?>">
  <input type="hidden" name="set_species" value="<?php echo $set_species;?>">

  <label for="">ID</label><br>
  <input type="text" name="owner_id" value=""><br>

  <label for="">Firstname</label><br>
  <input type="text" name="fname" value=""><br>

  <label for="">Lastname</label><br>
  <input type="text" name="lname" value=""><br>

  <label for="">Phone number</label><br>
  <input type="number" name="phone" value=""><br>

  <label for="">Date of birth</label><br>
  <input type="date" name="birthday" value=""><br>

  <label for="">Username</label><br>
  <input type="text" name="username" value=""><br>

  <label for="">Password</label><br>
  <input type="text" name="password" value="">
  <br><br>

  <input type="submit" name="" value="Continue">

</form>

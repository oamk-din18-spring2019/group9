<h2>Edit</h2>
<!--<?php print_r($owner); ?>-->

<form class="" action="<?php  echo site_url('owner/edit_owner'); ?>" method="post">
<label for="">ID</label> <br>
  <input type="hidden" name="id" value="<?php echo $owner[0]['owner_id']; ?>" > <br>
<label for="">Firstname</label><br>
<input type="text" name="owner_fname" value="<?php echo $owner[0]['owner_fname']; ?>"><br>
<label for="">Lastname</label><br>
<input type="text" name="owner_lname" value="<?php echo $owner[0]['owner_lname']; ?>"><br>
<label for="">phone</label> <br>
<input type="number" name="owner_phone" value="<?php echo $owner[0]['owner_phone']; ?>"> <br><br>
<label for="">birthday</label> <br>
<input type="date" name="owner_birthday" value="<?php echo $owner[0]['owner_birthday']; ?>"> <br><br>
<input type="submit" name="" value="Add">
</form>

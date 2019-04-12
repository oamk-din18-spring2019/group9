<h2>Edit</h2>
<!--<?php print_r($owner); ?>-->

<form class="" action="<?php  echo site_url('owner/edit_owner'); ?>" method="post">
<label for="">ID</label> <br>
  <input type="hidden" name="id" value="<?php echo $owner[0]['owner_id']; ?>" > <br>
<label for="">Firstname</label><br>
<input type="text" name="fn" value="<?php echo $owner[0]['owner_fname']; ?>"><br>
<label for="">Lastname</label><br>
<input type="text" name="ln" value="<?php echo $owner[0]['owner_lname']; ?>"><br>
<label for="">birthday</label> <br>
<input type="number" name="hr" value="<?php echo $owner[0]['owner_birthday']; ?>"> <br><br>
<input type="submit" name="" value="Add">
</form>

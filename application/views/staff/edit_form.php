<h2>Edit</h2>


<form class="" action="<?php  echo site_url('staff/edit_staff'); ?>" method="post">
<label for="">ID</label> <br>
  <input type="hidden" name="id" value="<?php echo $staff[0]['staff_id']; ?>" > <br>
<label for="">Firstname</label><br>
<input type="text" name="fn" value="<?php echo $staff[0]['staff_fname']; ?>"><br>
<label for="">Lastname</label><br>
<input type="text" name="ln" value="<?php echo $staff[0]['staff_lname']; ?>"><br>
<label for="">Hours</label> <br>
<input type="number" name="hr" value="<?php echo $staff[0]['staff_hours']; ?>"> <br><br>
<input type="submit" name="" value="Add">
</form>

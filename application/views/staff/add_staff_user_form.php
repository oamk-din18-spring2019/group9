
<h3>Add staff user</h3>

<p>
<form class="" action="<?php  echo site_url('staff/add_staff_user'); ?>" method="post">
<label for="">ID</label> <br>
<input type="hidden" name="staff_id" value="<?php echo $New_staff_id; ?>"> <br>
<label for="">Firstname</label><br>
<input type="text" name="staff_fname" value=""><br>
<label for="">Lastname</label><br>
<input type="text" name="staff_lname" value=""><br>
<label for="">Username</label> <br>
<input type="text" name="staff_username" value=""> <br>
<label for="">Password</label> <br>
<input type="text" name="staff_password" value=""> <br>
<label for="">Hours</label> <br>
<input type="number" name="staff_hours" value=""> <br><br>
<input type="submit" name="" value="Add">
</form>
</p>

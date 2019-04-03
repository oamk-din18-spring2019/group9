
<h3>Add staff user</h3>
<?php  echo site_url('staff/add_staff_user'); ?>
<p>
<form class="" action="<?php  echo site_url('staff/add_staff_user'); ?>" method="post">
<label for="">ID</label> <br>
<input type="text" name="staff_id" value=""> <br>
<label for="">Firstname</label><br>
<input type="text" name="staff_fname" value=""><br>
<label for="">Lastname</label><br>
<input type="text" name="staff_lname" value=""><br>
<label for="">Username</label> <br>
<input type="text" name="staff_username" value=""> <br>
<label for="">Password</label> <br>
<input type="text" name="staff_password" value=""> <br>
<label for="">Hours</label> <br>
<input type="number" name="staff_hours" value=""> <br>
<input type="submit" name="" value="Add">
</form>
</p>

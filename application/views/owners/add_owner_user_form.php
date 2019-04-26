<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/form.css');  ?>">
<center><h2 class="add">Create account</h2></center>

<p>
<form class="" action="<?php  echo site_url('owner/add_owner_user'); ?>" method="post">
<input type="hidden" name="owner_id" value="<?php echo $new_id; ?>"> <br>
<label for="">Firstname</label><br>
<input type="text" name="owner_fname" value=""><br>
<label for="">Lastname</label><br>
<input type="text" name="owner_lname" value=""><br>
<label for="">Phone number</label><br>
<input type="text" name="owner_phone" value=""><br>
<label for="">Username</label> <br>
<input type="text" name="owner_username" value=""> <br>
<label for="">Password</label> <br>
<input type="text" name="owner_password" value=""> <br>
<label for="">Date of birth</label> <br>
<input type="date" name="owner_birthday" value=""> <br><br>
<input type="submit" name="" value="Add">
</form>
</p>

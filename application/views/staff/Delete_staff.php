<h2>Delete staff</h2>
<p>
  Do you want to delete staff: <br>
</p>
<?php
?>
<ul>
  <li><?php echo $chosen_staff[0]['staff_fname']; ?></li>
  <li><?php echo $chosen_staff[0]['staff_lname']; ?></li>
</ul>
<a href="<?php echo site_url('staff/delete_staff/').$chosen_staff[0]['staff_id']; ?>"><button>DELETE</button></a>
<a href="<?php echo site_url('staff/show_staff'); ?>"><button>CANCEL</button></a>

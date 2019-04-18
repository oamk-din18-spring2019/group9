<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Delete extends CI_Controller {

public function delete_user() {
  $id = $_GET['id'];

  $sql = "DELETE FROM staff WHERE staff_id=:'$id'";
  $query = $dbConn->prepare($sql);
  $query->execute(array(':id' => $id));

  redirect('staff/show_staff');
  header("Location:form.php");
}

}
?>

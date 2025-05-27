<?php
include "../model/mydb.php";

$data = json_decode(file_get_contents("php://input"), true);

if ($data && isset($data['email'])) {
  $email = $data['email'];

  $db = new mydb();
  $conn = $db->createConObject();
  $result = $db->deleteUser($conn,$email);

  echo $result ? "User deleted successfully!" : "Error deleting user!";
  $db->closeCon($conn);
}
?>

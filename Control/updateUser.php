<?php
require_once("../model/mydb.php");

$data = json_decode(file_get_contents("php://input"), true);

if ($data) {
  $fullName = $data['fullName'];
  $email = $data['email'];
  $phone = $data['phone'];
  $gender = $data['gender'];
  $password = $data['password'];

  $db = new mydb();
  $conn = $db->createConObject();
  $result = $db->updateUser($conn, $fullName, $email, $phone, $gender, $password);

  echo $result ? "User updated successfully!" : "Error updating user!";
  $db->closeCon($conn);
}
?>

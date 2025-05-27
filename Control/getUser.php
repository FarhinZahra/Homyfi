<?php
include "../model/mydb.php";

$db = new mydb();
$conn = $db->createConObject();

$result = $db->getAllUsers($conn);
$users = [];

if ($result && $result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $users[] = $row;
  }
}

echo json_encode($users);
$db->closeCon($conn);
?>

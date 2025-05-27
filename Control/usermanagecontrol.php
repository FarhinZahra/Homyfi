<?php
include '../model/mydb.php'; 
$action = $_POST['action'] ?? '';

$db = new mydb();           
$conn = $db->createConObject(); 

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $query = "SELECT * FROM userstable";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        http_response_code(500);
        echo json_encode(["error" => "Query failed: " . mysqli_error($conn)]);
        exit;
    }

    $users = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }

    header('Content-Type: application/json');
    echo json_encode($users);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($action === 'add') {
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        $nidPath = "../images/" . time() . $_FILES["nid"]["name"];
        move_uploaded_file($_FILES["nid"]["tmp_name"], $nidPath);

        $insertResult = $db->insertUserData($conn, $fullName, $email, $phone, $gender, $password, $nidPath, $role);

        if ($insertResult === true) {
            echo "User added successfully";
        } else {
            http_response_code(500);
            echo "Insert failed: " . $insertResult;
        }

    } elseif ($action === 'update') {
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];

        $updateResult = $db->updateUser($conn, $fullName, $email, $phone, $gender, $password);

        if ($updateResult === true) {
            echo "User updated successfully";
        } else {
            http_response_code(500);
            echo "Update failed";
        }
    }
    elseif ($action === 'delete') {
        $email = $_POST['email'];

        $deleteResult = $db->deleteUser($conn, $email);

        if ($deleteResult === true) {
            echo "User deleted successfully";
        } else {
            http_response_code(500);
            echo "Delete failed";
        }
    }
}
?>

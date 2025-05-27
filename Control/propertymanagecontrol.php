
<?php
include '../model/mydb.php'; 
$action = $_POST['action'] ?? '';

$db = new mydb();           
$conn = $db->createConObject(); 

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $query = "SELECT * FROM propertyinfo";
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
        $catogory = $_POST['catogory'];
        $propertytype = $_POST['propertytype'];
        $updatedate = $_POST['updatedate'];
        $availablefrom = $_POST['availablefrom'];

        $propertyImage = "../images/" . time() . $_FILES["propertyImage"]["name"];
        move_uploaded_file($_FILES["propertyImage"]["tmp_name"], $propertyImage);

        $insertResult = $db->insertPropertyData($conn, $catogory, $propertytype, $updatedate, $availablefrom, $propertyImage);

        if ($insertResult === true) {
            echo "Property added successfully";
        } else {
            http_response_code(500);
            echo "Insert failed: " . $insertResult;
        }

    } elseif ($action === 'update') {
        $propertyid = $_POST['propertyid'];
        $catogory = $_POST['catogory'];
        $propertytype = $_POST['propertytype'];
        $updatedate = $_POST['updatedate'];
        $updatedate = $_POST['availablefrom'];

        $updateResult = $db->updatePropertyData($conn, $propertyid, $catogory, $propertytype, $updatedate, $updatedate);

        if ($updateResult === true) {
            echo "Property updated successfully";
        } else {
            http_response_code(500);
            echo "Update failed";
        }
    }
    elseif ($action === 'delete') {
        $propertyid = $_POST['propertyid'];

        $deleteResult = $db->deletePropertyData($conn, $propertyid);

        if ($deleteResult === true) {
            echo "Property deleted successfully";
        } else {
            http_response_code(500);
            echo "Delete failed";
        }
    }
}
?>

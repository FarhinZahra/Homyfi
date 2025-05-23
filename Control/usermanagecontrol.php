<?php
include '../model/mydb.php'; 

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
?>

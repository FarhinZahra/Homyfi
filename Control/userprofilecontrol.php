<?php
session_start();
include '../model/mydb.php';


$email = isset($_GET['email']) ? $_GET['email'] : (isset($_SESSION['email']) ? $_SESSION['email'] : '');


$mydb= new mydb();
$conn = $mydb->createConObject();
$data= $mydb->showDataByEmail($conn,$email);

if($data->num_rows > 0){
    foreach($data as $row){
     $id=$row["id"];          
     $fullName=$row["fullName"];
      $email =$row["email"];
      $phone =$row["phone"];  
      $gender=$row["gender"]; 
      $password=$row["password"]; 
       $role=$row["role"];
     
    }
}

    else{
        echo "no data found";
    }
if(isset($_POST["update"])){
    $mydb= new mydb();
$conn = $mydb->createConObject();
$updatedFullName = $_POST["fullName"];
$updatedPhone = $_POST["phone"];
$updatedGender = $_POST["gender"];
$updatedPassword = $_POST["password"];
$updatedEmail = $_SESSION["email"]; // Assuming session has email

$data= $mydb->updateUser($conn, $updatedFullName, $updatedEmail, $updatedPhone, $updatedGender, $updatedPassword);


if($data===TRUE) {
echo "updated";
}
else{
    echo "not updated";
}

}



?>
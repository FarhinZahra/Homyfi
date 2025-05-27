<?php

class mydb{
public  $DBHostName="";
public $DBUserName="";
public $DBPassword="";
public $DBName="";
function __construct(){
 $this->DBHostName="localhost";
 $this->DBUserName="root";
 $this->DBPassword="";
 $this->DBName="homyfi_";
}

function createConObject(){
    return new mysqli($this->DBHostName, $this->DBUserName, $this->DBPassword, 
    $this->DBName);
}

function insertUserData($conn,$fullName,$email,$phone,$gender, $password, $NID, $role){
$qrystring="INSERT INTO userstable (fullName,email, phone,gender,password,NID,role) 
VALUES ('$fullName','$email','$phone','$gender', '$password', '$NID','$role')";
$result = $conn->query($qrystring);
if($result === false)
{
    return $conn->error;
}
else{
    return $result;
}
}
 function getAllUsers($conn) {
    $sql = "SELECT * FROM userstable";
    return $conn->query($sql);
}

public function deleteUser($conn, $email) {
    $sql = "DELETE FROM userstable WHERE email = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        return false;
    }

    $stmt->bind_param("s", $email);
    return $stmt->execute();
}

function showDataByEmail($conn,$email){
    $qrystring="SELECT * FROM userstable WHERE email = '$email'";
    $result= $conn->query($qrystring);
    return $result;
}
function updateUser($conn, $fullName, $email, $phone, $gender, $password) {
    $qrystring = "UPDATE userstable 
                  SET fullName='$fullName', 
                      phone='$phone', 
                      gender='$gender', 
                      password='$password' 
                     
                  WHERE email='$email'";
    $result = $conn->query($qrystring);
    return $result;
}

function createUser($conn,$table, $name, $email, $password){
    $querystring="INSERT INTO $table (name,email, password) VALUES ('$name','$email', '$password')";
    $result=$conn->query($querystring);
    return $result;
}


function login($conn,$email){
    $querystring="SELECT * FROM userstable WHERE email = '$email'";
    $result=$conn->query($querystring);
    return $result;
}

function closeCon($conn)
{
 $conn->close();
}

}




?>
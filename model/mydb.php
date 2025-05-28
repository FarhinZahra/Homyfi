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

// Insert Property
function insertPropertyData($conn, $catogory, $propertytype, $updatedat, $availablefrom, $propertyImage) {
    $query = "INSERT INTO propertyinfo (propertyimage, catogory, propertytype, updatedat, availablefrom)
              VALUES (?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($query);
    if (!$stmt) {
        return $conn->error;
    }

    $stmt->bind_param("sssss", $propertyImage, $catogory, $propertytype, $updatedat, $availablefrom);
    return $stmt->execute();
}

// Update Property
function updatePropertyData($conn, $propertyid, $catogory, $propertytype, $updatedat, $availablefrom) {
    $query = "UPDATE propertyinfo 
              SET catogory = ?, propertytype = ?, updatedat = ?, availablefrom = ?
              WHERE propertyid = ?";
    
    $stmt = $conn->prepare($query);
    if (!$stmt) {
        return $conn->error;
    }

    $stmt->bind_param("ssssi", $catogory, $propertytype, $updatedat, $availablefrom, $propertyid);
    return $stmt->execute();
}

// Delete Property
function deletePropertyData($conn, $propertyid) {
    $query = "DELETE FROM propertyinfo WHERE propertyid = ?";
    
    $stmt = $conn->prepare($query);
    if (!$stmt) {
        return $conn->error;
    }

    $stmt->bind_param("i", $propertyid);
    return $stmt->execute();
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

function checkuser($conn,$email){
    $querystring="SELECT * FROM userstable WHERE email = '$email'";
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
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

function insertUserData($conn,$fullName,$email,$phone,$gender, $password, $NID){
$qrystring="INSERT INTO userstable (fullName,email, phone,gender,password,NID,role) 
VALUES ('$fullName','$email','$phone','$gender', '$password', '$NID','Customer')";
$result = $conn->query($qrystring);
if($result === false)
{
    return $conn->error;
}
else{
    return $result;
}
}
function showOrderById($conn,$table,$orderid){
    $qrystring="SELECT * FROM $table WHERE id = '$orderid'";
    $result= $conn->query($qrystring);
    return $result;
}
function updateOrder($conn,$table,$orderid,$quantity){
  
    $qrystring="UPDATE $table SET quantity = '$quantity' WHERE id='$orderid'";
    $result= $conn->query($qrystring);
    return $result;
}
function createUser($conn,$table, $name, $email, $password){
    $querystring="INSERT INTO $table (name,email, password) VALUES ('$name','$email', '$password')";
    $result=$conn->query($querystring);
    return $result;
}
function login($conn,$table,$email){
    $querystring="SELECT * FROM $table WHERE email = '$email'";
    $result=$conn->query($querystring);
    return $result;
}



function closeCon($conn)
{
 $conn->close();
}

}




?>
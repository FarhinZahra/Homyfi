<?php
session_start();
include '../model/mydb.php';
$haserror=false;
$emailErr=$passErr="";
if(isset($_POST["login"])){
    $emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    $email = $_POST["email"];
    $password = $_POST["password"];
if (strlen($password) < 8) {
      $passErr= "* Password must be at least 8 characters.";
      $haserror = true;
    }

 if (!preg_match($emailPattern, $email)) {
      $emailErr = "* Valid email is required.";
      $haserror = true;
    }
    if($haserror==true)
    {
      echo "Sorry, there was an error in login .";
    }
    else
    { 
    $mydb= new mydb();
     $conn = $mydb->createConObject();
    $result = $mydb->login($conn,$email);
     if($result->num_rows > 0){
        $data=$result->fetch_assoc();
       // if(password_verify($password,$data["password"])){
       if($password == $data["password"])
    {
       $_SESSION["email"] = $email;
       header("Location: ../view/admindashboard.php");
        }
        else{
            echo "wrong password";
        }
    }
    else{
        echo "user not found";
    }
}
}

?>
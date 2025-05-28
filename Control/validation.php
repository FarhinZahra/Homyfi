<?php
include '../model/mydb.php';
$haserror=false;

$fullNameErr=$dobErr=$AmenitiesErr=$genderErr=$roleError=
$cityErr=$phoneErr=$emailErr=$passErr=$confirmPassErr=$fileErr="";

if(isset($_POST["submit"]))
{
  $fullName = isset($_POST['fullName']) ? trim($_POST['fullName']) : '';
  $gender = isset($_POST['gender']) ? trim($_POST['gender']) : '';
  $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
  $email = isset($_POST['email']) ? trim($_POST['email']) : '';
  $password = isset($_POST['password']) ? $_POST['password'] : '';
  $role = isset($_POST['role']) ? trim($_POST['role']) : '';

  $confirmPass = isset($_POST['confirmPass']) ? $_POST['confirmPass'] : '';

  $emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
  $phonePattern = "/^[0-9]{11}$/";

    if (empty($_POST["fullName"])) {
      $fullNameErr  = "Name is required";
      $haserror = true;
    } 
    if (empty($_POST["gender"])) {
      $genderErr= "gender is required";
      $haserror = true;
    }
    if (strlen($password) < 8) {
      $passErr= "* Password must be at least 8 characters.";
      $haserror = true;
    }

    if ($password !== $confirmPass) {
      $confirmPassErr = "* Passwords do not match.";
      $haserror = true;
    }
    
    if (!preg_match($emailPattern, $email)) {
      $emailErr = "* Valid email is required.";
      $haserror = true;
    }

    if (!preg_match($phonePattern, $phone)) {
    $phoneErr= "* Phone number must be 11 digits.";
    $haserror = true;
    }
    if (empty($_FILES["uploadFile"]["name"])) {
    $fileErr = "NID proof upload is required";
    $haserror = true;
    }

    if($haserror==true)
    {
      echo "Sorry, there was an error in submiting .";
    }
    else
    { 
      $NID="../images/".time().$_FILES["uploadFile"]["name"];

      $mydb= new mydb();
      $conn = $mydb->createConObject();
      $userexist = $mydb->checkuser($conn, $email);
      if($userexist->num_rows > 0)
      {
          echo "user already existed by email";
      }
      else{
            
            $result = $mydb->insertUserData($conn,$fullName,$email,$phone,$gender,$password, $NID, $role);
            if($result === false){
                echo "error occured while creating user";
            }
            else{
              $isupload= move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $NID);
          
            if ($isupload) 
            {
              echo "The file ". basename( $_FILES["uploadFile"]["name"]). " has been uploaded.";
            } 
            else {
              echo "Sorry, there was an error uploading your file.";
            }
                echo "user created successfully";
            }
      }
      $mydb->closeCon($conn);
    }
    

   


}
  ?>
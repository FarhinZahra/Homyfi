

<?php


include '../model/mydb.php';
$haserror=0;

$fullNameErr=$dobErr=$AmenitiesErr=$genderErr=
$cityErr=$phoneErr=$emailErr=$passErr=$confirmPassErr=$fileErr="";

if(isset($_POST["submit"]))
{
  $fullName = isset($_POST['fullName']) ? trim($_POST['fullName']) : '';
  $gender = isset($_POST['gender']) ? trim($_POST['gender']) : '';
  $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
  $email = isset($_POST['email']) ? trim($_POST['email']) : '';
  $password = isset($_POST['pass']) ? $_POST['pass'] : '';
  $confirmPass = isset($_POST['confirmPass']) ? $_POST['confirmPass'] : '';

  $emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
  $phonePattern = "/^[0-9]{11}$/";

    if (empty($_POST["fullName"])) {
      $fullNameErr  = "Name is required";
      $haserror = 1;
    } 
    if (empty($_POST["gender"])) {
      $genderErr= "gender is required";
      $haserror = 1;
    }
    if (strlen($password) < 8) {
      $passErr= "* Password must be at least 8 characters.";
      $haserror = 1;
    }

    if ($password !== $confirmPass) {
      $confirmPassErr = "* Passwords do not match.";
      $haserror = 1;
    }
    
    if (!preg_match($emailPattern, $email)) {
      $emailErr = "* Valid email is required.";
      $haserror = 1;
    }

    if (!preg_match($phonePattern, $phone)) {
    $phoneErr= "* Phone number must be 11 digits.";
    $haserror = 1;
    }
    if (empty($_FILES["uploadFile"]["name"])) {
    $fileErr = "NID proof upload is required";
    $haserror = 1;
    }
    else {
      echo "<h3>Tenant Request Submitted Successfully!</h3>";
      echo "<h3>Thank you, $fullName!</h3><br>";
    }

    if($haserror==0)
    {
      $NID = $_FILES['uploadFile']['name'];

      if (!file_exists("../images")) 
      {
          mkdir("../images", 0777, true);
      }
      
      move_uploaded_file($_FILES['uploadFile']['tmp_name'], "../images/" . $NID);

      if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $NID)) 
      {
        echo "The file ". basename( $_FILES["uploadFile"]["name"]). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
          
      $mydb= new mydb();
      $conn = $mydb->createConObject();
      $result = $mydb->insertUserData($conn,$fullName,$email,$phone,$gender, $password, $NID);
      if($result === false){
          echo "error occured while creating user";
      }
      else{
          echo "user created successfully";
      }
      $mydb->closeCon($conn);
        
    }
    

}
  ?>
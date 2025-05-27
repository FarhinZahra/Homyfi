<?php



$firstNameErr=$lastNameErr=$genderErr=$termsAgreedErr=$propertyTypeErr=$phoneErr=$emailErr
=$passErr=$confirmPassErr=$fileErr=$property_descriptionErr="";

if(isset($_POST["submit"])){

 $firstName = isset($_POST['firstName']) ? trim($_POST['firstName']) : '';
 $lastName = isset($_POST['lastName']) ? trim($_POST['lastName']) : '';
$gender = isset($_POST['gender']) ? trim($_POST['gender']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$password = isset($_POST['pass']) ? $_POST['pass'] : '';
$termsAgreed= isset($_POST['termsAgreed']) ? $_POST['termsAgreed'] : []; // array of values
$propertyType = isset($_POST['propertyType']) ? trim($_POST['propertyType']) : '';
$property_description=isset($_POST['property_description']) ? trim($_POST['property_description']) : '';
$confirmPass = isset($_POST['confirmPass']) ? $_POST['confirmPass'] : '';

$emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
 $phonePattern = "/^[0-9]{11}$/";


    if (empty($_POST["firstName"])) {
      $firstNameErr  = "Name is required";
    } 

    if (empty($_POST["lastName"])) {
      $lastNameErr = "lastName is required";
    }

    if (empty($_POST["dob"])) {
      $dobErr= "Move in date  is required";
    }

    if (empty($_POST["gender"])) {
      $genderErr= "gender is required";
    }
    if (strlen($password) < 8) {
      $passErr= "* Password must be at least 8 characters.";
  }

  if ($password !== $confirmPass) {
      $confirmPassErr = "* Passwords do not match.";
  }
    if (empty($_POST["termsAgreed"])) {
      $termsAgreedErr= "termsAgreed is required";
    }

    if (empty($_POST["propertyType"])) {
      $propertyTypeErr  = "property Type is required";
    }
    if (!preg_match($emailPattern, $email)) {
      $emailErr = "* Valid email is required.";
  }

  if (!preg_match($phonePattern, $phone)) {
    $phoneErr= "* Phone number must be 11 digits.";
}

else {
  echo "<h3>Landlord Request Submitted Successfully!</h3>";
  echo "<h3>Thank you, $firstName!</h3><br>";
}
   
}

  ?>
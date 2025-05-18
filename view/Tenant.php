<?php
include '../control/validation.php';
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Tenant Validation</title>
    <link rel="stylesheet" href="../css/farhin.css" />
  </head>
  <body>
  <div class="roof-container">
  <div class="roof"></div>
  <div class="roof-text">
    <h2>HomyFi - Tenant Registration</h2>
    <h3>Find Your Perfect Home</h3>
  </div>
</div>
</form>

    <form action=" " method="post" enctype="multipart/form-data" >
      <table>
      <tr>
            <td colspan="2"><h3>-----------------------Personal Details-----------------------</h3></td>
      </tr>
        <tr>
          <td><label for="firstName">First Name</label></td>
          <td><input type="text" name="firstName" id="firstName"></td>
          <td><?php echo  $firstNameErr; ?></td>
        </tr>
        <tr>
          <td><label for="lastName">Last Name</label></td>
          <td><input type="text" name="lastName" id="lastName"></td>
          <td><?php echo  $lastNameErr; ?></td>
        </tr>
        <tr>
          <td><label for="email">Email</label></td>
          <td><input type="email" name="email" id="email"></td>
          <td><?php echo  $emailErr; ?></td>
        </tr>
        <tr>
          <td><label for="phone">Phone</label></td>
          <td><input type="text" name="phone" id="phone"></td>
          <td><?php echo  $phoneErr; ?></td>
        </tr>
       
        <tr>
          <td><label for="gender">Gender</label></td>
          <td>
            <input type="radio" name="gender" value="Male" id="male"> Male
            <input type="radio" name="gender" value="Female" id="female"> Female
          </td>
          <td><?php echo  $genderErr; ?></td>
        </tr>
        <tr>
          <td><label for="pass">Password</label></td>
          <td><input type="password" name="pass" id="pass"></td>
          <td><?php echo  $passErr; ?></td>
        </tr>
        <tr>
          <td><label for="confirmPass">Confirm Password</label></td>
          <td><input type="password" name="confirmPass" id="confirmPass"></td>
          <td><?php echo  $confirmPassErr; ?></td>
        </tr>
        <tr>
          <td><label for="uploadFile">Upload NID File</label></td>
          <td><input type="file" name="uploadFile" id="uploadFile" /></td>
          <td><?php echo  $fileErr; ?></td>
        </tr>
        <tr>
            <td colspan="2"><h3>-----------------------Housing Preferences-----------------------</h3></td>
        </tr>
        
        <tr>
          <td><label for="city">City</label></td>
          <td>
            <select name="city" id="city">
              <option value="">Select City</option>
              <option value="New York">New York</option>
              <option value="London">London</option>
              <option value="Tokyo">Tokyo</option>
              <option value="Mumbai">Mumbai</option>
            </select>
          </td>
          <td><?php echo  $cityErr; ?></td>
        </tr>
        <tr>
            <td><label for="rentalType">Rental Type:</label></td>
                    <td>
                        <select name="rental_type" >
                            <option value="">Select Type</option>
                            <option value="apartment">Apartment</option>
                            <option value="house">House</option>
                            <option value="shared">Shared Room</option>
                            <option value="studio">Studio</option>
                        </select>
                    </td>
                </tr>
                <tr>
          <td><label>Amenities Needed:</label></td>
          <td>
            <input type="checkbox" name="Amenities" value="Parking" id="parking"> Parking
            <input type="checkbox" name="Amenities" value="Wifi" id="wifi"> Wifi
            <input type="checkbox" name="Amenities" value="Ac" id="ac">AC 
          </td>
          <td><?php echo  $AmenitiesErr; ?></td>
        </tr>
        <tr>
            <td><label for="budgetRange">Budget Range (BDT):</label></td>
                    <td>
                        <select name="budget_range" id="budget_range" >
                            <option value="">Select Budget</option>
                            <option value="5000-10000">5,000 - 10,000</option>
                            <option value="10000-20000">10,000 - 20,000</option>
                            <option value="20000-30000">20,000 - 30,000</option>
                            <option value="30000+">30,000+</option>
                        </select>
                    </td>
                    <td><? php echo $budgetErr ?></td>
                </tr>
                <tr>
          <td><label for="dob">Move in Date</label></td>
          <td><input type="date" name="dob" id="dob"></td>
          <td><?php echo  $dobErr; ?></td>
        </tr> 
        
        <tr>
            <td><label for="specialRequirements">Special Requirements:</label></td>
             <td><textarea name="special_requirements" rows="3" cols="30" placeholder="Pets, accessibility needs, etc."></textarea></td>
         </tr>
                
        <tr>
          <td colspan="2" style="text-align: center">
            <button type="submit" id="button1">Submit</button>
          </td>
        </tr>
      </table>
    </form>
   <script src="../script.js"></script> 
  </body>
</html>




<?php

include '../model/mydb.php';

$fullNameErr=$dobErr=$AmenitiesErr=$genderErr=
$cityErr=$phoneErr=$emailErr=$passErr=$confirmPassErr=$fileErr="";

if(isset($_POST["register"])){

    $fullName = isset($_POST['fullName']) ? trim($_POST['fullName']) : '';
$gender = isset($_POST['gender']) ? trim($_POST['gender']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$password = isset($_POST['pass']) ? $_POST['pass'] : '';
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
    if (empty($_POST["Amenities"])) {
      $AmenitiesErr= "Amenities is required";
    }

    if (empty($_POST["city"])) {
      $cityErr  = "city is required";
    }
    if (!preg_match($emailPattern, $email)) {
      $emailErr = "* Valid email is required.";
  }

  if (!preg_match($phonePattern, $phone)) {
    $phoneErr= "* Phone number must be 11 digits.";
}
if (empty($_FILES["uploadFile"]["name"])) {
  $fileErr = "NID proof upload is required";
}
else {
  echo "<h3>Tenant Request Submitted Successfully!</h3>";
  echo "<h3>Thank you, $firstName!</h3><br>";
}
    $mydb= new mydb();
    $conobj = $mydb->createConObject();
    $result = $mydb->insertUserData($conn,$userstable,$fullName,$email,$phone,$gender, $password, $filename);
    if($result === false){
        echo "error occured while creating user";
    }
    else{
        echo "user created successfully";
    }
    $mydb->closeCon($conobj);

}




  ?>
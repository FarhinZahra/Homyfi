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
          <td><label for="fullName">Full-Name</label></td>
          <td><input type="text" name="fullName" id="fullName"></td>
          <td><span><?php echo  $fullNameErr; ?></span></td>
        </tr>
        
        <tr>
          <td><label for="email">Email</label></td>
          <td><input type="email" name="email" id="email"></td>
          <td><span><?php echo  $emailErr; ?></span></td>
        </tr>
        <tr>
          <td><label for="phone">Phone</label></td>
          <td><input type="text" name="phone" id="phone"></td>
          <td><span><?php echo  $phoneErr; ?></span></td>
        </tr>
       
        <tr>
          <td><label for="gender">Gender</label></td>
          <td>
            <input type="radio" name="gender" value="Male" id="male"> Male
            <input type="radio" name="gender" value="Female" id="female"> Female
          </td>
          <td><span><?php echo  $genderErr; ?></span></td>
        </tr>
        <tr>
          <td><label for="password">Password</label></td>
          <td><input type="password" name="password" id="password"></td>
          <td><span><?php echo  $passErr; ?></span></td>
        </tr>
        <tr>
          <td><label for="confirmPass">Confirm Password</label></td>
          <td><input type="password" name="confirmPass" id="confirmPass"></td>
          <td><span><?php echo  $confirmPassErr; ?></span></td>
        </tr>
        <tr>
          <td><label for="uploadFile">Upload NID File</label></td>
          <td><input type="file" name="uploadFile" id="uploadFile" /></td>
          <td><span><span><?php echo  $fileErr; ?></span></td>
        </tr>
        <tr>
          <td colspan="2" style="text-align: center">
            <input type="submit" name="submit" id="button1">
          </td>
        </tr>
      </table>
    </form>
   <script src="../script.js"></script> 
  </body>
</html>

<?php
include '../control/userprofilecontrol.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Profile</title>
  <link rel="stylesheet" href="../css/profile.css" />
 
</head>
<body>

  <div class="profile-container">
    <h2>👤 USER PROFILE</h2>
    <form action="" method="post">
      <table>
        <tr>
          <td><label>User ID:</label></td>
          <td><input type="text" name="id"  value="<?php echo $id; ?>"  readonly></td>
          <td><label>Email:</label></td>
          <td><input type="email" id="email" name="email" value=<?php echo $_SESSION["email"];?> readonly></td>
        </tr>
        <tr>
          <td><label>User Name:</label></td>
          <td><input type="text" name="fullName"value="<?php echo $fullName; ?>" ></td>
          <td><label>Phone No:</label></td>
          <td><input type="text" name="phone"value="<?php echo $phone; ?>"></td>
        </tr>
        <tr>
          <td><label>Password:</label></td>
          <td><input type="text" name="password" value="<?php echo $password; ?>"></td>
          <td><label>Gender:</label></td>
          <td> <input type="text" name="gender"  value="<?php echo $gender; ?>"></td>
           
        </tr>
        <tr>
          <td><label>User NID:</label></td>
          <td><input type="file" name="uploadFile"></td>
          <td><label>User Role:</label></td>
          <td><input type="text" name="role" value="<?php echo $role; ?>"readonly></td>
        </tr>
       
        <tr>
          <td colspan="4" style="text-align: center;">
            <input type="submit" name="update" value="Update" class="update-button">
          </td>
        </tr>
      </table>
    </form>
  </div>

  
</body>
</html>

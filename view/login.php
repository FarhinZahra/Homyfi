
<?php
include '../control/userlogin.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Tenant Validation</title>
     <link rel="stylesheet" href="../css/farhin.css" /> 
  </head>
  <body>
 
  

    <div class="overlay">
    <form action=" " method="post"  >
      <table>
        <tr>
            <td colspan="2"><h3>--Please login--</h3></td>
      </tr>

      <tr>
          <td><label for="email">Email</label></td>
          <td><input type="email" name="email" id="email"></td>
          <td><span><?php echo  $emailErr; ?></span></td>
        </tr>

        <tr>
          <td><label for="password">Password</label></td>
          <td><input type="password" name="password" id="password"></td>
          <td><span><?php echo  $passErr; ?></span></td>
        </tr>

         <tr>
          <td colspan="2" style="text-align: center">
           <input type="submit" name="login" value="Login">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
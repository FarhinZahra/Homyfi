<?php
include '../control/validlandlord.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Landlord Registration | HomyFi</title>
    <link rel="stylesheet" type="text/css" href="../css/prious.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <center>
        <h2>HomyFi - Landlord Portal</h2>
        <h3>Register Your Property</h3>
        
        <form  action="" method="POST">
     <table>
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
                    <td colspan="2">
                        <select name="property_type" id="propertyType" >
                            <option value="" disabled selected>Select Property Type</option>
                            <option value="apartment">Apartment</option>
                            <option value="house">House</option>
                            <option value="condo">Condo</option>
                            <option value="townhouse">Townhouse</option>
                            <option value="villa">Villa</option>
                        </select>
                    </td>
                      <td><?php echo  $propertyTypeErr; ?></td>
                </tr>
                <tr>
                    <td colspan="2"><input id="txtPropAdd" type="text" name="property_address" placeholder="Property Full Address" ></td>
                </tr>
                <tr>
                    <td><input type="number" name="total_units" id="totalUnits" placeholder="Total Units Available" min="1" ></td>
                    <td><input type="number" name="bedrooms" id="bedrooms" placeholder="Bedrooms per Unit" min="1" ></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <textarea name="property_description" id="property_description" placeholder="Describe your property (amenities, features, etc.)" rows="3" ></textarea>
                    </td>
                     <td><?php echo  $property_descriptionErr; ?></td>
                </tr>
                
                
                <tr>
                    <td colspan="2">
                        <div class="special-container">
                            <h4>Terms and Conditions</h4>
                            <p>By registering as a landlord, you agree to:</p>
                            <ul>
                                <li>Provide accurate property information</li>
                                <li>Maintain proper licenses and permits</li>
                                <li>Comply with all local housing laws</li>
                                <li>Respond to tenant inquiries within 48 hours</li>
                                <li>Maintain the property in habitable condition</li>
                                <li>Honor the rental terms agreed with tenants</li>
                                <li>Pay HomyFi's service fee as outlined in our agreement</li>
                                <li>Give proper notice for any rent increases</li>
                                <li>Follow proper eviction procedures if needed</li>
                            </ul>
                            <p>Full terms available at www.homyfi.com/terms</p>
                        </div>
                        <label>
                            <input type="checkbox" name="terms_agreed" id="termsAgreed" > I agree to the Terms of Service and Privacy Policy
                        </label>
                    </td>
                    <td><?php echo  $termsAgreedErr; ?></td>
                </tr>
                <tr>
                     <td colspan="2" style="text-align: center">
              <input type="submit" name="submit" id="button1">
               </td>
                </tr>
            </table>
        </form>
        <script src="../JSS/validateform.js"></script>
    </center>
</body>
</html>
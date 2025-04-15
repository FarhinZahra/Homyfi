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
        
        <form  action="/form.php" method="POST">
            <table>
                <tr>
                    <td colspan="2"><h4>Personal Information</h4></td>
                    <td id = "error" colspan="2"><h4>Error Message </h4></td>
                </tr>
                <tr>
                    <td><input id="txtFname" type="text" name="first_name" placeholder="First Name" ></td>
                    <td><input id="txtLname" type="text" name="last_name" placeholder="Last Name" ></td>
                </tr>
                <tr>
                    <td colspan="2"><input id="txtEmail" type="email" name="email" placeholder="Email Address" ></td>
                </tr>
                <tr>
                    <td><input id="txtPass" type="password" name="password" placeholder="Create Password"  minlength="8"></td>
                    <td><input id="txtConfirmPass" type="password" name="confirm_password" placeholder="Confirm Password" ></td>
                </tr>
                <tr>
                    <td colspan="2"><input id="txtPhone" type="tel" name="phone" placeholder="Phone Number" pattern="[0-9]{10}" ></td>
                </tr>
                
                <tr>
                    <td colspan="2"><h4>Property Details</h4></td>
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
                        <textarea name="property_description" id="propertyDescription" placeholder="Describe your property (amenities, features, etc.)" rows="3" ></textarea>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2"><h4>Business Information</h4></td>
                </tr>
                <tr>
                    <td colspan="2"><input id="txtCompanyName" type="text" name="company_name" placeholder="Company Name (if applicable)"></td>
                </tr>
                <tr>
                    <td colspan="2"><input id="txtTAXNum" type="text" name="tax_id" placeholder="Tax Identification Number" ></td>
                </tr>
                <tr>
                    <td colspan="2"><input id="txtLincenseNum" type="text" name="license_number" placeholder="Rental License Number" ></td>
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
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button    onclick="validateForm()" type="submit">Register as Landlord</button>
                        <!-- onclick="validateForm()" -->
                    </td>
                </tr>
            </table>
        </form>
        <script src="../JSS/validateform.js"></script>
    </center>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Landlord Registration | HomyFi</title>
    <link rel="stylesheet" type="text/css" href="../css/prious.css">
</head>
<body>
    <center>
        <h2>HomyFi - Landlord Portal</h2>
        <h3>Register Your Property</h3>
        
        <form action="form.php" method="POST">
            <table>
                <tr>
                    <td colspan="2"><h4>Personal Information</h4></td>
                </tr>
                <tr>
                    <td><input type="text" name="first_name" placeholder="First Name" required></td>
                    <td><input type="text" name="last_name" placeholder="Last Name" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="email" name="email" placeholder="Email Address" required></td>
                </tr>
                <tr>
                    <td><input type="password" name="password" placeholder="Create Password" required></td>
                    <td><input type="password" name="confirm_password" placeholder="Confirm Password" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="tel" name="phone" placeholder="Phone Number" pattern="[0-9]{10}" required></td>
                </tr>
                
                <tr>
                    <td colspan="2"><h4>Property Details</h4></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <select name="property_type" required>
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
                    <td colspan="2"><input type="text" name="property_address" placeholder="Property Full Address" required></td>
                </tr>
                <tr>
                    <td><input type="number" name="total_units" placeholder="Total Units Available" min="1"></td>
                    <td><input type="number" name="bedrooms" placeholder="Bedrooms per Unit" min="1"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <textarea name="property_description" placeholder="Describe your property (amenities, features, etc.)" rows="3"></textarea>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2"><h4>Business Information</h4></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="company_name" placeholder="Company Name (if applicable)"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="tax_id" placeholder="Tax Identification Number"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="license_number" placeholder="Rental License Number" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label>
                            <input type="checkbox" name="terms_agreed" required> I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">Register as Landlord</button>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
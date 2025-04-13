<!DOCTYPE HTML>
<html>
<head>
    <title>Tenant Register | HomyFi</title>
    <link rel="stylesheet"  href="../css/farhin.css">
</head>
<body>
    <center>
        <h2>HomyFi - Tenant Registration</h2>
        <h3>Find Your Perfect Home</h3>
        
        <form action="form.php" method="post" onsubmit="return validateTenantForm()" >
            <table>
                <tr>
                    <td colspan="2"><strong>Personal Details</strong></td>
                </tr>
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" autofocus></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" ></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" ></td>
                </tr>
                <tr>
                    <td>Confirm Password:</td>
                    <td><input type="password" name="confirm_password" ></td>
                </tr>
                <tr>
                    <td>Contact Number:</td>
                    <td><input type="text" name="contact_number" placeholder="+8801XXXXXXXXX" ></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="gender" value="male" > Male
                        <input type="radio" name="gender" value="female"> Female
                        <input type="radio" name="gender" value="other"> Other
                    </td>
                </tr>
                <tr>
                    <td>National ID:</td>
                    <td><input type="text" name="national_id" ></td>
                </tr>
                <tr>
                    <td>Upload ID Proof:</td>
                    <td><input type="file" name="id_proof" accept=".jpg, .png, .pdf" ></td>
                </tr>
                
                <tr>
                    <td colspan="2"><strong>Housing Preferences</strong></td>
                </tr>
                <tr>
                    <td>Preferred Location:</td>
                    <td>
                        <input type="text" name="preferred_location" list="locations" >
                        <datalist id="locations">
                            <option value="Dhaka">
                            <option value="Chittagong">
                            <option value="Sylhet">
                            <option value="Khulna">
                            <option value="Rajshahi">
                        </datalist>
                    </td>
                </tr>
                <tr>
                    <td>Budget Range (BDT):</td>
                    <td>
                        <select name="budget_range" >
                            <option value="">Select Budget</option>
                            <option value="5000-10000">5,000 - 10,000</option>
                            <option value="10000-20000">10,000 - 20,000</option>
                            <option value="20000-30000">20,000 - 30,000</option>
                            <option value="30000+">30,000+</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Rental Type:</td>
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
                    <td>Move-in Date:</td>
                    <td><input type="date" name="move_in_date" ></td>
                </tr>
                <tr>
                    <td>Amenities Needed:</td>
                    <td>
                        <input type="checkbox" name="amenities[]" value="parking"> Parking<br>
                        <input type="checkbox" name="amenities[]" value="wifi"> WiFi<br>
                        <input type="checkbox" name="amenities[]" value="furnished"> Furnished<br>
                        <input type="checkbox" name="amenities[]" value="ac"> AC<br>
                        <input type="checkbox" name="amenities[]" value="generator"> Generator
                    </td>
                </tr>
                
                <tr>
                    <td>Special Requirements:</td>
                    <td><textarea name="special_requirements" rows="3" cols="30" placeholder="Pets, accessibility needs, etc."></textarea></td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <button type="submit">Register As Tenant</button>
                    </td>
                </tr>
            </table>
        </form>
        <script src="../JSS/validateform.js"></script>
    </center>
</body>
</html>
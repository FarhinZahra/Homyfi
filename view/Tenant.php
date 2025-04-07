<!DOCTYPE HTML>
<html>
<head>
    <title>Tenant Register | HomyFi</title>
    <link rel="stylesheet" type="text/css" href="../css/farhin.css">
</head>
<body>
    <center>
        <h2>HomyFi - Tenant Registration</h2>
        <h3>Find Your Perfect Home</h3>
        
        <form action="action_page.php" method="POST" enctype="multipart/form-data">
            <table>
                <!-- Personal Information Section -->
                <tr>
                    <td colspan="2"><strong>Personal Details</strong></td>
                </tr>
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" required autofocus></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td>Confirm Password:</td>
                    <td><input type="password" name="confirm_password" required></td>
                </tr>
                <tr>
                    <td>Contact Number:</td>
                    <td><input type="text" name="contact_number" placeholder="+8801XXXXXXXXX" required></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="gender" value="male" required> Male
                        <input type="radio" name="gender" value="female"> Female
                        <input type="radio" name="gender" value="other"> Other
                    </td>
                </tr>
                <tr>
                    <td>National ID:</td>
                    <td><input type="text" name="national_id" required></td>
                </tr>
                <tr>
                    <td>Upload ID Proof:</td>
                    <td><input type="file" name="id_proof" accept=".jpg, .png, .pdf" required></td>
                </tr>
                
                <!-- Housing Preferences Section -->
                <tr>
                    <td colspan="2"><strong>Housing Preferences</strong></td>
                </tr>
                <tr>
                    <td>Preferred Location:</td>
                    <td>
                        <input type="text" name="preferred_location" list="locations" required>
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
                        <select name="budget_range" required>
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
                        <select name="rental_type" required>
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
                    <td><input type="date" name="move_in_date" required></td>
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
                
                <!-- Additional Information -->
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
    </center>
</body>
</html>
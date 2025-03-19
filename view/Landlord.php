<!Doctype html>
<html>
  <head>
  <title>Landlord Registration</title>
</head>
    <body>
       <center>
                    <h2>..................HomyFi.................... </h2>
        <h3>........................Landlord Registration.......................</h3>

        <form action="form.php" method="POST">

            <table>
                <tr><td><input type="text" name="full_name" placeholder="Full Name" required autofocus></td></tr>
                <tr><td><input type="email" name="email" placeholder="Email" required></td></tr>
                <tr><td><input type="password" name="password" placeholder="Password" required></td></tr>
                <tr><td><input type="password" name="confirm_password" placeholder="Confirm Password" required></td></tr>
                <tr><td><input type="text" name="contact_number" placeholder="Contact Number" required></td></tr>
                <tr><td><input type="text" name="property_type" placeholder="Property Type (Apat/House)" required></td></tr>
                <tr><td><input type="text" name="address" placeholder="Business Address" ></td></tr>
                <tr><td><input type="text" name="company_name" placeholder="Company Name (Optional)"></td></tr>
                <tr><td><input type="text" name="license_number" placeholder="License Number" required></td></tr>
                <tr>
                    <td colspan="2" align="center">
                        <button type="submit">Register</button>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

           
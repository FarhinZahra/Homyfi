<!DOCTYPE html>
<html>
<head>
    <title>Tenant Register</title>
</head>
<body>
    <center>
        <h2>..................HomyFi.................... </h2>
        <h3>............ Tenant Registration............</h3>
        <form action="form.php" method="POST">
            <table>
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
                    <td><input type="text" name="contact_number" required></td>
                </tr>
                <tr>
                    <td>Preferred Location:</td>
                    <td><input type="text" name="preferred_location" required></td>
                </tr>
                <tr>
                    <td>Budget Range:</td>
                    <td><input type="text" name="budget_range" required></td>
                </tr>
                <tr>
                    <td>Occupation:</td>
                    <td><input type="text" name="occupation" required></td>
                </tr>
                <tr>
                    <td>Move-in Date:</td>
                    <td><input type="date" name="move_in_date" required></td>
                </tr>
               
                <tr>
                    <td>National ID:</td>
                    <td><input type="text" name="national_id" required></td>
                </tr>
    
                
                <tr>
                    <td>Special Requirements:</td>
                    <td><textarea name="special_requirements" rows="3" cols="30"></textarea></td>
                </tr>
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



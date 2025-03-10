<!Doctype html>
<html>
  <head>
</head>
    <body>
       <center>
        <h2>........................Tenant Registration.......................</h2>

        <form action="form.php" method="POST">
          <table>
            
            <input type="text" name="full_name" placeholder="Full Name" required autofocus><br><br>
            <input type="email" name="email" placeholder="Email" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required><br><br>
            <input type="text" name="contact_number" placeholder="Contact Number" required><br><br>
            <input type="text" name="preferred_location" placeholder="Preferred Location" required><br><br>
            <input type="text" name="budget_range" placeholder="Budget Range ($5000-$100000)" required><br><br>
            <input type="text" name="occupation" placeholder="Occupation" required><br><br>
            <label for="date">Move in Date:</label>
            <input type="date" name="move_in_date" required><br><br>
            <button type="submit">Register</button>
        </form> 
</table>
</center>

</body>
</html>

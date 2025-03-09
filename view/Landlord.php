<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Forms</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        .container { width: 400px; background: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px gray; margin: auto; }
        input, select { width: 100%; padding: 8px; margin: 5px 0; border: 1px solid #ccc; border-radius: 5px; }
        button { background: #28a745; color: white; padding: 10px; border: none; width: 100%; border-radius: 5px; cursor: pointer; }
        button:hover { background: #218838; }
    </style>
</head>
<body>

    <!-- Landlord Registration Form -->
    <div class="container">
        <h2>Landlord Registration</h2>
        <form action="Registration.php" method="POST">
            <input type="text" name="full_name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <input type="text" name="contact_number" placeholder="Contact Number" required>
            <input type="text" name="property_type" placeholder="Property Type (e.g., Apartment, House)" required>
            <input type="text" name="address" placeholder="Business Address" required>
            <input type="text" name="company_name" placeholder="Company Name (Optional)">
            <input type="text" name="license_number" placeholder="License Number" required>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>    
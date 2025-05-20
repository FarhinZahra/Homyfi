<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HomyFi - House Rental System</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #dfe9f3, #ffffff);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .container {
      text-align: center;
      background: #ffffff;
      padding: 30px 60px;
      border-radius: 60px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      max-width: 700px;
    }

    h1 {
      font-size: 36px;
      color:rgb(107, 89, 172);
      margin-bottom: 10px;
    }

    h3 {
      font-weight: 300;
      color: #555;
      margin-bottom: 40px;
    }

    .btn {
      display: inline-block;
      width: 45%;
      margin: 10px;
      padding: 15px 0;
      background-color: #3498db;
      color: #fff;
      text-decoration: none;
      font-size: 18px;
      font-weight: 600;
      border-radius: 8px;
      transition: 0.3s ease;
    }

    .btn:hover {
      background-color: #2980b9;
    }

    .logo {
      width: 90px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

  <div class="container">
    <img src="https://cdn-icons-png.flaticon.com/512/2356/2356781.png" alt="logo" class="logo">
    <h1>Welcome to HomyFi</h1>
    <h1>HomyFi</h1>
    <h3>Find Your Perfect Home</h3>
    <a href="registration.php" class="btn">Register</a>
    <a href="login.php" class="btn">Login</a>
  </div>

</body>
</html>

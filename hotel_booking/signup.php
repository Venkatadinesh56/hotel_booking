<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      background-color: #f0f0f0;
      font-family: Arial, sans-serif;
    }
    .container {
      width: 400px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
      color: #333;
      text-align: center;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="phone"] {
      width: 100%;
      padding: 10px;
      margin: 5px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    input[type="radio"] {
      margin-right: 5px;
    }
    button {
      width: 100%;
      padding: 10px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background-color: #45a049;
    }
    a {
      color: #007bff;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Signup with PGLife</h2>
    <form method="post" action="signup_details.php">
      <input type="text" name="name" placeholder="Full Name" required><br><br>
      <input type="phone" name="number" placeholder="Phone Number"><br><br>
      <input type="email" name="email" placeholder="Email"><br><br>
      <input type="password" name="password" placeholder="Password"><br><br>
      <input type="text" name="collegename" placeholder="College Name"><br><br>
      Gender
      <input type="radio" name="sex" value="male">Male
      <input type="radio" name="sex" value="female">Female<br><br>
      <button>Create Account</button>
    </form>
    <br>
    Already have an account? <a href="login.php">Login</a>
  </div>
</body>
</html>

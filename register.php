<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: palegreen;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .registration-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      width: 300px;
    }

    .registration-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 94%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: white;
    }

    .form-group button {
      width: 100%;
      padding: 10px;
      border: none;
      background-color: #007bff;
      color: #fff;
      border-radius: 5px;
      cursor: pointer;
    }

    .form-group button:hover {
      background-color: #0056b3;
    }
    p{
        margin-left: 20%;
        font-size:12px;
    }
  </style>
</head>
<body>
  <div class="registration-container">
    <h2>Sign Up</h2>
    <form action= "connect.php"method="post">
      <div class="form-group">
        <label for="username">username</label>
        <input type="text" id="username" name="username" required>
      </div>
    
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      
      <div class="form-group">
        <button type="submit">Register</button>
        
        
      </div>
      <p>Already have an account? <a href="login.php">Login Her</a></p>
    </form>
  </div>
</body>
</html>

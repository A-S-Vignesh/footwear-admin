<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Add any necessary CSS stylesheets here -->
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: violet;
    }
    
    #login-form {
      background-color: white;
      color: black;
      border-radius: 5px;
      box-shadow: 0px 0px 10px #999;
      margin: 200px auto;
      max-width: 400px;
      padding: 20px;
    }
    
    h1 {
      font-size: 24px;
      text-align: center;
    }
    
    label {
      color: rgb(143, 6, 143);
      display: block;
      font-weight: bold;
      margin-bottom: 10px;
    }
    
    input[type="text"],
    input[type="password"] {
      color: black;
      border: 1px solid #ccc;
      border-radius: 3px;
      display: block;
      font-size: 16px;
      padding: 10px;
      width: 95%;
    }
    input[type="text"]:active,
    input[type="password"]:active{
      color: purple;
    }
    input[type="submit"] {
      background-color: rgb(143, 6, 143);
      border: none;
      border-radius: 3px;
      color: #fff;
      cursor: pointer;
      font-size: 16px;
      margin-top: 20px;
      padding: 10px;
      width: 100%;
    }
    
    input[type="submit"]:hover {
      background-color: purple;
    }
  </style>
  
  <title>Admin login</title>
</head>
<body>
  <div id="login-form">
    <h1>Lolo footwear</h1>
    <center><img src="images/Logonew.png"></center>
    <form action="login_admin.php" method="POST">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>    
      <input type="submit" name="login" value="Login">
    </form>
  </div>
  <script>
          if ( window.history.replaceState ) {
          window.history.replaceState( null, null, window.location.href );
        }
  </script>
</body>
</html>

<?php 
include './login_register/login_user.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script type="text/javascript" src="./js/login.js"></script>
    <title>Login</title>
</head>
<body>

<p class="naslov">TO-DO List</p>

<div class="container">
    <div class="content">
      <form action="login.php" method="POST" onsubmit="return preveriFormoLogin()">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" id="username" placeholder="Enter your username" onchange="preveriUsername()">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" id="password" placeholder="Enter your password" onchange="preveriPassword()">
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Login" name="submit">
          <p class="have_acc">Don't have an account? <a href="register.php">Click here</a></p>
        </div>
      </form>
    </div>
  </div>

  <?php 
  echo '<p class="error">' . $user_err . '</p>';
  echo '<p class="error">' . $login_error . '</p>';
  ?>


  <script>
      window.history.replaceState(null, null, window.location.href);
  </script>
    
</body>
</html>
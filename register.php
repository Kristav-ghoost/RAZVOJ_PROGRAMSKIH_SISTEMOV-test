<?php 
include './login_register/register_user.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script type="text/javascript" src="./js/register.js"></script>
    <title>Register</title>
</head>

<body>

    <p class="naslov">TO-DO List</p>

    
  <div class="container">
    <div class="content">
      <form action="register.php" method="POST" onsubmit="return preveriFormo()">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Firstname</span>
            <input type="text" name="firstname" id="firstname" placeholder="Enter your firstname" onchange="preveriFirstname()">
          </div>
          <div class="input-box">
            <span class="details">Lastname</span>
            <input type="text" name="lastname" id="lastname" placeholder="Enter your lastname" onchange="preveriLastname()">
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" id="username" placeholder="Enter your username" onchange="preveriUsername()">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" id="email" placeholder="Enter your email" onchange="prevriEmail()">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" id="password" placeholder="Enter your password" onchange="preveriGeslo()">
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your password" onchange="preveridrugogeslo()">
          </div>
          <div class="input-box">
            <span class="details">Phone number</span>
            <input type="tel" name="tel" id="tel" placeholder="Confirm your phone number" onchange="preveriTel()">
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register" name="submit">
          <p class="have_acc">Already have an account? <a href="login.php">Click here</a></p>
        </div>
      </form>
    </div>
  </div>

  


  <?php 
  echo '<p class="error">' . $username_err . '</p>';
  echo '<p class="error">' . $mail_err . '</p>';
  ?>


  
  <script>
      window.history.replaceState(null, null, window.location.href);
  </script>

</body>

</html>
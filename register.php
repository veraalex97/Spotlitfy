<?php

function sanitizeFormUsername($inputText) {
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ", "", $inputText);
  return $inputText;
}

function sanitizeFormString($inputText) {
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ", "", $inputText);
  $inputText = ucfirst(strtolower($inputText));
}

function sanitizeFormPassword($inputText) {
  $inputText = strip_tags($inputText);
  return $inputText;
}

if (isset($_POST['loginButton'])) {
  //echo "Login button was pressed.";
}

if (isset($_POST['registerButton'])) {
  //on button press, grab username data and use sanitizing function
  $username = sanitizeFormUsername($_POST['username']);
  $firstName = sanitizeFormString($_POST['firstName']);
  $lastName = sanitizeFormString($_POST['lastName']);
  $email = sanitizeFormString($_POST['email']);
  $email2 = sanitizeFormString($_POST['email2']);
  $password = sanitizeFormPassword($_POST['password']);
  $password2 = sanitizeFormPassword($_POST['password2']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>
<body>
  
  <div id="inputContainer">
    <form action="register.php" id="loginForm" method="POST">
      <h2>Login To Your Account</h2>
      <p>
        <label for="loginUsername">Username</label>
        <input type="text" id="loginUsername" name="loginUsername" placeholder="e.g. AtariX" required>
      </p>
      <p>
        <label for="loginPassword">Password</label>
        <input type="password" id="loginPassword" name="loginPassword" required>
      </p>

      <button type="submit" name="loginButton">LOG IN</button>
    </form>

    <form action="register.php" id="registerForm" method="POST">
      <h2>Create Account</h2>
      <p>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="e.g. AtariX" required>
      </p>
      <p>
        <label for="firstName">First Name</label>
        <input type="text" id="firstName" name="firstName" required>
      </p>
      <p>
        <label for="lastName">Last Name</label>
        <input type="text" id="lastName" name="lastName" required>
      </p>
      <p>
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>
      </p>
      <p>
        <label for="email2">Confirm Email Address</label>
        <input type="email" id="email2" name="email2" required>
      </p>
      <p>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </p>
      <p>
        <label for="password2">Confirm Password</label>
        <input type="password" id="password2" name="password2" required>
      </p>
      <button type="submit" name="registerButton">REGISTER</button>
    </form>
    
  </div>

</body>
</html>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  
  // Verify that the email exists in the database
  // ...

  // Generate a password reset token
  $token = bin2hex(random_bytes(16));

  // Save the password reset token to the database
  // ...

  // Construct the password reset link
  $resetLink = 'https://your-website.com/reset-password.php?token=' . $token;

  // Send the password reset email to the user
  $to = $email;
  $subject = 'Password reset';
  $message = "Click the link to reset your password: $resetLink";
  $headers = 'From: no-reply@your-website.com' . "\r\n" .
    'Reply-To: no-reply@your-website.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
  mail($to, $subject, $message, $headers);

  // Redirect the user to a confirmation page
  header('Location: reset-password-form.php');
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="php/reset-password.php" method="POST">
    <h2>Reset password</h2>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>

    <input type="submit" value="Reset password" >
  </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Siam page</title>
  <link rel="stylesheet" href="./style.css">
  

  <style>
    p {
      text-align: center;
    }
  </style>
  <!--
  <style>
    body {
      display: flex;
      justify-content: center;
    }

    form {
      display: flex;
      flex-direction: column;
      width: 300px;
    }

    form>input {
      margin-bottom: 20px;
    }
  </style>
  -->
</head>

<body>
  <!DOCTYPE html>
  <html>


  <head>
    <title>Siam page</title>
    <link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
  </head>
  <!--
  <form action="php/register.php" method="POST">
    <h2>Registrati</h2>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>

    <label for="username">Username</label>
    <input type="text" name="username" id="username" required>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>

    <input type="submit" value="invia">
    <p>Hai già un account? <a href="login.html">Accedi</a></p>
  </form>

  -->

  <body>

  </body>
  <div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">

    <div class="signup">
      <form action="php/register.php" method="POST">
        <label for="chk" aria-hidden="true">Sign up</label>
        <input type="text" name="username" placeholder="User name" required="">
        <input type="email" name="email" placeholder="Email" required="">
        <input type="password" name="password" placeholder="Password" required="">
        <button>Sign up</button>
      </form>
    </div>

    <div class="login">
      <form action="php/login.php" method="POST">
        <label for="chk" aria-hidden="true">Login</label>
        <input type="email" name="email" placeholder="email" required="">
        <input type="password" name="password" placeholder="password" required="">
        <button>Login</button>
      </form>
      <p>Hai dimenticato la password? <a href="reset-password.php">Resetta qui</a></p>
    </div>
    </form>
  </div>
  </div>
</body>

</html>

</body>

</html>
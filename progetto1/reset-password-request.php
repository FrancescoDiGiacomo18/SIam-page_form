<?php


// verifica se l'indirizzo email esiste nel database
function checkEmailExists($email) {
  // esempio di implementazione utilizzando MySQL
  $conn = mysqli_connect('localhost', 'username', 'password', 'database');
  $email = mysqli_real_escape_string($conn, $email);
  $query = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($conn, $query);
  $user = mysqli_fetch_assoc($result);
  mysqli_close($conn);
  return $user;
}

// genera un token univoco per la password
function generateResetToken() {
  return bin2hex(random_bytes(16));
}

// salva il token di recupero password nel database per l'utente corrispondente
function saveResetToken($userId, $resetToken) {
  // esempio di implementazione utilizzando MySQL
  $conn = mysqli_connect('localhost', 'username', 'password', 'database');
  $userId = mysqli_real_escape_string($conn, $userId);
  $resetToken = mysqli_real_escape_string($conn, $resetToken);
  $query = "INSERT INTO password_resets (user_id, token) VALUES ('$userId', '$resetToken')";
  mysqli_query($conn, $query);
  mysqli_close($conn);
}







// richiesta di recupero password
if (isset($_POST['reset-password'])) {
  // acquisizione dell'indirizzo email dalla richiesta
  $email = $_POST['email'];

  // controlla se l'indirizzo email esiste nel database
  $username = checkEmailExists($email);

  if ($username){
    // genera un token univoco per il recupero password
    $resetToken = generateResetToken();

    // salva il token nel database per l'utente corrispondente
    saveResetToken($username['id'], $resetToken);

    // invia un'email all'utente con il link per il recupero password
    sendResetPasswordEmail($email, $resetToken);

    // notifica all'utente che l'email è stata inviata
    $message = 'Un email di recupero password è stata inviata al tuo indirizzo email.';
    }else{
        // notifica all'utente che l'indirizzo email non esiste
        $message = 'L indirizzo email inserito non è associato a nessun account.';
    }
}
?>

<!-- form per la richiesta di recupero password -->
<form action="" method="post">
  <div>
    <label for="email">Indirizzo email:</label>
    <input type="email" id="email" name="email">
  </div>
  <input type="submit" name="reset-password" value="Invia richiesta">
</form>

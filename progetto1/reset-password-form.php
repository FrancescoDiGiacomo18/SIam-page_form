<?php

// verifica se il token di recupero password esiste nel database
function checkResetTokenExists($resetToken) {
  // esempio di implementazione utilizzando MySQL
  $conn = mysqli_connect('localhost', 'username', 'password', 'database');
  $resetToken = mysqli_real_escape_string($conn, $resetToken);
  $query = "SELECT * FROM password_resets WHERE token = '$resetToken'";
  $result = mysqli_query($conn, $query);
  $token = mysqli_fetch_assoc($result);
  mysqli_close($conn);
  return $token;
}

// mostra il modulo per reimpostare la password per l'utente con il token corrispondente
function showResetPasswordForm($resetToken) {
  $token = checkResetTokenExists($resetToken);
  if ($token) {
    // il token esiste e quindi mostra il modulo per reimpostare la password
    echo '<form action="reset-password.php" method="post">
            <input type="hidden" name="token" value="' . $resetToken . '">
            <label for="password">Nuova password:</label>
            <input type="password" name="password" id="password" required>
            <input type="submit" value="Reimposta password">
          </form>';
  } else {
    // il token non esiste o è scaduto
    echo 'Il token di recupero password non è valido o è scaduto. Riprova a richiedere una nuova password.';
  }
}

// verifica del token di recupero password
if (isset($_GET['token'])) {
  // acquisizione del token dalla richiesta
  $resetToken = $_GET['token'];

  // controlla se il token esiste nel database
  $user = checkResetTokenExists($resetToken);

  if ($user) {
    // mostra il form per la nuova password
    showResetPasswordForm($resetToken);
  } else {
    // notifica all'utente che il token non è valido o è scaduto
    $message = 'Questo token di recupero password non è valido o è scaduto. Effettua nuovamente la richiesta di recupero password.';
  }
}
?>

<!-- form per la nuova password -->
<form action="" method="post">
  <input type="hidden" name="reset-token" value="<?php echo $resetToken; ?>">
  <div>
    <label for="password">Nuova password:</label>
    <input type="password" id="password" name="password">
  </div>
  <div>
    <label for="confirm-password">Conferma nuova password:</label>
    <input type="password" id="confirm-password" name="confirm-password">
  </div>
  <input type="submit" name="reset-password" value="Resetta password">
</form>

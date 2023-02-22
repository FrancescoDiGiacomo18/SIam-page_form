<?php

// elimina il token di recupero password dal database
function deleteResetToken($resetToken) {
  // esempio di implementazione utilizzando MySQL
  $conn = mysqli_connect('localhost', 'username', 'password', 'database');
  $resetToken = mysqli_real_escape_string($conn, $resetToken);
  $query = "DELETE FROM password_resets WHERE token = '$resetToken'";
  mysqli_query($conn, $query);
  mysqli_close($conn);
}

// aggiorna la password dell'utente nel database
function updatePassword($userId, $password) {
  // esempio di implementazione utilizzando MySQL
  $conn = mysqli_connect('localhost', 'username', 'password', 'database');
  $userId = mysqli_real_escape_string($conn, $userId);
  $password = mysqli_real_escape_string($conn, $password);
  // potresti voler utilizzare una funzione di hash della password per la sicurezza
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
  $query = "UPDATE users SET password = '$hashedPassword' WHERE id = $userId";
  mysqli_query($conn, $query);
  mysqli_close($conn);
}

// aggiornamento della password
if (isset($_POST['reset-password'])) {
  // acquisizione del token e delle nuove password dalla richiesta
  $resetToken = $_POST['reset-token'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirm-password'];

  // controlla se le nuove password corrispondono
  if ($password === $confirmPassword) {
    // controlla se il token esiste nel database
    $user = checkResetTokenExists($resetToken);

    if ($user) {
      // elimina il token dal database
      deleteResetToken($user['id']);

      // cifra la nuova password
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

      // aggiorna la password nel database per l'utente corrispondente
      updatePassword($user['id'], $hashedPassword);

      // notifica all'utente che la password è stata reimpostata con successo
      $message = 'La tua password è stata reimpostata con successo. Puoi effettuare il login ora.';
    } else {
      // notifica all'utente che il token non è valido o è scaduto
      $message = 'Questo token di recupero password non è valido o è scaduto. Effettua nuovamente la richiesta di recupero password.';
    }
  } else {
    // notifica all'utente che le password non corrispondono
    $message = 'Le nuove password non corrispondono. Riprova.';
  }
}

// mostra un messaggio di errore o di successo
if (isset($message)) {
  echo $message;
}
?>

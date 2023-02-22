<?php
// invia un'email di recupero password all'utente
function sendResetPasswordEmail($email, $resetToken) {
  // costruisci il link per il recupero password
  $resetLink = 'https://yourwebsite.com/reset-password.php?token=' . $resetToken;

  // costruisci il corpo dell'email
  $message = "Ciao!\n\nHai richiesto di reimpostare la tua password. Per farlo, clicca sul seguente link:\n\n" . $resetLink . "\n\nSe non hai effettuato tu questa richiesta, ignora questa email.\n\nGrazie,\nIl team del tuo sito web";

  // imposta l'intestazione dell'email
  $headers = 'From: noreply@yourwebsite.com' . "\r\n" .
    'Reply-To: noreply@yourwebsite.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  // invia l'email all'utente
  mail($email, 'Richiesta di recupero password', $message, $headers);
}
?>

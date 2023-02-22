<?php

require_once('confing.php');

$email =  $connessione->real_escape_string($_POST['email']); 
$password = $connessione->real_escape_string($_POST['password']); 


if($_SERVER["REQUEST_METHOD"] === "POST"){

    $sql_select = "SELECT * FROM utenti WHERE email = '$email'"; 
    if($result = $connessione->query($sql_select)){
        if($result->num_rows == 1){
            $row = $result->fetch_array(MYSQLI_ASSOC); 
            if(password_verify($password, $row['password'])){
                session_start(); 
                $_SESSION['loggato'] = true; 
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $row['email'];

                header("location: ../area-privata.php");  
            }else{
                echo "la password non è corretta"; 
            }
        }else{
            echo "Non ci sono account con quella email"; 
        }
    }else{
        echo "Errore in fase di login"; 
    }
}
$connessione->close(); 

?>
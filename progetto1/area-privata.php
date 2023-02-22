
<?php

session_start();
if (!isset($_SESSION['loggato']) || $_SESSION['loggato'] !== true) {
    header(("location: login.html"));
    exit;
}
?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aria privata</title>
</head>
<body>
    <h1>Area privata</h1>
    <?php
    echo "ciao  " . $_SESSION["email"];

    ?>

    <a href="./php/logout.php">Disconneti</a>
</body>
</html>

-->

<!DOCTYPE html>
<html>

<head>
    <title>Form e tabella</title>
</head>
<style>
    /* Stili per il corpo della pagina */
    body {
        background-color: black;
  color: white;
    }

    /* Stili per gli header */
    h1 {
        font-size: 2em;
        margin-top: 30px;
    }

    /* Stili per il form */
    form {
        padding: 20px;
        border: 1px solid #cccccc;
        border-radius: 5px;
        width: 600px;
        margin: 0 auto;
        margin-bottom: 50px;
        background-color: #ffffff;
        color: black;
        background-color: #333333;
        color: white;
    }

    form label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    
    }

    form input,
    form select {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #cccccc;
    }

    form input[type="date"] {
        width: auto;
    }

    /* Stili per la tabella */
    table {
        border-collapse: collapse;
        border: 1px solid #cccccc;
        border-radius: 5px;
        width: 600px;
        margin: 0 auto;
        text-align: center;
        background-color: #333333;
        color: white;
    }

    table th,
    table td {
        padding: 10px;
        border: 1px solid #cccccc;
        background-color: #333333;
        color: white;
    }

    table select {
        width: 100%;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #cccccc;
       
    }
</style>

<body>

    <?php
    echo "ciao  " . $_SESSION["email"];
    ?>
    <a href="./php/logout.php">Disconneti</a>
    <script src="script.js"></script>

    
    <form>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br>

        <label for="cognome">Cognome:</label>
        <input type="text" id="cognome" name="cognome"><br>

        <label for="id_utente">ID utente:</label>
        <input type="text" id="id_utente" name="id_utente"><br>

        <label for="data_ordine">Data ordine:</label>
        <input type="date" id="data_ordine" name="data_ordine"><br>

        <label for="data_scadenza">Data di scadenza:</label>
        <input type="date" id="data_scadenza" name="data_scadenza"><br>

        <label for="num_lotti">Numero di lotti:</label>
        <input type="number" id="num_lotti" name="num_lotti"><br>

        <label for="marca_lotti">Marca di lotti:</label>
        <input type="text" id="marca_lotti" name="marca_lotti"><br>
        <button type="submit">Invia</button>
    </form>

   
    <table>
        <tr>
            <th>Cliente 1</th>
            <th>Cliente 2</th>
            <th>Cliente 3</th>
            <th>Cliente 3</th>
        </tr>
        <tr>
            <td>
                <select name="Cliente 1">
                    <option value="opzione1">Opzione 1</option>
                    <option value="opzione2">Opzione 2</option>
                    <option value="opzione3">Opzione 3</option>
                    <option value="opzione1">Opzione 4</option>
                    <option value="opzione2">Opzione 5</option>
                    <option value="opzione3">Opzione 6</option>
                    <option value="opzione1">Opzione 7</option>
                    <option value="opzione2">Opzione 8</option>
                    <option value="opzione3">Opzione 9</option>
                </select>
            </td>
            <td>
                <select name="Cliente 2">
                    <option value="opzione1">Opzione 1</option>
                    <option value="opzione2">Opzione 2</option>
                    <option value="opzione3">Opzione 3</option>
                    <option value="opzione1">Opzione 4</option>
                    <option value="opzione2">Opzione 5</option>
                    <option value="opzione3">Opzione 6</option>
                    <option value="opzione1">Opzione 7</option>
                    <option value="opzione2">Opzione 8</option>
                    <option value="opzione3">Opzione 9</option>
                </select>
            </td>
            <td>
                <select name="Cliente 3">
                    <option value="opzione1">Opzione 1</option>
                    <option value="opzione2">Opzione 2</option>
                    <option value="opzione3">Opzione 3</option>
                    <option value="opzione1">Opzione 4</option>
                    <option value="opzione2">Opzione 5</option>
                    <option value="opzione3">Opzione 6</option>
                    <option value="opzione1">Opzione 7</option>
                    <option value="opzione2">Opzione 8</option>
                    <option value="opzione3">Opzione 9</option>
                </select>
            </td>
        </tr>
    </table>
</body>

</html>
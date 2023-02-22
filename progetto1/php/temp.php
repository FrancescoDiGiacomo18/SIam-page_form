<?php

session_start();
if (!isset($_SESSION['loggato']) || $_SESSION['loggato'] !== true) {
    header(("location: login.html"));
    exit;
}
?>

<?php
    echo "ciao  " . $_SESSION["email"];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Pagina di acquisto acqua</title>
   
</head>
<style>
    .search-column {
  float: right;
  margin-right: 20px;
}

.user-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #f2f2f2;
  padding: 10px;
}

.username {
  font-weight: bold;
}

.cart {
  padding: 5px 10px;
  background-color: #0066cc;
  color: #fff;
  border-radius: 20px;
}

.empty-space {
  flex-grow: 1;
}

.table {
  margin: 20px;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #0066cc;
  color: #fff;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

select, input[type="date"], input[type="number"] {
  width: 100%;
  padding: 6px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type="date"]::-webkit-inner-spin-button,
input[type="date"]::-webkit-calendar-picker-indicator {
  display: none;
}

</style>
<body>
    <div class="search-column">
        <input type="text" placeholder="Cerca marca dell'acqua...">
    </div>
    <div class="user-row">
        <div class="username">Nome utente</div>
        <div class="cart">Carrello</div>
        <div class="empty-space"></div>
    </div>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>Marca dell'acqua</th>
                    <th>Prodotto</th>
                    <th>Data di consegna</th>
                    <th>Numero di colli</th>
                    <th>Quantità</th>
                    <th>Prezzo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Santa Maria</td>
                    <td>
                        <select name="prodotto">
                            <option value="">Scegli il prodotto</option>
                            <option value="Acqua Panna naturale">Acqua Panna naturale</option>
                            <option value="Acqua Panna frizzante">Acqua Panna frizzante</option>
                        </select>
                    </td>
                    <td>
                        <input type="date" name="data-consegna">
                    </td>
                    <td>
                        <select name="numero-colli">
                            <option value="">Numero di colli</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td>
                        <input type="number" name="quantita" min="1" max="99" value="1">
                    </td>
                    <td>€ 1,50</td>
                </tr>
                <tr>
                    <td>Ruscella</td>
                    <td>
                        <select name="prodotto">
                            <option value="">Scegli il prodotto</option>
                            <option value="San Benedetto naturale">San Benedetto naturale</option>
                            <option value="San Benedetto frizzante">San Benedetto frizzante</option>
                        </select>
                    </td>
                    <td>
                        <input type="date" name="data-consegna">
                    </td>
                    <td>
                        <select name="numero-colli">
                            <option value="">Numero di colli</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td>
                        <input type="number" name="quantita" min="1" max="99" value="1">
                    </td>
                    <td>€ 1,20</td>
                </tr>
                <tr>
                    <td>Ginevra</td>
                    <td>
                        <select name="prodotto">
                            <option value="">Scegli il prodotto</option>
                            <option value="Levissima naturale">Levissima naturale</option>
                            <option value="Levissima frizzante">Levissima frizzante</option>
                        </select>
                    </td>
                    <td>
                        <input type="date" name="data-consegna">
                    </td>
                    <td>
                        <select name="numero-colli">
                            <option value="">Numero di colli</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td>
                        <input type="number" name="quantita" min="1" max="99" value="1">
                    </td>
                    <td>€ 0,80</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>

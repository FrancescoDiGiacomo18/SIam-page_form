// Trova il form originale
var originalForm = document.getElementById("myForm");

// Trova il pulsante per aggiungere un nuovo utente
var addButton = document.getElementById("addUserButton");

// Aggiungi un ascoltatore di eventi al pulsante
addButton.addEventListener("click", function() {
    // Clona il form
    var newForm = originalForm.cloneNode(true);

    // Genera un ID univoco per il nuovo form
    var userId = generateUserId();
    newForm.id = "form-" + userId;

    // Modifica l'ID del campo ID_utente
    var idField = newForm.querySelector("#id_utente");
    idField.id = "id_utente-" + userId;

    // Aggiungi il nuovo form alla pagina
    document.body.appendChild(newForm);
});

// Funzione per generare un ID utente univoco
function generateUserId() {
    // Implementazione a tua scelta
    // Puoi utilizzare un timestamp, un contatore, un algoritmo di hashing, etc.
    // L'importante è che generi un ID univoco per ogni utente
}
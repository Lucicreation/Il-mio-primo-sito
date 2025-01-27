<?php
/* 
simulare il processo di login, senza utilizzo di un database ma utilizzando i cookies.
1) Form con email e password e un campo submit.
2) Quando viene cliccato il submit, il risultato viene inviato ad una pagina php.
3) Lato php, controlliamo che email e password non siano vuoti, in tal caso stampiamo un messaggio di errore
4) Verifichiamo i dati ricevuti, se corrispondono o meno a dati presenti in questi array:
    $persona1 = array("marco@email.it","12345","Marco","Rossi");
    $persona2 = array("luigi@email.it","abcdef","Luigi","Bianchi");
    $persona3 = array("luca@email.it","123abc","Luca","Verdi");
    Dopodichè stamperemo "Bentornato " + nome e cognome e salveremo il cookie per ogni accesso successivo.
5) Se l'utente è loggato, mostreremo un pulsante "Disconnetti" che andrà ad eliminare il cookie.

Es 1:
l'utente inserisce questi valori:
email = luigi@email.it, password = abcdef.
La pagina mostrerà "Bentornato Luigi Bianchi" e creerà il cookie.

Es 2:
l'utente inserisce questi valori:
email = marco@email.it, password = abcdef. (NOTA CHE LA PASSWORD e' SBAGLIATA!)
La pagina mostrerà "Utente o password non validi".
*/

//3)controllare che email e password non siano vuoti
    if(!empty($.POST)) {
        echo"Form inviato con successo";
    
    } else {
        echo"Compilare tutti i campi";
    }
 //1) creare il form
?>
   <html>
      <body>
     <h2>Accedi/registrati</h2>
         <form action="http://localhost/test/datilogin.php" method="POST">
         <label>E-mail:</label>
         <input type="text" name="E-mail">
         <?php if(isset($_POST['E-mail'])))
         <label>Password:</label>
         <input type="text" name="Password">
         <input type="submit" value="Accedi">
         </form>
      </body>
   </html>
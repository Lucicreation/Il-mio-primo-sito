<?php
if(!empty($_POST)){
    echo "Form inviato con successo!";
}
?>
<html>
    <style>
        .errore {
            color: red;
            display: block; 
        }
    </style>
    <body>
        <form action="http://localhost/test/form2.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome">
        <?php 
        if (isset($_POST['nome']) && ($_POST['nome'] == ''))
        echo '<label class="errore">Compila il campo!</label>';
        ?>
        <label>Cognome:</label>
        <input type="text" name="cognome">
        <?php
        if (isset($_POST['cognome']) && ($_POST['cognome'] == ''))
        echo '<label class="errore">Compila il campo!</label>';
        ?>
        <label>Età:</label>
        <input type="number" name="età">
        <?php
        if (isset($_POST['età']) && ($_POST['età'] == ''))
        echo '<label class="errore">Compila il campo!</label>';
        ?>
        <input type="submit" value="Invia">
        </form>
    </body>
</html>
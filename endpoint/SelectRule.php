<?php
include("FileHandler.php");
session_start();
$_SESSION["fileHandler"] = new FileHandler($_FILES["fileToUpload"]);
$_SESSION["fileHandler"]->checkExtension();
$_SESSION["fileHandler"]->uploadFile();
?>
<html>
    <head>
        <title>
            Business Rule Managment
        </title>
    </head>
    <body>
        <form action="./../bl/extract.php" method="POST">
        <label>Seleziona le regole di controllo sui dati</label> <p>
<input type="checkbox" name="rule[]" value="Ruleempty"><label>Campi vuoti</label><br>
<input type="checkbox" name="rule[]" value="Rulecf"><label>Controllo codice fiscale</label><br>
<input type="checkbox" name="rule[]" value="Rulenation"><label>Controllo nazione di nascita</label><br>
<input type="checkbox" name="rule[]" value="Rulecity"><label>Controllo luogo di nascita</label><br>
<input type="checkbox" name="rule[]" value="Rulemail"><label>Controllo indirizzo di posta elettronica</label><br>
      
        </p><p>
            <input type="submit" value="Avvia il controllo">
        </form>
        </p>
    </body>
</html>
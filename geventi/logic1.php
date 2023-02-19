<?php
switch ($_GET["scelta"]) {
    case crea:
        header("location: /geventi/crea/crea.php");
        break;
    case visualizza:
        header("location: /geventi/visualizza/visualizza.html");
        break;
    case modifica:
        header("location: /geventi/modifica/modifica.php");
        break;
    case elimina:
        header("location: /geventi/elimina/elimina.php");
        break;
}
?>
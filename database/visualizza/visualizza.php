<?php
switch ($_GET["scelta"]) {
    case e:
        header("location: Vestintore.php");
        break;
    case g:
        header("location: Vgenerico.php");
        break;
    case i:
        header("location: Vidrante.php");
        break;
    case n:
        header("location: Vnaspo.php");
        break;
    case pr:
        header("location: Vporta_REI.php");
        break;
    case pe:
        header("location: Vporta_emergenza.php");
        break;
}
?>		
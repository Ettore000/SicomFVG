<?php
switch ($_GET["scelta1"]) {
    case c:
        header("location: crea/crea.php");
        break;
    case s:
        header("location: scansiona/scansiona.php");
        break;
    case cerca:
        header("location: cerca/cerca.php");
        break;
    case e:
        header("location: elimina/elimina.php");
        break;
}
?>
<?php
switch ($_GET["scelta"]) {
    case d:
        header("location: documenti.html");
        break;
    case v:
        header("location: verbali.html");
        break;
    case c:
        header("location: contabilita.html");
        break;
}
?>
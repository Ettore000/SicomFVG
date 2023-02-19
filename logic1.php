<?php
switch ($_GET["scelta"]) {
    case qr:
        header("location: codiceqr/qrcode.html");
        break;
    case db:
        header("location: database/database.html");
        break;
    case sg:
        header("location: segnalazione/segnalazione.php");
        break;
}
?>
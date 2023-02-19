<?php
switch ($_GET["scelta"]) {
    case pa21:
        header("location: v2mag21.jpg");
        break;
    case csen:
        header("location: csen.png");
        break;
    case v13feb22:
        header("location: v13feb22.pdf");
}
?>
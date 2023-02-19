<?php
switch ($_GET["scelta"]) {
    case sa:
        header("location: statuto.pdf");
        break;
    case rs:
        header("location: registrosoci.pdf");
        break;
    case maa5:
        header("location: maa5.pdf");
        break;
    case m69:
        header("location: m69.pdf");
        break;
    case mf24:
        header("location: mf24.pdf");
        break;
    case mf24p:
        header("location: mf24p.pdf");
        break;
    case cf:
        header("location: cf.pdf");
        break;
}
?>
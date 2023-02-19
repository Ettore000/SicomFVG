<?php
    switch ($_GET["scelta"]) {
      case v:
        header("location: visualizza/visualizza.html");
        break;
      case m:
        header("location: modificadb/modificadb.html");
        break;
    }
?>					
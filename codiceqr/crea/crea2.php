<?php
$servername = "localhost";
$username = "98415";
$password = "Sicom2BB2020.";
$dbname = "98415";


$matr = $_GET['matricola'];
$disp = $_GET['dispositivo'];
// Creazione connessione
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Controllo connessione
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Configurazione query
switch ($_GET["dispositivo"]) {
    case "Estintore":
        $sql = "INSERT INTO " . $_GET['dispositivo'] . " (Matricola, Tipologia, Contenuto, Kg, Classe, Fabbricazione, Scadenza, Posizione, Produttore, Installazione)
        VALUES ('" . $_GET['matricola'] . "', '" . $_GET['tipologia'] . "', '" . $_GET['contenuto'] . "', '" . $_GET['kg'] . "', '" . $_GET['a'] . $_GET["b"] . $_GET["c"] . $_GET["d"] . $_GET["f"] . "', '" . $_GET['fabbricazione'] . "', '" . $_GET['scadenza'] . "', '" . $_GET['posizione'] . "', '" . $_GET['produttore'] . "', '" . $_GET['installazione'] . "')";
        $v = "Dati--> dispositivo: " . $_GET['dispositivo'] . ", matricola: " . $_GET['matricola'] . ", tipologia: " . $_GET['tipologia'] . ", conenuto: " . $_GET['contenuto'] . ", kg: " . $_GET['kg'] . ", classe: " . $_GET['a'] . $_GET["b"] . $_GET["c"] . $_GET["d"] . $_GET["f"] . ", fabbricazione: " . $_GET['fabbricazione'] . ", scadenza: " . $_GET['scadenza'] . ", posizione: " . $_GET['posizione'] . ", produttore: " . $_GET['produttore'] . ", installazione: " . $_GET['installazione'] . ".";
    break;
    case "Naspo":
        $sql = "INSERT INTO " . $_GET['dispositivo'] . " (Matricola, Attacco, Metri, Posizione, Installazione)
        VALUES ('" . $_GET['matricola'] . "', '" . $_GET['attacco'] . "', '" . $_GET['metri'] . "', '" . $_GET['posizione'] . "', '" . $_GET['installazione'] . "')";
    break;
    case "Idrante":
        $sql = "INSERT INTO " . $_GET['dispositivo'] . " (Matricola, Attacco, Posizione, Installazione)
        VALUES ('" . $_GET['matricola'] . "', '" . $_GET['attacco'] . "', '" . $_GET['posizione'] . "', '" . $_GET['installazione'] . "')";
    break;
    case "Porta_REI":
        $sql = "INSERT INTO " . $_GET['dispositivo'] . " (Matricola, Battente, Resistenza, Posizione, Installazione)
        VALUES ('" . $_GET['matricola'] . "', '" . $_GET['battente'] . "', '" . $_GET['resistenza'] . "', '" . $_GET['posizione'] . "', '" . $_GET['installazione'] . "')";
    break;
    case "Porta_emerenza":
        $sql = "INSERT INTO " . $_GET['dispositivo'] . " (Matricola, Battente, Posizione, Installazione)
        VALUES ('" . $_GET['matricola'] . "', '" . $_GET['battente'] . "', '" . $_GET['posizione'] . "', '" . $_GET['installazione'] . "')";
    break;
    case "Generico":
        $sql = "INSERT INTO " . $_GET['dispositivo'] . " (Matricola, Tipo, Posizione, Installazione)
        VALUES ('" . $_GET['matricola'] . "', '" . $_GET['oggetto'] . "', '" . $_GET['posizione'] . "', '" . $_GET['installazione'] . "')";
    break;
}
?>
<html>
    <head>
        <!--Titolo-->
        <title>Sicom DB - Check</title>
        <!--CSS impostazioni di default-->
        <style>
            body {
                background-color: black;
                background-image: url("sfondo.jpg");
            }
        </style>
        <!--meta tag-->
        <meta charset="UTF-8">
        <meta name="description" content="Banca Dati Antincendio">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="Ettore Panasia">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="crea3.php" method="GET">
            <font face="sans-serif" color="white">
            <center>
                <?php echo"<input style='opacity:0;' type='checkbox' name='matricola' value='" . $matr . "' checked='checked'><input style='opacity:0;' type='checkbox' name='dispositivo' value='" . $disp . "' checked='checked'>"; ?>
                <h1>Codice QR</h1>
                <p><?php echo $v; ?></p><br>
                <b><br> 
                    <style>
                        .button {
                          border: none;
                          color: white;
                          padding: 20px;
                          text-align: center;
                          text-decoration: none;
                          display: inline-block;
                          font-size: 16px;
                          margin: 4px 2px;
                          cursor: pointer;
                        }
                        
                        .buttonok {
                            border-radius: 12px;
                            background-color: #4caf50;
                        }
                        
                        .buttonannulla {
                            border-radius: 12px;
                            background-color: #af4c4c;
                        }
                    </style>
                    <?php
                        // Controllo sintassi
                        if (mysqli_query($conn, $sql)) {
                            echo "Dati aggiunti con successo!";
                            echo "<br>";
                            echo "<br>";
                            echo "<img style='opacity:0%; position:absolute;z-index: -1;' id='test' src='http://api.qrserver.com/v1/create-qr-code/?data=" . $_GET['matricola'] . "/" . $_GET['dispositivo'] . "&amp;size=150x150' alt='' title='Tocca per scaricare' />";
                            echo "<canvas id='myCanvas' width='170px' height='190px' style='border:1px solid #d3d3d3;background-color:white'>Your browser does not support the HTML5 canvas tag.</canvas>";
                            echo "<script>window.onload=function() {var canvas = document.getElementById('myCanvas');var ctx = canvas.getContext('2d');var img = document.getElementById('test');ctx.drawImage(img, 10, 10);ctx.font = '12px Tahoma';ctx.fillText('" . $_GET['matricola'] . "/" . $_GET['dispositivo'] . "', 11, 180);};</script>";
                            echo "<p>Tieni premuto da telefono o fai click destro del mouse da PC per scaricare il codice QR</p>";
                            echo "<p>Puoi anche riprenderlo in un secondo momento immettendo il codice di matricola e il tipo di dispositivo</p>";
                            echo "<br>";
                            echo "<br>";
                            echo "<script src='https://kit.fontawesome.com/a076d05399.js'></script>";
                            echo "<button class='button buttonok' name='apposto' value='1'><i class='far fa-check-circle' style='font-size:50px;'><span style='font-family:Sans-serif; font-size:bolder;'>Ok</span></i></button>";
                            echo "<br>";
                            echo "<button class='button buttonannulla' name='apposto' value='0'><i class='far fa-times-circle' style='font-size:50px;'><span style='font-family:Sans-serif; font-size:bolder;'>Annulla</span></i></button>";
                        } else {
                            echo "Errore: " . $sql . "<br>" . mysqli_error($conn);
                        }
                        // Disconnessione
                        mysqli_close($conn);
                    ?>
                </b>
            </center>
            </font>
        </form>
    </body>
</html>
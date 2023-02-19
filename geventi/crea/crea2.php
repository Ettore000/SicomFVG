<?php
$servername = "localhost";
$username = "98415";
$password = "Sicom2BB2020.";
$dbname = "98415";


$matr = $_GET['matricola'];
$titolo = $_GET['dispositivo'];
// Creazione connessione
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Controllo connessione
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Query
switch ($_GET['dispositivo']) {
    case 'Personale':
        $sql = "INSERT INTO Personale (ID, Nome, Cognome)
        VALUES ('" . $_GET['matricola'] . "', '" . $_GET['nome'] . "', '" . $_GET['cognome'] . "')";
        $v = "Dati--> matricola: " . $_GET['matricola'] . ", nome: " . $_GET['nome'] . ", cognome: " . $_GET['cognome'] . ".";
        break;
    case 'Evento':
        $sql = "INSERT INTO Evento (ID, Titolo, Localita, Data)
        VALUES ('" . $_GET['matricola'] . "', '" . $_GET['titolo'] . "', '" . $_GET['localita'] . "', '" . $_GET['data'] . "')";
        $v = "Dati--> matricola: " . $_GET['matricola'] . ", titolo: " . $_GET['titolo'] . ", localita: " . $_GET['localita'] . ", data: " . $_GET['data'] . ".";
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
                background-image: url("/sfondo.jpg");
            }
        </style>
        <!--meta tag-->
        <meta charset="UTF-8">
        <meta name="description" content="Banca Dati Gestione eventi">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="Ettore Panasia">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="crea3.php" method="GET">
            <font face="sans-serif" color="white">
            <center>
                <?php echo"<input style='opacity:0;' type='checkbox' name='matricola' value='" . $matr . "' checked='checked'><input style='opacity:0;' type='checkbox' name='dispositivo' value=" . $_GET['dispositivo'] . " checked='checked'>"; ?>
                <h1>Eventi in programma</h1>
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
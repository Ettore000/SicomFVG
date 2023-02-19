<html>
    <head>
        <!--Titolo-->
        <title>Sicom DB - Crea</title>
        <!--CSS impostazioni di default-->
        <style>
            body {
                background-color: black;
            }
        </style>
        <!--meta tag-->
        <meta charset="UTF-8">
        <meta name="description" content="operazione creazione">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="Ettore Panasia">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <font face="sans-serif" color="white">
        <!--CSS pulsante-->
        <style>
            .pulsante {
                padding-top:20px;
                padding-bottom:20px;
                border-radius: 20px;
                vertical-align:middle;
                color: white;
                font-size: 30px;
                cursor: pointer;
                background-color:transparent;
            }
            .button1{
                margin-bottom:50px;
                border: 5px solid #4CAF50;
                border-left:60px;
                border-right:60px;
                padding-left:35px;
                padding-right:35px;
            }
        </style>
        <?php
            if ($_GET["apposto"] > 0) {
                header("location: http://sicomdata.eu5.org/geventi");
            } else {
                // collegamento al database
                $servername = "localhost";
                $username = "98415";
                $password = "Sicom2BB2020.";
                $dbname = "98415";
                
                
                $matr = $_GET['matricola'];
                $titolo = 'Evento';
                // Creazione connessione
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Controllo connessione
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                // Richiesta
                switch ($_GET['dispositivo']) {
                    case 'Personale':
                        $sql = "DELETE FROM Personale WHERE ID = " . $_GET['matricola'] . "";
                        break;
                    case 'Evento':
                        $sql = "DELETE FROM Evento WHERE ID = " . $_GET["matricola"] . "";
                        break;
                }
                
                
                // controllo procedura
                if (mysqli_query($conn, $sql)) {
                    echo "<center><b><p><h2>Annullato con successo</h2></p></b></center>";
                } else {
                    echo "Errore: " . $sql . "<br>" . mysqli_error($conn);
                }
                
                // Disconnessione
                mysqli_close($conn);
                
                
                // Redirect pagina
            }
        ?>
        <br>
        <div align="center">
            <button class="pulsante button1" onclick="vabbene()">OK</button>
            <script>
                function vabbene() {
                  window.location.replace("https://sicomdata.eu5.org/geventi/eprogramma/Crea/crea.php");
                }
            </script>
        </div>
        </font>
    </body>

</html>
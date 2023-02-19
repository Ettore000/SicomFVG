<html>
    <head>
        <!--Titolo-->
        <title>Sicom DB - elimina</title>
        <!--CSS impostazioni di default-->
        <!--meta tag-->
        <meta charset="UTF-8">
        <meta name="description" content="eliminazione">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="Ettore Panasia">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
        body {
            background-color: black;
        }
    </style>
    <body>
        <?php
            $servername = "localhost";
            $username = "98415";
            $password = "Sicom2BB2020.";
            $dbname = "98415";
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
        ?>
        <font face="sans-serif" color="white">
            <center>
                <h1>Operazione di eliminazione</h1>
            </center>
            <?php
                // Check connection
                if (!$conn) {
                    die("Connessione al Database fallita, contattare al Master: " . mysqli_connect_error());
                }
                
                //Query
                $sql = "SELECT * FROM " . $_GET['dispositivo'] . " WHERE ID='" . $_GET['matricola'] . "'";
            ?>            
            <center>
                <b>
                    <p>
                        <?php
                            //Controllo
                            $result = mysqli_query($conn, $sql);
                            //esistenza
                            if (mysqli_num_rows($result) > 0) {
                                //Elimina
                                $sql = "DELETE FROM " . $_GET['dispositivo'] . " WHERE " . $_GET['dispositivo'] . ".ID ='" . $_GET['matricola'] . "'";
                                if (mysqli_query($conn, $sql)) {
                                  echo "Istanza eliminata con successo";
                                } else {
                                  echo "Errore nell'eliminazione: " . mysqli_error($conn);
                                }
                            } else {
                              echo "L'istanza cercata non si trova all'interno del database";
                            }
                            //Disconnessione
                            mysqli_close($conn);
                        ?>
                    </p>
                </b>
            </center>
        </font>
    </body>
</html>
<html>
    <head>
        <!--Titolo-->
        <title>Sicom DB - Scansiona</title>
        <!--CSS impostazioni di default-->
        <!--meta tag-->
        <meta charset="UTF-8">
        <meta name="description" content="Scansione codice QR">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="Ettore Panasia">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
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
                <h1>Proprieta'</h1>
            </center>
            <?php
                // Check connection
                if (!$conn) {
                    die("Connessione al Database fallita, contattare al Master: " . mysqli_connect_error());
                }
                
                //Query
                $sql = "SELECT * FROM " . $_GET['dispositivo'] . " WHERE Matricola='" . $_GET['matricola'] . "'";
                $result = mysqli_query($conn, $sql);
            ?>            
            <center>
                <b>
                    <p>
                        <?php
                            //Controllo sintassi
                            if (mysqli_num_rows($result) > 0) {
                                if ($_GET['dispositivo'] == "Estintore") {
                                    echo "<table border='2'><tr><th>Matricola</th><th>Stato</th><th>Tecnologia</th><th>Contenuto</th><th>Kg</th><th>Classe</th><th>Fabbricazione</th><th>Scadenza</th><th>Posizione</th><th>Produttore</th><th>Installazione</th><th>Ultimo controllo</th></tr>";
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr><td>".$row["Matricola"]."</td><td>".$row["Stato"]."</td><td>".$row["Tipologia"]."</td><td>".$row["Contenuto"]."</td><td>".$row["Kg"]."</td><td>".$row["Classe"]."</td><td>".$row["Fabbricazione"]."</td><td>".$row["Scadenza"]."</td><td>".$row["Posizione"]."</td><td>".$row["Produttore"]."</td><td>".$row["Installazione"]."</td><td>".$row["Ultimo controllo"]."</td></tr>";
                                    }
                                } else if ($_GET['dispositivo'] == "Generico") {
                                    echo "<table border='2'><tr><th>Matricola</th><th>Stato</th><th>Tipo</th><th>Posizione</th><th>Installazione</th><th>Ultimo controllo</th></tr>";
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr><td>".$row["Matricola"]."</td><td>".$row["Stato"]."</td><td>".$row["Tipo"]."</td><td>".$row["Posizione"]."</td><td>".$row["Installazione"]."</td><td>".$row["Ultimo controllo"]."</td></tr>";
                                    }
                                } else if ($_GET['dispositivo'] == "Idrante") {
                                    echo "<table border='2'><tr><th>Matricola</th><th>Stato</th><th>Tipologia</th><th>Attacco</th><th>Posizione</th><th>Installazione</th><th>Ultimo controllo</th></tr>";
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr><td>".$row["Matricola"]."</td><td>".$row["Stato"]."</td><td>".$row["Tipologia"]."</td><td>".$row["Attacco"]."</td><td>".$row["Posizione"]."</td><td>".$row["Installazione"]."</td><td>".$row["Ultimo controllo"]."</td></tr>";
                                    }
                                } else if ($_GET['dispositivo'] == "Naspo") {
                                    echo "<table border='2'><tr><th>Matricola</th><th>Stato</th><th>Attacco</th><th>Metri</th><th>Posizione</th><th>Installazione</th><th>Ultimo controllo</th></tr>";
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr><td>".$row["Matricola"]."</td><td>".$row["Stato"]."</td><td>".$row["Attacco"]."</td><td>".$row["Metri"]."</td><td>".$row["Posizione"]."</td><td>".$row["Installazione"]."</td><td>".$row["Ultimo controllo"]."</td>></tr>";
                                    }
                                } else if ($_GET['dispositivo'] == "Porta_emergenza") {
                                    echo "<table border='2'><tr><th>Matricola</th><th>Stato</th><th>Battente</th><th>Posizione</th><th>Installazione</th><th>Ultimo controllo</th></tr>";
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr><td>".$row["Matricola"]."</td><td>".$row["Stato"]."</td><td>".$row["Battente"]."</td><td>".$row["Posizione"]."</td><td>".$row["Installazione"]."</td><td>".$row["Ultimo controllo"]."</td></tr>";
                                    }
                                } else if ($_GET['dispositivo'] == "Porta_REI") {
                                    echo "<table border='2'><tr><th>Matricola</th><th>Stato</th><th>Battente</th><th>Resistenza</th><th>Posizione</th><th>Installazione</th><th>Ultimo controllo</th></tr>";
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr><td>".$row["Matricola"]."</td><td>".$row["Stato"]."</td><td>".$row["Battente"]."</td><td>".$row["Resistenza"]."</td><td>".$row["Posizione"]."</td><td>".$row["Installazione"]."</td><td>".$row["Ultimo_controllo"]."</td></tr>";
                                    }
                                }
                                echo "</table>";
                            } else {
                                echo "<h1>Il prodotto non esiste</h1>";
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
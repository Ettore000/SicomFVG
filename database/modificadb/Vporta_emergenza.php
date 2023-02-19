<?php
            $servername = "localhost";
            $username = "98415";
            $password = "Sicom2BB2020.";
            $dbname = "98415";
            
            // Creazione connessione
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Controllo connessione
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            //Query
            $sql = "INSERT INTO " . $_GET['dispositivo'] . " (Matricola, Tipologia, Contenuto, Kg, Classe, Fabbricazione, Scadenza, Posizione, Produttore, Installazione)
                    VALUES ('" . $_GET['matricola'] . "', '" . $_GET['tipologia'] . "', '" . $_GET['contenuto'] . "', '" . $_GET['kg'] . "', '" . $_GET['a'] . $_GET["b"] . $_GET["c"] . $_GET["d"] . $_GET["f"] . "', '" . $_GET['fabbricazione'] . "', '" . $_GET['scadenza'] . "', '" . $_GET['posizione'] . "', '" . $_GET['produttore'] . "', '" . $_GET['installazione'] . "')";
            
            $sql = "SELECT * FROM *";
            
            
            
            
            // Disconnessione
            mysqli_close($conn);
            ?>
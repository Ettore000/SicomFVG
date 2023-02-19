<html>
    <head>
        <!--Titolo-->
        <title>Sicom DB - Modifica</title>
        <!--CSS impostazioni di default-->
        <style>
            body {
                background-color: black;
                background-image: url("sfondo.jpg");
            }
        </style>
        <!--meta tag-->
        <meta charset="UTF-8">
        <meta name="description" content="operazioni Codice QR">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="Ettore Panasia">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            $servername = "localhost";
            $username = "98415";
            $password = "Sicom2BB2020.";
            // Create connection
            $conn = mysqli_connect($servername, $username, $password);
        ?>
        <form action="logic1.php" method="GET">
        <font face="sans-serif" color="white">
        <center>
            <h1>Cerca</h1>
        </center>
        <?php
            // Check connection
            if (!$conn) {
                $x = 0;
            }
            $x = 1;
        ?>
        <p align="right" style="font-size: 10px;">Stato DataBase: <?php if ($x = 0) { echo '<font color=red>Non raggiungibile</font>'; } else { echo '<font color=green>Raggiungibile</font>' ; } ?></p>
        <p style="font-size: 30px;">Inserisci I dati richiesti:</p>
        <center>
            <div>
                Matricola--><input list='q1' name='matricola'>
            </div>
            <div>
                Dispositivo--><select id="scelta1" name="dispositivo">
                    <option value="nd" selected>||SELEZIONA||</option>
                    <option value="Estintore">Estintore</option>
                    <option value="Naspo">Naspo</option>
                    <option value="Idrante">Idrante</option>
                    <option value="Porta_REI">Porta REI</option>
                    <option value="Porta_emergenza">Uscita di sicurezza</option>
                    <option value="Generico">Altro</option>
                </select>
            </div>
            <style>
                .button {
                  background-color: #00ccff;
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
                
                .button1 {
                    border-radius: 12px;
                }
            </style>
            <br>
                <button style="font-weight:bolder;" class="button button1">Conferma</button>
        </center>
        </font>
        </form>
        <?php
            // Check alert
            if (!$conn) {
                die("Connessione al Database fallita, contattare al Master: " . mysqli_connect_error());
            }
            mysqli_close($conn);
        ?>
    </body>
</html>
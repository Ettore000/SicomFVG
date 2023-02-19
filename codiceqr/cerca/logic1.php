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
                <h1>Operazione di ricerca</h1>
            </center>
            <?php
                // Check connection
                if (!$conn) {
                    die("Connessione al Database fallita, contattare al Master: " . mysqli_connect_error());
                }
                
                //Query
                $sql = "SELECT * FROM " . $_GET['dispositivo'] . " WHERE Matricola='" . $_GET['matricola'] . "'";
            ?>            
            <center>
                <b>
                    <p>
                        <?php
                            //Visualizzazione
                            $result = mysqli_query($conn, $sql);
                            
                            if (mysqli_num_rows($result) > 0) {
                                echo "<img style='opacity:0%; position:absolute;z-index: -1;' id='test' src='http://api.qrserver.com/v1/create-qr-code/?data=" . $_GET['matricola'] . "/" . $_GET['dispositivo'] . "&amp;size=150x150' alt='' title='Tocca per scaricare' />";
                                echo "<canvas id='myCanvas' width='170px' height='190px' style='border:1px solid #d3d3d3;background-color:white'>Your browser does not support the HTML5 canvas tag.</canvas>";
                                echo "<script>window.onload=function() {var canvas = document.getElementById('myCanvas');var ctx = canvas.getContext('2d');var img = document.getElementById('test');ctx.drawImage(img, 10, 10);ctx.font = '12px Tahoma';ctx.fillText('" . $_GET['matricola'] . "/" . $_GET['dispositivo'] . "', 11, 180);};</script>";
                                echo "<p>Tieni premuto da telefono o fai click destro del mouse da PC per scaricare il codice QR</p>";
                            } else {
                              echo "Il dispositivo cercato non si trova all'interno del database, prima aggiungi il dispositivo";
                            }
                            
                            // Disconnessione
                            mysqli_close($conn);
                        ?>
                    </p>
                </b>
            </center>
        </font>
    </body>
</html>
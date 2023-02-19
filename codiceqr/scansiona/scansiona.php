<html>
    <head>
        <!--Titolo-->
        <title>Sicom DB - Scansiona</title>
        <!--CSS impostazioni di default-->
        <style>
            body {
                background-color: black;
                background-image: url("sfondo.jpg");
            }
        </style>
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
            // Create connection
            $conn = mysqli_connect($servername, $username, $password);
        ?>
        <font face="sans-serif" color="white">
            <center>
                <h1>Codice QR</h1>
            </center>
            <?php
                // Check connection
                if (!$conn) {
                    $x = 0;
                }
                $x = 1;
            ?>
            <p align="right" style="font-size: 10px;">Stato DataBase: <?php if ($x = 0) { echo '<font color=red>Non raggiungibile</font>'; } else { echo '<font color=green>Raggiungibile</font>' ; } ?></p>
            <p style="font-size: 30px;">Scansione</p>
            <p style="color:yellow; font-size: 10px;">scegli la tua azione</p>
    
            <script src="html5-qrcode.min.js"></script>
            
            <center><div style="width: 75vw" id="reader"></div></center>
            
            <script>
                
                var html5QrcodeScanner = new Html5QrcodeScanner(
                "reader", { fps: 20, qrbox: 250 });
                    
                function onScanSuccess(qrCodeMessage) {
                    //Stop
                    html5QrcodeScanner.clear();
                    //handle
                    document.getElementById("output").innerHTML = `Il codice QR letto corrisponde a: ${qrCodeMessage}`;
                    var fields = qrCodeMessage.split('/');
            		var matricola = fields[0];
            		var dispositivo = fields[1];
            		window.location.replace("logic1.php?&matricola=" + matricola + "&dispositivo=" + dispositivo + "");
                }
                
                function onScanError(errorMessage) {
                    //handle
                    document.getElementById("output").innerHTML = `QR error = ${errorMessage}`;
                }
                
                html5QrcodeScanner.render(onScanSuccess, onScanError);
            
            </script>
            
            <div id="output"></div>
        </font>
        <?php
            // Check alert
            if (!$conn) {
                die("Connessione al Database fallita, contattare al Master: " . mysqli_connect_error());
            }
            mysqli_close($conn);
        ?>
    </body>
</html>
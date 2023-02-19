<html>
<title>SicomData - DB</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
    
    <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    
    th, td {
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even){background-color: #f2f2f2}
    
    th {
      background-color: #4CAF50;
      color: white;
    }
    </style>
    
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
    $sql = "SELECT * FROM Estintore";
    
    //Visualizzazione
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        echo "<b><center><p>Estintore</p></center></b>";
        echo "<table border='2' ><tr><th>Matricola</th><th>Stato</th><th>Tecnologia</th><th>Contenuto</th><th>Kg</th><th>Classe</th><th>Fabbricazione</th><th>Scadenza</th><th>Posizione</th><th>Produttore</th><th>Installazione</th><th>Ultimo controllo</th></tr>";
      // output dei dati di ogni riga
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["Matricola"]."</td><td>".$row["Stato"]."</td><td>".$row["Tecnologia"]."</td><td>".$row["Contenuto"]."</td><td>".$row["Kg"]."</td><td>".$row["Classe"]."</td><td>".$row["Fabbricazione"]."</td><td>".$row["Scadenza"]."</td><td>".$row["Posizione"]."</td><td>".$row["Produttore"]."</td><td>".$row["Installazione"]."</td><td>".$row["Ultimo controllo"]."</td></tr>";
      }
      echo "</table>";
    } else {
      echo "<b><center><p>Nessun dispositivo registrato</p></center></b>";
    }
    
    // Disconnessione
    mysqli_close($conn);
    ?>
</html>	
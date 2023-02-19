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
    $sql = "SELECT * FROM Evento";
    
    //Visualizzazione
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        echo "<b><center><p>Eventi</p></center></b>";
        echo "<table border='2' ><tr><th>Matricola</th><th>Titolo</th><th>Localita</th><th>Data</th></tr>";
      // output dei dati di ogni riga
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["ID"]."</td><td>".$row["Titolo"]."</td><td>".$row["Localita"]."</td><td>".$row["Data"]."</td></tr>";
      }
      echo "</table>";
    } else {
      echo "<b><center><p>Nessun dispositivo registrato</p></center></b>";
    }
    
    // Disconnessione
    mysqli_close($conn);
    ?>
</html>	
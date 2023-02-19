<html>
    <head>
        <!--Titolo-->
        <title>Sicom DB - Crea</title>
        <!--CSS impostazioni di default-->
        <style>
            body {
                background-color: black;
                background-image: url("/sfondo.jpg");
            }
        </style>
        <!--meta tag-->
        <meta charset="UTF-8">
        <meta name="description" content="Banca Dati Gestione Eventi">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="Ettore Panasia">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="crea2.php" method="GET">
            <font face="sans-serif" color="white">
            <center>
                <h1>Inserisci parametri</h1>
            </center>
            <p class="back"><a href="https://sicomdata.eu5.org/geventi/">INDIETRO</a></p>
            <style>
                .back {
                    position:absolute;
                    left:1vw;
                    top:5%;
                    border:2px;
                    border-style: solid;
                    border-color: white;
                    color:white;
                }
                a:link {
                  color: #d6fbff;
                }
                
                /* visited link */
                a:visited {
                  color: #d6fbff;
                }
                
                /* mouse over link */
                a:hover {
                  color: #fcffcc;
                }
                
                /* selected link */
                a:active {
                  color: #fcffcc;
                }
                </style>
            <p align="right" style="font-size: 10px;">Stato DataBase: <font color=green>Raggiungibile</font></p>
            <p style="font-size: 30px;">Compilazione</p>
            <p style="color:yellow; font-size: 10px;">seleziona i dati corretti</p>
            <center>
                <b>
                    <p style="font-size: 30px;">Di cosa si tratta?</p>
                    Matricola--><input name="matricola" value="" type="textbox">
                    <!-- HTML selectbox -->
                    <div>
                        Istanza--><select id="scelta1" name="dispositivo" onchange="selezione()">
                            <option value="nd" selected>||SELEZIONA||</option>
                            <option value="Personale">Personale</option>
                            <option value="Evento">Eventi</option>
                        </select>
                    </div>
                    <script>
                    function selezione() {
                        var s1 = document.getElementById("scelta1").value;
                        switch (s1) {
                          case "nd":
                              resetta();
                          break;
                          case "Personale":
                            resetta();
                            document.getElementById("d2").innerHTML = "Nome-->";
                            document.getElementById("l2").innerHTML = "<input list='q2' name='nome'>";
                            document.getElementById("d3").innerHTML = "Cognome-->";
                            document.getElementById("l3").innerHTML = "<input list='q3' name='cognome'>";
                            break;
                          case "Evento":
                            resetta();
                            document.getElementById("d2").innerHTML = "Titolo-->";
                            document.getElementById("l2").innerHTML = "<input list='q2' name='titolo'>";
                            document.getElementById("d3").innerHTML = "Localita-->";
                            document.getElementById("l3").innerHTML = "<input list='q3' name='localita'>";
                            document.getElementById("d4").innerHTML = "Data-->";
                            document.getElementById("l4").innerHTML = "<input name='data' type='date' value=''>";
                            break;
                        }
                    }
                    function resetta() {
                        document.getElementById("d2").innerHTML = "";
                        document.getElementById("l2").innerHTML = "";
                        document.getElementById("d3").innerHTML = "";
                        document.getElementById("l3").innerHTML = "";
                        document.getElementById("d4").innerHTML = "";
                        document.getElementById("l4").innerHTML = "";
                        document.getElementById("d5").innerHTML = "";
                        document.getElementById("l5").innerHTML = "";
                        document.getElementById("d6").innerHTML = "";
                        document.getElementById("l6").innerHTML = "";
                        document.getElementById("d7").innerHTML = "";
                        document.getElementById("l7").innerHTML = "";
                        document.getElementById("d8").innerHTML = "";
                        document.getElementById("l8").innerHTML = "";
                        document.getElementById("d9").innerHTML = "";
                        document.getElementById("l9").innerHTML = "";
                    }
                    </script>
                    <div>
                        <label id="d2"></label><label id="l2"></label>
                    </div>
                    <div>
                        <label id="d3"></label><label id="l3"></label>
                    </div>
                    <div>
                        <label id="d4"></label><label id="l4"></label>
                    </div>
                    <div>
                        <label id="d5"></label><label id="l5"></label>
                    </div>
                    <div>
                        <label id="d6"></label><label id="l6"></label>
                    </div>
                    <div>
                        <label id="d7"></label><label id="l7"></label>
                    </div>
                    <div>
                        <label id="d8"></label><label id="l8"></label>
                    </div>
                    <div>
                        <label id="d9"></label><label id="l9"></label>
                    </div>
                    <br>
                    <!-- CSS radio button  -->
                    <style>
                        /* The container */
                        .container {
                          position: relative;
                          padding-left: 30px;
                          padding-right: 10px;
                          margin-bottom: 12px;
                          cursor: pointer;
                          font-size: 22px;
                          -webkit-user-select: none;
                          -moz-user-select: none;
                          -ms-user-select: none;
                          user-select: none;
                        }
                        
                        /* Hide the browser's default radio button */
                        .container input {
                          position: absolute;
                          opacity: 0;
                          cursor: pointer;
                        }
                        
                        /* Create a custom radio button */
                        .checkmark {
                          position: absolute;
                          top: 0;
                          left: 0;
                          height: 25px;
                          width: 25px;
                          background-color: #eee;
                          border-radius: 50%;
                        }
                        
                        /* On mouse-over, add a grey background color */
                        .container:hover input ~ .checkmark {
                          background-color: #ccc;
                        }
                        
                        /* When the radio button is checked, add a blue background */
                        .container input:checked ~ .checkmark {
                          background-color: #4CAF50;
                        }
                        
                        /* Create the indicator (the dot/circle - hidden when not checked) */
                        .checkmark:after {
                          content: "";
                          position: absolute;
                          display: none;
                        }
                        
                        /* Show the indicator (dot/circle) when checked */
                        .container input:checked ~ .checkmark:after {
                          display: block;
                        }
                        
                        /* Style the indicator (dot/circle) */
                        .container .checkmark:after {
                         	top: 9px;
                        	left: 9px;
                        	width: 8px;
                        	height: 8px;
                        	border-radius: 50%;
                        	background: white;
                        }
                    </style>
                    <!-- CSS checkbox -->
                    <style>
                        .checkmarkbox {
                          position: absolute;
                          top: 0;
                          left: 0;
                          height: 25px;
                          width: 25px;
                          background-color: #eee;
                          border-radius: 5px;
                        }
                        
                        /* On mouse-over, add a grey background color */
                        .container:hover input ~ .checkmarkbox {
                          background-color: #ccc;
                        }
                        
                        /* When the radio button is checked, add a blue background */
                        .container input:checked ~ .checkmarkbox {
                          background-color: #4CAF50;
                        }
                        
                        /* Create the indicator (the dot/circle - hidden when not checked) */
                        .checkmarkbox:after {
                          content: "";
                          position: absolute;
                          display: none;
                        }
                        
                        /* Show the indicator (dot/circle) when checked */
                        .container input:checked ~ .checkmarkbox:after {
                          display: block;
                        }
                        
                        /* Style the indicator (dot/circle) */
                        .container .checkmarkbox:after {
                         	left: 9px;
                            top: 5px;
                            width: 5px;
                            height: 10px;
                            border: solid white;
                            border-width: 0 3px 3px 0;
                            -webkit-transform: rotate(45deg);
                            -ms-transform: rotate(45deg);
                            transform: rotate(45deg);
                        }
                    </style>
                    <style>
                        .button {
                          background-color: #4CAF50; /* Green */
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
                    <label>
                        <button style="font-weight:bolder;" class="button button1">Conferma</button>
                    </label>
                </b>
            </center>
            </font>
        </form>
    
<div style="text-align:right;position:fixed;bottom:3px;right:3px;width:100%;z-index:999999;cursor:pointer;line-height:0;display:block;"><a target="_blank" href="https://www.freewebhostingarea.com" title="Free Web Hosting with PHP5 or PHP7"><img alt="Free Web Hosting" src="https://www.freewebhostingarea.com/images/poweredby.png" style="border-width: 0px;width: 180px; height: 45px; float: right;"></a></div>
</body>
</html>
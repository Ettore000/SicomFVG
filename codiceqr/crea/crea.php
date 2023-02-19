<html>
    <head>
        <!--Titolo-->
        <title>Sicom DB - Crea codice</title>
        <!--CSS impostazioni di default-->
        <style>
            body {
                background-color: black;
                background-image: url("sfondo.jpg");
            }
        </style>
        <!--meta tag-->
        <meta charset="UTF-8">
        <meta name="description" content="Banca Dati Antincendio">
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
            <p class="back"><a href="https://sicomdata.eu5.org">INDIETRO</a></p>
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
                        Dispositivo--><select id="scelta1" name="dispositivo" onchange="selezione()">
                            <option value="nd" selected>||SELEZIONA||</option>
                            <option value="Estintore">Estintore</option>
                            <option value="Naspo">Naspo</option>
                            <option value="Idrante">Idrante</option>
                            <option value="Porta_REI">Porta REI</option>
                            <option value="Porta_emergenza">Uscita di sicurezza</option>
                            <option value="Generico">Altro</option>
                        </select>
                    </div>
                    <script>
                    function selezione() {
                        var s1 = document.getElementById("scelta1").value;
                        switch (s1) {
                          case "nd":
                              resetta();
                          break;
                          case "Estintore":
                            resetta();
                            document.getElementById("d2").innerHTML = "Tipologia-->";
                            document.getElementById("l2").innerHTML = "<select id='scelta2' name='tipologia'><option value=''>||SELEZIONA||</option><option value='portabile'>Portabile</option><option value='carrellato'>Carrellato</option></select>";
                            document.getElementById("d3").innerHTML = "Contenuto-->";
                            document.getElementById("l3").innerHTML = "<select id='scelta3' name='contenuto'><option value='' selected>||SELEZIONA||</option><option value='polvere'>Polvere</option><option value='co2'>CO2</option><option value='schiuma'>Schiuma</option><option value='acqua'>Acqua</option><option value='idrocarburi'>Idrocarburi idrogenati</option></select>";
                            document.getElementById("d4").innerHTML = "KG-->";
                            document.getElementById("l4").innerHTML = "<input list='q4' name='kg'><datalist id='q4'></datalist>";
                            document.getElementById("d5").innerHTML = "Classe-->";
                            document.getElementById("l5").innerHTML = "<label class='container'>A<input type='checkbox' value='A' name='a'><span class='checkmarkbox'></span></label>    <label class='container'>B<input type='checkbox' value='B' name='b'><span class='checkmarkbox'></span></label>   <label class='container'>C<input type='checkbox' value='C' name='c'><span class='checkmarkbox'></span></label>   <label class='container'>D<input type='checkbox' value='D' name='d'><span class='checkmarkbox'></span></label>   <label class='container'>F<input type='checkbox' value='F' name='f'><span class='checkmarkbox'></span></label>";
                            document.getElementById("d6").innerHTML = "Posizione-->";
                            document.getElementById("l6").innerHTML = "<input list='q6' name='posizione'>";
                            document.getElementById("d7").innerHTML = "Produttore-->";
                            document.getElementById("l7").innerHTML = "<input list='q7' name='produttore'>";
                            document.getElementById("d8").innerHTML = "Data Fabbricazione-->";
                            document.getElementById("l8").innerHTML = "<input type='date' list='q8' name='fabbricazione'>";
                            document.getElementById("d9").innerHTML = "Data Scadenza-->";
                            document.getElementById("l9").innerHTML = "<input type='date' list='q9' name='scadenza'>";
                            break;
                          case "Naspo":
                            resetta();
                            document.getElementById("d2").innerHTML = "Tipo attacco-->";
                            document.getElementById("l2").innerHTML = "<input list='q2' name='attacco'><datalist id='q2'><option value='VVF'>V.V.F.<option value'UNI 25'>UNI 25<option value='UNI 45'>UNI 45<option value='UNI 50'>UNI 50<option value='UNI 70'>UNI 70<option value='storz'>Storz</datalist>";
                            document.getElementById("d3").innerHTML = "Metri-->";
                            document.getElementById("l3").innerHTML = "<input list='q3' name='metri'>";
                            document.getElementById("d4").innerHTML = "Posizione-->";
                            document.getElementById("l4").innerHTML = "<input list='q4' name='posizione'>";
                            break;
                          case "Idrante":
                            resetta();
                            document.getElementById("d2").innerHTML = "Tipologia-->";
                            document.getElementById("l2").innerHTML = "<select id='scelta2' name='tipologia'><option value='' selected>||SELEZIONA||</option><option value='soprasuolo'>Soprasuolo</option><option value='sottosuolo'>Sottosuolo</option></select>";
                            document.getElementById("d3").innerHTML = "Tipo attacco-->";
                            document.getElementById("l3").innerHTML = "<input list='q2' name='attacco'><datalist id='q2'><option value='VVF'>V.V.F.<option value'UNI 25'>UNI 25<option value='UNI 45'>UNI 45<option value='UNI 50'>UNI 50<option value='UNI 70'>UNI 70<option value='storz'>Storz</datalist>";
                            document.getElementById("d4").innerHTML = "Posizione-->";
                            document.getElementById("l4").innerHTML = "<input list='q4' name='posizione'>";
                            break;
                          case "Porta_REI":
                            resetta();
                            document.getElementById("d2").innerHTML = "Numero battenti-->";
                            document.getElementById("l2").innerHTML = "<select id='scelta2' name='battente'><option value='' selected>||SELEZIONA||</option><option value='1'>1</option><option value='2'>2</option></select>";
                            document.getElementById("d3").innerHTML = "Resistenza (min)-->";
                            document.getElementById("l3").innerHTML = "<select id='scelta2' name='resistenza'><option value='' selected>||SELEZIONA||</option><option value='30'>30</option><option value='60'>60</option><option value='90'>90</option><option value='120'>120</option><option value='180'>180</option></select>";
                            document.getElementById("d4").innerHTML = "Posizione-->";
                            document.getElementById("l4").innerHTML = "<input list='q4' name='posizione'>";
                            break;
                          case "Porta_emergenza":
                            resetta();
                            document.getElementById("d2").innerHTML = "Numero battenti-->";
                            document.getElementById("l2").innerHTML = "<select id='scelta2' name='battente'><option value='' selected>||SELEZIONA||</option><option value='1'>1</option><option value='2'>2</option></select>";
                            document.getElementById("d3").innerHTML = "Posizione-->";
                            document.getElementById("l3").innerHTML = "<input list='q3' name='posizione'>";
                            break;
                          case "Generico":
                            resetta();
                            document.getElementById("d2").innerHTML = "Oggetto-->";
                            document.getElementById("l2").innerHTML = "<select id='scelta2' name='oggetto'><option value='' selected>||SELEZIONA||</option><option value='Luce di emergenza'>Luce di emergenza</option><option value='Pulsante allarme'>Pulsante allarme</option><option value='Valvola di intercettazione'>Valvola di intercettazione</option><option value='Rilevatore'>Rilevatore</option><option value='Evacuatore'>Evacuatore</option></select>";
                            document.getElementById("d3").innerHTML = "Posizione-->";
                            document.getElementById("l3").innerHTML = "<input list='q2' name='posizione'>";
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
                    <div>
                        Hai a disposizione la data di installazione?<br>
                        <label class="container">SI
                            <input type="radio" name="radioinst" value="si" id="rd" onclick="inst()">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">NO
                            <input type="radio" name="radioinst" value="no" onclick="noinst()" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <br>
                    <div>
                        <label id="d10"></label><label id="l10"></label>
                    </div>
                    <script>
                        function inst() {
                            document.getElementById("d10").innerHTML = "Data installazione-->";
                            document.getElementById("l10").innerHTML = "<input type='date' list='q10' name='installazione'>";
                        }
                        function noinst() {
                            document.getElementById("d10").innerHTML = "";
                            document.getElementById("l10").innerHTML = "";
                        }
                    </script>
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
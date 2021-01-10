<!DOCTYPE html>
<html>
    <head lang="it">
        <title>Consegna-Disney</title>
        <meta charset="UTF-8">
        <meta name="author" content="Riggi Luigi">
        <meta name="description" content="Consegna informatica">
        <!-- my CSS -->
        <link rel="stylesheet" href="css/stileIndex.css?ts=<?=time()?>&quot">
        <link rel="stylesheet" href="css/hormenu.css?ts=<?=time()?>&quot">
         <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css?ts=<?=time()?>&quot">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
    </head>
    <body>
        <!-- TITOLO -->
        <div class="container-fluid" id="principale1">
            <h1 style="text-align:center;height:80px">- Personaggi della Disney -</h1>
        </div>
        <!-- MENU' -->
        <div class="container-fluid" id="principale1" style="height:60px">
            <div class="row" >
                <div class="col">
                    <div class="row" style="margin-left:30px">
                        <div class="col-2">(menù)</div>
                        <div class="col-1"></div>
                        <div class="col-2">
                            <div id="hormenu">
                                <ul> 
                                    <li>
                                        <a href="#">CategoriePersonaggi</a> 
                                        <ul> 
                                            <li><a href="php/LoginRegister.php">Fumetti</a></li>
                                            <li><a href="php/LoginRegister.php">Cortometraggi d'animazione 1</a></li>
                                            <li><a href="php/LoginRegister.php">Film d’animazione</a></li>
                                            <li><a href="php/LoginRegister.php">Pixar</a></li>
                                            <li><a href="php/LoginRegister.php">Serie Televisive</a></li>
                                            <li><a href="php/LoginRegister.php">Videogiochi</a></li>
                                        </ul> 
                                    </li> 
                                </ul>
                            </div>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-2">
                            <div id="hormenu">
                                <ul> 
                                    <li>
                                        <a href="#">Storia</a> 
                                        <ul> 
                                            <li><a href="php/LoginRegister.php">1923-1927: i primi cortometraggi</a></li>
                                            <li><a href="php/LoginRegister.php">1928-1937: la creazione di Topolino</a></li>
                                            <li><a href="php/LoginRegister.php">1937-1954: i primi lungometraggi</a></li>
                                            <li><a href="php/LoginRegister.php">1955-1966: Disneyland e morte di Walt Disney</a></li>
                                        </ul> 
                                    </li> 
                                </ul>
                            </div>
                        </div>
                        <div class="col-3"></div>
                    </div>
                </div>
                <div class="col-2"><a href="php/LoginRegister.php" > Registrati/ accedi</a></div>
            </div>
        </div>
        <!-- CONTENUTO -->
        <div class="container-fluid" id="principale2">
            <div class="row">
                <div class="col-2" id="personaggi">
                    <div class="row"><div class="col" style="text-align:center">Personaggi:</div></div>
                    <div class="row"><div class="col" style="text-align:center"><u>Paperino</u></div></div>
                    <div class="row"><div class="col" style="text-align:center"><u>Paperina</u></div></div>
                    <div class="row"><div class="col" style="text-align:center"><u>Nonna Papera</u></div></div>
                    <div class="row"><div class="col" style="text-align:center"><u>Paperoga</u></div></div>
                    <div class="row"><div class="col" style="text-align:center"><u>Zio Paperone</u></div></div>
                    <div class="row"><div class="col" style="text-align:center"><u>Gastone</u></div></div>
                    <div class="row"><div class="col" style="text-align:center"><u>Qui-Quo-Qua</u></div></div>
                    <div class="row"><div class="col" style="text-align:center"><u>Clarabella</u></div></div>
                    <div class="row"><div class="col" style="text-align:center"><u>Orazio</u></div></div>
                    <div class="row"><div class="col" style="text-align:center"><u>.......</u></div></div>
                </div>
                <div class="col-8">
                    <h5 style="margin: 10px"><font color="red">EFFETTUA IL LOGIN PER VISUALIZZARE LE INFORMAZIONI!</font></h5>
                    <p style="margin: 10px"><strong><u>Puoi effettuare l'accesso dalla sezione posta in alto a destra</u></strong></p>
                </div>
                <div class="col-2" style="border-left:1px solid black">
                    <p style="text-align:center">link siti</p>
                </div>
            </div>
        </div>
        
    </body>
</html>    
<!DOCTYPE html>
<html>
    <head lang="it">
        <title>Consegna-Disney</title>
        <meta charset="UTF-8">
        <meta name="author" content="Riggi Luigi">
        <meta name="description" content="Consegna informatica">
        <!-- my CSS -->
        <link rel="stylesheet" href="../css/stilePAL.css?ts=<?=time()?>&quot">
        <link rel="stylesheet" href="../css/hormenu.css?ts=<?=time()?>&quot">
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
                                            <li><a href="https://disney-comics.fandom.com/it/wiki/Categoria:Storie_sui_fumetti" target="_blank">Fumetti</a></li>
                                            <li><a href="https://it.wikipedia.org/wiki/Categoria:Cortometraggi_di_Paperino" target="_blank">Cortometraggi d'animazione</a></li>
                                            <li><a href="https://disney.fandom.com/it/wiki/Categoria:Cortometraggi_di_Paperino" target="_blank"> Film d’animazione</a></li>
                                            <li><a href="https://it.wikipedia.org/wiki/Lungometraggi_Disney#Disney_%E2%80%A2_Pixar" target="_blank">Pixar</a></li>
                                            <li><a href="https://it.wikipedia.org/wiki/Categoria:Serie_televisive_d%27animazione_Disney" target="_blank">Serie Televisive</a></li>
                                            <li><a href="https://disney.fandom.com/it/wiki/Categoria:Videogiochi" target="_blank">Videogiochi</a></li>
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
                                            <li><a href="https://it.wikipedia.org/wiki/The_Walt_Disney_Company" target="_blank">1923-1927: i primi cortometraggi</a></li>
                                            <li><a href="https://it.wikipedia.org/wiki/The_Walt_Disney_Company" target="_blank">1928-1937: la creazione di Topolino</a></li>
                                            <li><a href="https://it.wikipedia.org/wiki/The_Walt_Disney_Company" target="_blank">1937-1954: i primi lungometraggi</a></li>
                                            <li><a href="https://it.wikipedia.org/wiki/The_Walt_Disney_Company" target="_blank">1955-1966: Disneyland e morte di Walt Disney</a></li>
                                        </ul> 
                                    </li> 
                                </ul>
                            </div>
                        </div>
                        <div class="col-3">
                        <a style="float:right; border:1px solid black;padding:2px;margin-top:5px;text-decoration:none" href="../index.php">LOGOUT</a>
                        </div>
                    </div>
                </div>
                <div class="col-2">loggato come <strong><?php echo "<br>".$_GET['usernameInserito'];?></strong>
                </div>
            </div>
        </div>
        <!-- CONTENUTO -->
        <div class="container-fluid" id="principale2">
            <div class="row">
                <div class="col-2" style="border-right:1px solid black;background-color: antiquewhite;">
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
                    <div id="contenitore">
                        <img src="../contentMedia/Paperino.jpg" id="img">
                        <p style="padding:2rem">
                            <strong>Descrizione del personaggio</strong><br>
                            È un papero bianco con becco e zampe arancioni. Solitamente indossa una blusa e un berretto da marinaio. Secondo l'albero genealogico ideato da Don Rosa in base alle indicazioni contenute nelle storie a fumetti di Carl Barks è figlio di Ortensia de' Paperoni (sorella di Paperon de' Paperoni) e Quackmore Duck (figlio di Nonna Papera). Ha una sorella gemella, Della Duck, madre di Qui, Quo, Qua- La prima apparizione del personaggio risale al 1934 nel cortometraggio La gallinella saggia diretto da Wilfred Jackson nel quale Paperino è il vicepresidente del Circolo dei pigri che ha come presidente Meo Porcello.
                        </p>
                    </div>
                    <div id="contenitore">
                        <img src="../contentMedia/Paperina.jpg" id="img">
                        <p style="padding:2rem">
                            <strong>Descrizione del personaggio</strong><br>
                            Personaggio di grande carattere, è rappresentata come la classica fidanzata iper-protettiva e gelosa nei confronti di Paperino, pronta a scatenare la gelosia del papero uscendo con il suo cugino-rivale, Gastone. Paperina è amante dello shopping, frequentatrice assidua del Club delle Ragazze assieme alle sue grandi amiche: Minni, Genialina Edy Son e Chiquita. Paperina tiene anche un diario personale, nel quale racconta le avventure più significative della giornata, che vengono a volte estrapolate dalla serie di storie Dal diario di Paperina.
                        </p>
                    </div>
                    <div id="contenitore">
                        <img src="../contentMedia/NonnaPapera.jpg" id="img">
                        <p style="padding:2rem">
                            <strong>Descrizione del personaggio</strong><br>
                            Nonna Papera è la classica signora di campagna, arzilla nonostante l'età. Gestisce da sola la fattoria a Quacktown, è sempre disponibile a ospitare i parenti e a cucinare deliziosi manicaretti. È una papera molto intelligente e dallo spiccato senso pratico, piuttosto seria, anche se talvolta mostra una vena di arguzia. E' forse la più assennata dei parenti in vita caratteristica ereditata dal padre e dal nonno, molto lungimiranti, ma a volte mostra d'essere un po' all'antica e di conoscere poco le più recenti tecnologie. Considera gli animali e la natura parte della sua famiglia e tiene moltissimo alla sua capra da guardia Billy e alla sua fattoria. 
                        </p>
                    </div>
                    <div id="contenitore">
                        <img src="../contentMedia/Paperoga.jpg" id="img">
                        <p style="padding:2rem">
                            <strong>Descrizione del personaggio</strong><br>
                            Paperoga è sempre entusiasta di acquisire nuove conoscenze a partire dalle più bislacche discipline sportive sino ad arrivare alle più accademiche materie di studio. È un amante della cultura sui generis, che senza la metodica dedizione di Pico de Paperis cerca di essere un virtuoso dell'intelletto.
                            Già al suo debutto, Paperoga era un amante del fai-da-te e credeva che i libri contenessero le risposte ad ogni domande e spesso si cimentava nella loro lettura, aveva una sua trascendente filosofia di vita e una certa introversione nell'indole. In seguito la passione per la conoscenza si trasforma in un'eccentricità bizzarra che a volte sconfina nella pazzia. 
                        </p>
                    </div>
                    <div id="contenitore">
                        <img src="../contentMedia/ZioPaperone.jpg" id="img">
                        <p style="padding:2rem">
                            <strong>Descrizione del personaggio</strong><br>
                             Paperone dimostra sempre un aspetto snello, sotto il quale si nasconde una forza sovrumana. Porta sempre delle basette e degli occhiali comprati da sua sorella Ortensia di cui ha grande bisogno perché la sua vista è stata disastrata dal lavoro di minatore nello Yukon. Veste in modo molto atipico per un plurimiliardario, indossa infatti sempre i soliti due o tre abiti tutti uguali comprati molti anni prima: il suo look consiste in una palandrana vecchia e logora , una tuba a cilindro per cappello e delle ghette; si accompagna con un bastone da passeggio che non gli serve tanto per passeggiare quanto come strumento di difesa contro gli assalitori. Quando è in "tenuta da difesa" del Deposito spesso porta a tracolla un vecchio spingardino caricato a sale. 
                        </p>
                    </div>
                    <div id="contenitore">
                        <img src="../contentMedia/Gastone.jpg" id="img">
                        <p style="padding:2rem">
                            <strong>Descrizione del personaggio</strong><br>
                             Gastone Paperone è un vero millantatore, vanitoso e pieno di sé. Ha sempre un atteggiamento disinvolto e spavaldo, privo di esitazioni. Non ha la minima intenzione di trovare un impiego stabile ed è un ottimista convinto, certo che la sua buona sorte gli procurerà tutto ciò che desidera.
                            In rari casi la sua fortuna viene meno, come nelle storie Gastone e la Luna Storta o Gastone e l'importanza di essere sfortunato, ma sempre per un periodo limitato e sempre come forma di protezione nei suoi riguardi da parte della dea bendata che, alla fine, lo premia comunque.
                        </p>
                    </div>
                    <div id="contenitore">
                        <img src="../contentMedia/QuiQuoQua.jpg" id="img">
                        <p style="padding:2rem">
                            <strong>Descrizione del personaggio</strong><br>
                             Sono tre gemelli identici nipoti di Paperino e figli di sua sorella Della Duck e del marito di questa. Nonostante in quasi tutte le storie i tre fratelli siano rappresentati come identici tra di loro, alcuni autori introducono occasionalmente particolari caratteristiche che li differenziano l'uno dall'altro: per Pat Block, Qui (cappello rosso) è il più coraggioso del gruppo, Qua (cappello verde) il più impulsivo, mentre Quo (cappello azzurro), spesso protagonista, è il più intelligente e il primo a prendersi una cotta.
                            Graficamente i tre personaggi sono identici fatto salvo il colore degli indumenti, sono una versione infantile di Paperino.
                        </p>
                    </div>
                    <div id="contenitore">
                        <img src="../contentMedia/Clarabella.jpg" id="img">
                        <p style="padding:2rem">
                            <strong>Descrizione del personaggio</strong><br>
                             Clarabella viene rappresentata come una mucca eccessivamente pettegola che ama mettersi in mostra con vestiti di classe, spesso comportandosi come una nobildonna, per mettersi in luce davanti alla Topolinia che "conta". Soprattutto agli inizi, con i suoi difetti e le sue manie la mucca appare un po' come un contraltare comico della più posata e sensata Minni; più tardi, drasticamente limitato il ruolo di Clarabella, sarà paradossalmente la stessa fidanzata di Topolino a venire spesso caratterizzata con simili piccoli difetti.
                             
                        </p>
                    </div>
                    <div id="contenitore">
                        <img src="../contentMedia/Orazio.jpg" id="img">
                        <p style="padding:2rem">
                            <strong>Descrizione del personaggio</strong><br>
                             È un meccanico con un innato senso pratico che si occupa di riparare qualsiasi cosa nella sua officina. Presuntuoso e spesso saccente, ma anche con un carattere un po' ingenuo e sempliciotto; a volte è fatalista ed è terribilmente geloso del successo di Topolino, ma gli rimane sempre suo amico.
                            Orazio è spesso considerato come il fidanzato ufficiale di Clarabella, anche se in diverse occasioni la mucca si è presa qualche seria cotta per Pippo.
                            Durante gli anni 90, Orazio doveva essere protagonista di una serie animata dal titolo Maximum Horsepower la cui trama lo vedeva rapito da degli alieni e scelto come loro campione, ma l'idea fu scartata.
                        </p>
                    </div>
                </div>
                <div class="col-2" style="border-left:1px solid black;background-color: antiquewhite;">
                    <div class="container-fluid">
                        <div class="row"><h4 style="text-align:center">link siti</h4></div>
                        <div class="row" style="width:100%;border-bottom:1px solid black;border-top:1px solid black;margin-top:5rem">
                            <p style="float:left;margin-top:15px;text-align:left">
                                https://disney-comics.fandom.com/it
                                /wiki
                                /Categoria:Storie_sui_fumetti
                            </p>
                        </div>
                        <div class="row" style="width:100%;border-bottom:1px solid black;border-top:1px solid black;margin-top:5rem">
                            <p style="float:left;margin-top:15px;text-align:left">
                                https://it.wikipedia.org/wiki/
                                Categoria:
                                Cortometraggi_di_Paperino
                            </p>
                        </div>
                        <div class="row" style="width:100%;border-bottom:1px solid black;border-top:1px solid black;margin-top:5rem">
                            <p style="float:left;margin-top:15px;text-align:left">
                                https://disney.fandom.com/it
                                /wiki/
                                Categoria:
                                Cortometraggi_di_Paperino
                            </p>
                        </div>
                        <div class="row" style="width:100%;border-bottom:1px solid black;border-top:1px solid black;margin-top:5rem">
                            <p style="float:left;margin-top:15px;text-align:left">
                                https://it.wikipedia.org
                                /wiki/
                                Lungometraggi_Disney
                                #Disney_%E2%80%A2_Pixar
                            </p>
                        </div>
                        <div class="row" style="width:100%;border-bottom:1px solid black;border-top:1px solid black;margin-top:5rem">
                            <p style="float:left;margin-top:15px;text-align:left">
                                https://it.wikipedia.org
                                /wiki/
                                Categoria:
                                Serie_televisive_d%27
                                animazione_Disney
                            </p>
                        </div>
                        <div class="row" style="width:100%;border-bottom:1px solid black;border-top:1px solid black;margin-top:5rem">
                            <p style="float:left;margin-top:15px;text-align:left">
                                https://disney.fandom.com/
                                it/wiki/
                                Categoria:Videogiochi
                            </p>
                        </div>
                        <div class="row" style="width:100%;border-bottom:1px solid black;border-top:1px solid black;margin-top:5rem">
                            <p style="float:left;margin-top:15px;text-align:left">
                                https://it.wikipedia.org
                                /wiki/
                                The_Walt_Disney_Company
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>    

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Order and Chaos </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/tabs.css"/>
</head>
<body>
    <div id="wrapper">
    <div class="section">
        <div class="container">
            <img src="css/img/wappen_middle.png" alt="css/img/wappen_small.png">
            <h1>Order and Chaos</h1>
            <div class="color-overlay"></div>
        </div>
    </div> <!-- Ende Section -->
    <nav><!-- Start Nav -->
    <div class="toggle">
        <i class="menu">|||</i>
    </div>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#aboutUs">Über Uns</a></li>
            <li><a href="#raids">Raids</a></li>
            <li><a href="#mythic">Mythic+</a></li>
            <li><a href="#skills">Kontakt</a></li>
        </ul>
    </nav> <!-- Ende Nav -->
    <div id="aboutUs">
        <div id="desc"> <!--  CONTAINER -->
            <div id="box-1">
                <img src="css/img/test.jpg" alt="css/img/test.jpg" width="100%" height="600px" margin-left="10px">
            </div>
            <div id="box-2">
                <h3>Lok'thar Ogar, Freund!</h3>    
                <p> Wir sind die Gilde "Order and Chaos" vom Server Anetheron und sind allesamt treue und kampferprobte
                    Streiter der Horde. <br><br>
                    Unseren kleinen, verrückten und familiären Haufen von lieben Menschen gibt es seit Legion, genauer gesagt war <br>
                    Gul'dan, der sich zu der Zeit in der Nachtfestung aufhielt, der erste Bösewicht, dem wir gemeinsam das Handwerk gelegt haben. <br>
                    Und seitdem?<br><br>
                    Gut,dass du fragst! Seitdem waren wir ziemlich erfolgreich. Wir haben die letzten Raids immer geschafft unser Gildenziel
                    die Curve, also den Endboss in heroischer Schwierigkeit legen bevor der neue Raid rauskommt, zu erspielen. <br><br>
                    Will heißen: In unserer gemeinsamen Zeit haben alle Raids gelegen und auch der G'huun "Gott" musste sich uns geschlagen geben. <br>
                    Und was macht ihr sonst noch? <br> <br>
                    Noch eine super Frage: Wir gehen gern M+ Instanzen und versuchen uns da immer weiter zu steigern. Und ansonsten halt alles was ansteht... <br>
                    Weltquests, Inselexpeditionen, alte Raids und und und... <br><br>
                    Alles im Namen der Horde
                </p>
            </div>
        </div> 
    </div>
    <div id="raids"><!-- Raids -->.
    <div id="wrapper">
        <h3>Raids:</h3>
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'bfa')" >BfA</button>
            <button class="tablinks" onclick="openCity(event, 'legion')" >Legion</button>
            <button class="tablinks" onclick="openCity(event, 'member')" id="defaultOpen">Raidkader</button>
            <button class="tablinks" onclick="openCity(event, 'infos')">Allgemeine Infos</button>
        </div>

        <div id="bfa" class="tabcontent">
        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
        <h3>Battle for Azeroth</h3>
        <div id="tab_wrapper"><!-- Tab Wrapper  -->
            <div id="raid-1"><!-- Raid-1 Box -->
            <p>
                Nachdem wir alle den Start ins Add On gemeistert und uns an den "neuen Alltag" gewöhnt haben, öffnete endlich <br>
                Uldir seine Pforten! Wir waren alle sehr gespannt und waren neugierig was uns erwarten würde. Immerhin gab es einen
                alten Gott und jede Menge Monster zu verprügeln.
                <br><br>
                Der nhc Content konnte uns nicht lange aufhalten und so widmeten wir uns zeitnahm der heroischen Version des <br>
                Nach ein paar Schwierigkeiten und einiger Zeit der Eingewöhnung gelang es uns schließlich zuerst Zul, dann Mythrax und <br>
                schlussendlich auch G'huun selbst den Gar aus zu machen und die "Curve" für uns einzustreichen.
            </p>
                <div class="skillbar clearfix " data-percent="100%">
                    <div class="skillbar-title" style="background: #a09797;"><span>Uldir (nhc)</span></div>
                    <div class="skillbar-bar" style="background: #C5534F;"></div>
                    <div class="skill-bar-percent">8/8</div>
                </div> <!-- End Skill Bar -->

                <div class="skillbar clearfix " data-percent="100%">
                    <div class="skillbar-title" style="background: #a09797;"><span>Uldir (hc)</span></div>
                    <div class="skillbar-bar" style="background: #964946;"></div>
                    <div class="skill-bar-percent">8/8</div>
                </div> <!-- End Skill Bar -->
            </div> <!-- Raid-1 Box ENDE -->
            <div id="raid-2"> <!-- Raid-2 Box-->
            <div class="raidcontainer">
                <img src="css/img/wappen_middle.png" alt="css/img/wappen_small.png">
                    <h1>G'huun besiegt!</h1>
                <div class="color-overlay"></div>
            </div>
            </div><!-- Raid-2 Box- ENDE-->
        </div> <!-- Tab Wrapper ENDE -->
        </div>

        <div id="legion" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
            
            <h3>Legion</h3>
            <div id="tab_wrapper"><!-- Tab Wrapper  -->
            <div id="raid-1"><!-- Raid-1 Box -->
            
                <div class="skillbar clearfix " data-percent="100%">
                    <div class="skillbar-title" style="background: #a09797;"><span>Nighthold (nhc)</span></div>
                    <div class="skillbar-bar" style="background: #87a9e9;"></div>
                    <div class="skill-bar-percent">10/10</div>
                </div> <!-- End Skill Bar -->

                <div class="skillbar clearfix " data-percent="100%">
                    <div class="skillbar-title" style="background: #a09797;"><span>Nighthold (hc)</span></div>
                    <div class="skillbar-bar" style="background: #6485c4;"></div>
                    <div class="skill-bar-percent">10/10</div>
                </div> <br> <br><!-- End Skill Bar -->

                <div class="skillbar clearfix " data-percent="100%">
                    <div class="skillbar-title" style="background: #a09797;"><span>Trials of Valor (nhc)</span></div>
                    <div class="skillbar-bar" style="background: #ed684e;"></div>
                    <div class="skill-bar-percent">3/3</div>
                </div> <!-- End Skill Bar -->

                <div class="skillbar clearfix " data-percent="100%">
                    <div class="skillbar-title" style="background: #a09797;"><span>Trials of Valor (hc)</span></div>
                    <div class="skillbar-bar" style="background: #c6462b;"></div>
                    <div class="skill-bar-percent">3/3</div>
                </div> <br><br><!-- End Skill Bar -->

                <div class="skillbar clearfix " data-percent="100%">
                    <div class="skillbar-title" style="background: #a09797;"><span>ToS (nhc)</span></div>
                    <div class="skillbar-bar" style="background: #9bef4c;"></div>
                    <div class="skill-bar-percent">9/9</div>
                </div> <!-- End Skill Bar -->

                <div class="skillbar clearfix " data-percent="100%">
                    <div class="skillbar-title" style="background: #a09797;"><span>ToS (hc)</span></div>
                    <div class="skillbar-bar" style="background: #97c172;"></div>
                    <div class="skill-bar-percent">8/8</div>
                </div> <br><br><!-- End Skill Bar -->

                <div class="skillbar clearfix " data-percent="100%">
                    <div class="skillbar-title" style="background: #a09797;"><span>Antorus (nhc)</span></div>
                    <div class="skillbar-bar" style="background: #23aa11;"></div>
                    <div class="skill-bar-percent">11/11</div>
                </div> <!-- End Skill Bar -->

                <div class="skillbar clearfix " data-percent="100%">
                    <div class="skillbar-title" style="background: #a09797;"><span>Antorus (hc)</span></div>
                    <div class="skillbar-bar" style="background: #1a8a0d;"></div>
                    <div class="skill-bar-percent">11/11</div>
                </div> <br><br><!-- End Skill Bar -->
            </div> <!-- Raid-1 Box ENDE -->
        <div id="raid-2"> <!-- Raid-2 Box-->
            <div class="slider">
                <div class="slide"><p>Nightmare: CLEAR</p></div>
                <div class="slide"><p>Nighthold: CLEAR</p></div>
                <div class="slide"><p>Grabmahl des Sageras: CLEAR</p></div>
                <div class="slide"><p>Antorus: CLEAR</p></div>  
            </div>
        </div><!-- Raid-2 Box- ENDE-->

        </div> <!-- Tab Wrapper ENDE -->
    </div>
        <div id="member" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
            
            <div id="memberflex">
                <div id="member-1">
                    <h3>Tanks</h3> <br>
                    <table>
                        <tr>
                            <th>Name</th><th>Klasse</th>
                        </tr>
                        <tr><td>Amaterasu</td><td>Krieger</td></tr>
                        <tr><td>Sinner</td><td>Dämonenjäger</td></tr>
                    </table>
                </div>

                <div id="member-2">
                    <h3>Heiler</h3> <br>
                    <table>
                        <tr>
                            <th>Name</th><th>Klasse</th>
                        </tr>
                            <tr><td>Kreischi</td><td>Schamane</td></tr>
                            <tr><td>Reinerpunk</td><td>Priester</td></tr>
                            <tr><td>Sinopa</td><td>Paladin</td></tr>
                            <tr><td>Syrthania</td><td>Schamane</td></tr>
                            <tr><td>Swarloz</td><td>Druide</td></tr>
                    </table>
                </div>
            </div><!-- ENDE MEMBER FLEX -->
            <div id="memberflex">
                <div id="member-3">
                    <h3>Melee DDs</h3> <br>
                    <table>
                        <tr>
                            <th>Name</th><th>Klasse</th>
                        </tr>
                        <tr><td>Trollkalar</td><td>Krieger</td></tr>
                        <tr><td>Tack</td><td>Dämonenjäger</td></tr>
                        <tr><td>Gozer</td><td>Dämonenjäger</td></tr>
                        <tr><td>Lucifer</td><td>Dämonenjäger</td></tr>
                        <tr><td>Teufelsbesen</td><td>Dämonenjäger</td></tr>
                        <tr><td>Darkeddie</td><td>Schamane</td></tr>
                        <tr><td>Sasquatsch</td><td>Druide</td></tr>
                        <tr><td>Blackbear</td><td>Mönch</td></tr>
                        <tr><td>Veily</td><td>Todesritter</td></tr>
                        <tr><td>Menardinus</td><td>Schurke</td></tr>

                    </table>
                </div>

                <div id="member-4">
                    <h3>Ranged DDs</h3> <br>
                    <table>
                        <tr>
                            <th>Name</th><th>Klasse</th>
                        </tr>
                        <tr><td>Damari</td><td>Hexenmeister</td></tr>
                        <tr><td>Pitfall</td><td>Magier</td></tr>
                        <tr><td>Gefearfach</td><td>Hexenmeister</td></tr>
                        <tr><td>Hauie</td><td>Jäger</td></tr>
                        <tr><td>Subbi</td><td>Priester</td></tr>
                        <tr><td>Assurar</td><td>Dämonenjäger</td></tr>
                        <tr><td>Vinkly</td><td>Hexenmeister</td></tr>
                        <tr><td>Beljag</td><td>Jäger</td></tr>
                        <tr><td>Baraighn</td><td>Hexenmeister</td></tr>
                        <tr><td>Machtgeil</td><td>Magier</td></tr>
                        <tr><td>Akanix</td><td>Magier</td></tr>
                    </table>
                </div>

            </div>
            
            
            
            
            
            
            
            






        </div>

        <div id="infos" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
            <h3>Raidinformationen</h3>
            <p>Allgemeine Informationen zu unseren Raids</p>
            <a href="https://raider.io/guilds/eu/anetheron/Order%20and%20Chaos" target="_blank">Raider.io</a> 
            <a href="https://www.warcraftlogs.com/guild/calendar/304372/" target="_blank"> WarcraftLogs </a>
        </div>
    </div>
    </div> <!-- Raids ENDE -->

    <div id="mythic"> <!-- Mythic Plus -->.

    <h3>Mythic+ Instanzen </h3>
    <div class="affix" id="one"></div>
    <div id="t_one"></div>
    <div class="affix" id="two"></div>
    <div id="t_two"></div>
    <div class="affix" id="three"></div>
    <div id="t_three"></div>
    <div class="affix" id="four"></div>
    <div id="t_four"></div>

    <div class="tooltip" id="one">Hover over me
        <span class="tooltiptext" id="t_one">Tooltip text</span>
    </div>

    <h2>Right Tooltip w/ Left Arrow</h2>
    <p>
        Jetzt ist sind die Affixe ja schon gut und schön, aber das sagt ja nichts über unsere Gilde. Kommen wir nun also zu unseren <br>
        Top 10 Membern, die sich in der aktuellen Season in die Schlacht gestürzt haben.
    </p>
    <table>
        <tr>
            <th>Platz</th><th>Name</th><th>Klasse</th><th>Score</th>
        </tr>
        <?php
        for ($i=0; $i<10; $i++){
            $y=$i+1;
        echo "<tr id='row-".$y."'>
            <td>".$y."</td><td>Kreischi</td><td>Schamane</td><td>1030</td>
            </tr>";
            }
        ?>        
        </table> 
    </div> <!-- Mythic Plus ENDE -->

    <footer>
        <div id="wrapper">
            <div id="list">
            <ul>
                <li>Impressum</li><span id="bolt">|</span>
                <li>Datenschutz</li><span id="bolt">|</span>
                <li>created by: Lars Schleyer aka Subbi</li>
            </ul>
            </div>
                

            <div id="pic">
                <img src="css/img/subbi.png" alt="css/img/subbi.png">
            </div>
        </div>
    </footer>
    </div> <!-- Ende Wrapper -->
    <script>
        // Nav-Bar jQuery
    $(document).ready(function(){
        $('.menu').click(function(){
            $('ul').toggleClass('active');
        });
    });

        // Skillbar Animations
    $(document).ready(function(){
        $('.skillbar').each(function(){
            $(this).find('.skillbar-bar').animate({
                width:$(this).attr('data-percent')
            },3000);
        });
    });

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

    </script>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Order and Chaos - Anetheron EU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/w3.css" />
    <link rel="icon" type="image/png" href="css/img/favicon.png" sizes="32x32">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>    
    <script src="js/scores.js" defer></script>
    <script src="js/slider.js"defer ></script>
    <script src="js/main.js" defer></script>
    <script src="js/kalender.js" defer></script>
    <script src="js/discord.js" defer></script>
</head>
<body>
<div id="wrapper">
    <!-- Landing -->
    <div class="section" id="landing">
        <div class="landing_container">
            <img src="css/img/logo.png" alt="css/img/logo.png" id="titlepic">
            <h1 class="morpheus">Order and Chaos</h1> <br>
            <h3 class="morpheus">Anetheron - EU</h3>
            <a href="#about"><div class="button morpheus">Start</div></a>
        </div>
    </div>
    <!-- Landing ENDE-->
    <!-- Navigation -->
    <div class="topnav" id="myTopnav">
        <a href="#landing" class="nav_link">Home</a>
        <a href="#about" class="nav_link">Über Uns</a>
        <a href="#raids" class="nav_link">Raids</a>
        <a href="#mythic" class="nav_link ">Mythic+</a>
        
        <a href="#kontakt" class="nav_link">Kontakt</a>
        <a href="vids.html" target="_blank" class="nav_link">Videos</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars">|||</i>      
        </a>
    </div>
    <!-- Navigation ENDE -->
    <!-- Über Uns -->
    <div class="section" id="about">
        <div class="about_box" id="text">
            <h3 class="morpheus">Lok'thar Ogar, Freund!</h3>            
            <p id="about_text">
                Wir sind die Gilde "Order and Chaos" vom Server Anetheron und sind allesamt treue und kampferprobte Streiter der Horde. <br><br>
                Unseren kleinen, verrückten und familiären Haufen von lieben Menschen gibt es seit Legion, genauer gesagt war 
                Gul'dan, der sich zu der Zeit in der Nachtfestung aufhielt, der erste Bösewicht, dem wir gemeinsam das Handwerk gelegt haben. 
                <h4 class="morpheus">Was sind eure Ziele ?</h4>
                Gut,dass du fragst! Seitdem waren wir ziemlich erfolgreich. Wir haben die letzten Raids immer geschafft unser Gildenziel die Curve, also den Endboss in heroischer Schwierigkeit legen bevor der neue Raid rauskommt, zu erspielen. <br><br>
                Will heißen: In unserer gemeinsamen Zeit haben alle Raids gelegen und auch der G'huun "Gott" musste sich uns geschlagen geben. Doch damit nicht genug. Auch Jaina haben wir erfolgreich aus Daza'Alor vertrieben. <br>
                Und nach langem Kampf konnten wir auch Uu'nat, den Vorboten der Leere, besiegen und triumphieren...
                <h4 class="morpheus">Und was macht ihr, wenn ihr nicht raidet?</h4>
                Noch eine super Frage: Wir gehen gern M+ Instanzen und versuchen uns da immer weiter zu steigern. Außerdem stehen Erfolgsruns in den Raids auch dann und wann auf der Tagesordnung.
                Und ansonsten halt alles was ansteht... Weltquests, Inselexpeditionen, alte Raids und und und... <br><br>
                Alles im Namen der Horde, <br>
                <span id="handwirting">Das OaC- Team</span>
            </p>
        </div>
        <div class="about_box" id="pic">
            <div class="slideshow-container">
                <!-- Palast -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 6</div>
                    <img src="css/img/palast.png" style="width:100%">
                    <div class="slidertext morpheus">
                        <h4 class="morpheus">Der Ewige Palast hc clear</h4>    
                        Endlich ist der Palast auch im heroischen Modus clear!
                    </div>
                </div>

                <!-- Palast -->
                <div class="mySlides fade">
                    <div class="numbertext">2 / 6</div>
                    <img src="css/img/azsharanhc.png" style="width:100%">
                    <div class="slidertext morpheus">
                        <h4 class="morpheus">Der Ewige Palast nhc clear</h4>    
                        Königin Azshara wurden die Tentakel gestutzt.
                    </div>
                </div>

                <!-- Tiegel -->
                <div class="mySlides fade">
                    <div class="numbertext">3 / 6</div>
                    <img src="css/img/tiegelhc.jpg" style="width:100%">
                    <div class="slidertext morpheus">
                        <h4 class="morpheus">Tiegel des Sturms Hc clear</h4>    
                        Der Tiegel ist nun auch bereinigt!
                    </div>
                </div>

                <!-- Tiegel -->
                <div class="mySlides fade">
                    <div class="numbertext">4 / 6</div>
                    <img src="css/img/angeln.jpg" style="width:100%">
                    <div class="slidertext morpheus">
                        <h4 class="morpheus">Holt die Angeln raus...</h4>    
                        Wenn es mal wieder länger dauert...
                    </div>
                </div>

                <!-- BoD -->
                <div class="mySlides fade">
                    <div class="numbertext">5 / 6</div>
                    <img src="css/img/bod.jpg" style="width:100%">
                    <div class="slidertext morpheus">
                        <h4 class="morpheus">BoD Hc clear</h4>    
                        endlich wurde auch Jaina vertrieben
                    </div>
                </div>

                <!-- Uldir -->
                <div class="mySlides fade">
                    <div class="numbertext">6 / 6</div>
                    <img src="css/img/ghuun.png" style="width:100%">
                    <div class="slidertext morpheus">
                        <h4 class="morpheus">Uldir Hc clear</h4>
                        G'huun liegt am Boden
                    </div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>
    </div>

    <!-- Über Uns ENDE -->
    <!-- Raids -->
    <div class="section" id="raids">
        <div class="tab">
            <button class="tablinks morpheus" id="defaultOpen" onclick="openTab(event, 'BfA')">BfA</button>
            <button class="tablinks morpheus" onclick="openTab(event, 'Legion')">Legion</button>
            <button class="tablinks morpheus" onclick="openTab(event, 'kader')">Kader</button>
            <button class="tablinks morpheus" onclick="openTab(event, 'Infos')">Infos</button>
            <button class="tablinks morpheus" onclick="openTab(event, 'Kalender')">Kalender</button>
        </div>

        <div id="BfA" class="tabcontent">
        <h3 id="headline" class="morpheus">Der Ewige Palast</h3>
             <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('palast')">
                <div class="skillbar-title" style="background: #a09797;"><span>Palast nhc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent">8/8</div>
            </div> <!-- End Skill Bar -->

             <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('palast')">
                <div class="skillbar-title" style="background: #a09797;"><span>Palast hc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent">8/8</div>
            </div> <!-- End Skill Bar -->

            <h3 id="headline" class="morpheus">Tiegel der Stürme</h3>
             <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('tiegel')">
                <div class="skillbar-title" style="background: #a09797;"><span>Tiegel hc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent">2/2</div>
            </div> <!-- End Skill Bar -->
        
            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('tiegel')">
                <div class="skillbar-title" style="background: #a09797;"><span>Tiegel nhc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent">2/2</div>
            </div> <!-- End Skill Bar -->

            <!-- Dazar -->
            <h3 id="headline" class="morpheus">Belagerung von Dazar'Alor</h3>
            <div class="skillbar clearfix" data-percent="20%" onmouseenter="hintergrundWechseln('dazar')">
                <div class="skillbar-title" style="background: #a09797;"><span>Dazar mythic</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent">2/9</div>
            </div> <!-- End Skill Bar -->
        
            <div class="skillbar clearfix" data-percent="100%" onmouseenter="hintergrundWechseln('dazar')"> 
                <div class="skillbar-title" style="background: #a09797;"><span>Dazar'Alor hc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix" data-percent="100%" onmouseenter="hintergrundWechseln('dazar')">
                <div class="skillbar-title" style="background: #a09797;"><span>Dazar'Alor nhc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <!-- Uldir -->
            <h3 id="headline" class="morpheus">Uldir</h3>
            <div class="skillbar clearfix" data-percent="100%" onmouseenter="hintergrundWechseln('uldir')">
                <div class="skillbar-title" style="background: #a09797;"><span>Uldir hc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent">8/8</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix" data-percent="100%" onmouseenter="hintergrundWechseln('uldir')">
                <div class="skillbar-title" style="background: #a09797;"><span>Uldir nhc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent">8/8</div>
            </div> <!-- End Skill Bar -->
        </div>

        <div id="Legion" class="tabcontent">
            <h3 id="headline" class="morpheus">Antorus, der brennende Thron</h3>
            <div class="skillbar clearfix" data-percent="100%" onmouseenter="hintergrundWechseln('antorus')">
                <div class="skillbar-title" style="background: #a09797;"><span>Antorus hc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('antorus')">
                <div class="skillbar-title" style="background: #a09797;"><span>Antorus nhc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <h3 id="headline" class="morpheus">Grabmal des Sageras</h3>
            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('grab')">
                <div class="skillbar-title" style="background: #a09797;"><span>Grabmal hc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('grab')">
                <div class="skillbar-title" style="background: #a09797;"><span>Grabmal nhc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <h3 id="headline" class="morpheus">Nachtfestung</h3>
            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('nachtfestung')">
                <div class="skillbar-title" style="background: #a09797;"><span>Nachtfest. hc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('nachtfestung')">
                <div class="skillbar-title" style="background: #a09797;"><span>Nachtfest. nhc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <h3 id="headline"  class="morpheus">Prüfung der Tapferkeit</h3>
            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('trials')">
                <div class="skillbar-title" style="background: #a09797;"><span>Trials hc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('trials')">
                <div class="skillbar-title" style="background: #a09797;"><span>Trials nhc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <h3 id="headline"  class="morpheus">Smaragdgrüner Alptraum</h3>
            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('smaragd')">
                <div class="skillbar-title" style="background: #a09797;"><span>Alptraum hc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix " data-percent="100%" onmouseenter="hintergrundWechseln('smaragd')">
                <div class="skillbar-title" style="background: #a09797;"><span>Alptraum nhc</span></div>
                <div class="skillbar-bar" style="background: #56090B;"></div>
                <div class="skill-bar-percent">9/9</div>
            </div> <!-- End Skill Bar -->
        </div>
        <div id="kader" class="tabcontent">
            <script>
            //AJAX Select
            "use strict"
            //Abrufen der Daten per AJAX
            let membercall = new XMLHttpRequest();
                membercall.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        let data = JSON.parse(this.responseText);
                        tabellenBauen(data);
                    }
            }
            membercall.open("GET", "php/select.php", true);
            membercall.send();
            </script>
            <div id="kader_container">
                <div class="kader" id="tanks">
                    <h4>Tanks</h4>                    
                    <table id="table_tanks"></table>
                </div>
                <div class="kader" id="heals">
                    <h4>Heiler</h4>
                    <table id="table_heals"></table>
                </div>
                <div class="kader" id="ranges">
                    <h4>Ranges</h4>
                    <table id="table_ranges"></table>
                </div>
                <div class="kader" id="melees">
                    <h4>Melees</h4>
                    <table id="table_melees"></table>
                </div>
            </div>
        </div>

        <div id="Infos" class="tabcontent">
            <h3 class="morpheus">Informationen</h3>
            <p id="raidtext">
            Wow, du hast dir bisher alles auf dieser Seite angeschaut und bist immernoch nicht weggerannt? Respekt! 
            Was? Du hast sogar ernsthaftes Interesse mit uns raiden zu gehen? Cool, hier gibt's noch weitere Informationen für dich: 
            Unsere aktuellen Raidzeiten sind: <br> <br>

            Montag, 20:30-23.00 <br>
            Mittwoch, 20:30-23.00 <br> <br>

            Aktuell legen wir montags immer die Bosse, die vom Mittwoch "übrig geblieben sind". Es soll sich ja auch niemand vernachlässigt fühlen. 
            Sollten wir in einer Woche schon am Mittwoch mit allem fertig sein, überlegen wir uns in der Regel etwas als Alternativplan. Was das dann ist? 
            Wieder eine sehr gute Frage. Also der Alternativplan kann sein, dass man einen Twinkrun macht, ggf. Timewalks geht oder eben M+. Wichtig ist uns, dass 
            wir trotzdem was gemeinsam machen. <br><br>

            Ach fast hätten wir noch was wichtiges vergessen: Unsere Links zu Raider.io und natürlich unsere Logs, die du dir gern mal anschauen kannst, um dir ein Bild zu machen. 
            Die Links findest du hier: <br>	
            <a href="https://raider.io/guilds/eu/anetheron/Order%20and%20Chaos" target="_blank"><span class="links"> Raider.io  </span></a> <br>
            <a href="https://www.warcraftlogs.com/guild/calendar/304372/" target="_blank"><span class="links">Warcraftlogs</span></a> <br>
            Soooo... jetzt weißt du aber wirklich so gut wie alles. <br>
            </p>
        </div>

        <div id="Kalender" class="tabcontent">    
            <h1>Monatskalender</h1>
            <!--Kalenderelement-->
            <div id="kalender_container">
                <table id="kalender_table"> </table>                
            </div>
            <button onclick="createNewKalender('prev')">Letzter</button>
            <button onclick="createNewKalender('next')">Nächster</button>
        </div>
    </div>
    </div>
    <!-- Raids Ende -->
    <div class="parallax morpheus" id="para_mythic">
        <h2 class="morpheus">Mythic Plus</h2>
        Affixe & Scores
    </div>

    <!-- Mythic Plus-->
    <div class="section" id="mythic">
        <div class="card_container">      
            <!-- Erstes Affix -->  
            <div class="card">
                <input id="input" type="checkbox" name="">
                <div class="toggle"></div>
                <div class="imgBox">
                    <img src="css/img/logo.png" alt="">
                </div>
                <div class="content">
                <h3 id="content_head_one" class="morpheus"></h3>
                    <p id="content_one"></p>
                </div>
            </div>

            <!-- Zweites Affix -->
            <div class="card">
                <input id="input" type="checkbox" name="">
                <div class="toggle"></div>
                <div class="imgBox">
                    <img src="css/img/logo.png" alt="">
                </div>
                <div class="content">
                <h3 id="content_head_two" class="morpheus"></h3>
                    <p id="content_two"></p>
                </div>
            </div>

            <!-- Drittes Affix -->
            <div class="card">
                <input id="input" type="checkbox" name="">
                <div class="toggle"></div>
                <div class="imgBox">
                    <img src="css/img/logo.png" alt="">
                </div>
                <div class="content">
                <h3 id="content_head_three" class="morpheus"></h3>
                    <p id="content_three"></p>
                </div>
            </div>

            <!-- Viertes Affix -->
            <div class="card">
                <input id="input" type="checkbox" name="">
                <div class="toggle"></div>
                <div class="imgBox">
                    <img src="css/img/logo.png" alt="">
                </div>
                <div class="content">
                <h3 id="content_head_four" class="morpheus"></h3>
                    <p id="content_four"></p>
                </div>
            </div>
            <!--###################################### -->
        </div>
        <div class="scores">
            <!-- Scoretabelle -->
            <div id="table_scores">
                <table id="tbl">
                    <tr>
                        <th class="morpheus">Platz</th>
                        <th class="morpheus">Name</th>
                        <th class="morpheus">Realm</th>
                        <th class="morpheus">Score</th>
                        <th class="morpheus"></th>
                    </tr>
                </table>
            <div id="details">
                <div id="details_container"></div>
            </div>
            </div> <!-- Ende Table -->
        </div><!-- Ende Scores -->
    </div>

    </div><!-- Mythic Plus ENDE-->
    <div class="parallax morpheus" id="para_kontakt">
        <h3 class="morpheus">Kontakt</h3>
    </div>
    <!-- Kontakt -->
    <div class="section" id="kontakt">
        <h3 class="morpheus">Wir suchen Verstärkung...</h3>
        <p> Du hast gefallen an unsere Gilde gefunden und willst uns kennenlernen? <br>
            Dann trage einfach deine Informationen (Charname, Realm und Klasse) ein und schreib uns eine Nachricht. <br>
            (Am besten mit Battle-Tag, damit wir uns auch bei dir melden können).
        </p>
    </div>
    <div id="contact_container">
        <div id="input_container">
            <label for="charname">Charname:</label>
            <input type="text" id ="charname" placeholder="Charname" autocomplete="off"> <br>

            <label for="realm">Realm:</label>
            <input type="text" id ="realm" placeholder="Realm" autocomplete="off"><br>

            <label for="class">Klasse:</label>
            <select id="class">
                <option value="dh">Dämonenjäger</option>
                <option value="druid">Druide</option>
                <option value="warlock">Hexenmeister</option>
                <option value="hunter">Jäger</option>
                <option value="warrior">Krieger</option>
                <option value="mage">Magier</option>
                <option value="monk">Mönch</option>
                <option value="paladin">Paladin</option>
                <option value="priest">Priester</option>
                <option value="shaman">Schamane</option>
                <option value="rogue">Schurke</option>
                <option value="dk">Todesritter</option>
            </select>
            <button onClick="getData()">Absenden</button>  
        </div> <!-- Ende Input Container -->
        <div id="textarea_container">
            <textarea name="messagetext" id="message" cols="30" rows="10" placeholder="Deine Nachricht an uns..."></textarea>
            <div id="contact_response"></div>
        </div>
    </div>
    <!--Footer -->
    <div class="section" id="footer">
        <ul id="footerlist">
            <li  class="morpheus"><a href="impressum.html" target="_blank" class="morpheus">Impressum</a> </li>
            <li><a href="https://worldofwarcraft.com/de-de/guild/eu/anetheron/order-and-chaos" target="_blank" class="morpheus">Battle.net</a></li>
            <li> <a href="https://lars.schleyer-sw.de/" target="_blank"><img src="css/img/subbi.png" width="32px"> </a> </li>
        </ul>
    </div>
</div> <!--ENDE WRAPPER -->
<script>
     $(document).ready(function() {
        $('.progress .progress-bar').css("width",
            function() {
                return $(this).attr("aria-valuenow") + "%";
            }
        )

        $('.skillbar').each(function(){
            $(this).find('.skillbar-bar').animate({
                width:$(this).attr('data-percent')
            },3000);
        });
    });

    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    
    document.getElementById("defaultOpen").click();
    function openTab(evt, tabName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
</body>
</html>

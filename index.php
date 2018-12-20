<?php
$server = "localhost";
$user ="root";
$password = "";
$dbname ="gilde";

$conn = new mysqli($server, $user, $password, $dbname);
$conn->set_charset("utf8");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>

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
                <img src="css/img/test.jpg" alt="css/img/test.jpg" width="100%" height="620px" margin-left="10px">
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
            <button class="tablinks" onclick="openTab(event, 'bfa')"  id="defaultOpen">BfA</button>
            <button class="tablinks" onclick="openTab(event, 'legion')" >Legion</button>
            <button class="tablinks" onclick="openTab(event, 'member')" >Raidkader</button>
            <button class="tablinks" onclick="openTab(event, 'infos')">Allgemeine Infos</button>
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
                <div id="member-1"> <!-- Tanks -->
                    <table>
                        <tr>
                            <th>Name</th><th>Klasse</th><th>icon</th>
                        </tr>
                        <?php
                        $tanks = "  SELECT member.name, classes.name as klasse
                                    FROM member
                                    INNER JOIN classes ON class = classes.id
                                    WHERE role =1
                                    ";
                        $result_tanks= $conn->query($tanks);
                        if($result_tanks->num_rows>0){
                            while($row = $result_tanks->fetch_assoc()) {
                                echo "<tr>
                                        <td>".$row['name']."</td><td>".$row['klasse']."<td>
                                    </tr>";;
                            } 
                        }                     
                        ?>
                    <!--    <tr><td>Pitfall</td><td>Magier</td><td><div class="class"></div></td></tr>
                        <tr><td>Gefearfach</td><td>Hexenmeister</td><td><div class="class"></div></td></tr> -->
                    </table>
                </div>

                <div id="member-2"><!-- Heals -->
                    <table>
                        <tr>
                            <th>Name</th><th>Klasse</th>
                        </tr>
                        <?php   
                        $heals ="    SELECT member.name, classes.name as klasse
                                     FROM member
                                     INNER JOIN classes ON class = classes.id
                                     WHERE role =2
                                    ";

                        $result_tanks= $conn->query($heals);
                        if($result_tanks->num_rows>0){
                            while($row = $result_tanks->fetch_assoc()) {
                                echo "<tr>
                                        <td>".$row['name']."</td><td>".$row['klasse']."<td>
                                </tr>";;
                            } 
                        }
                    ?>    
                    </table> <br>
                </div>
            </div><!-- ENDE MEMBER FLEX -->
            <div id="memberflex">
                <div id="member-3"><!-- Ranges -->
                    <table>
                        <tr>
                            <th>Name</th><th>Klasse</th>
                        </tr>
                        <?php   
                        $ranges ="  SELECT member.name, classes.name as klasse, member.rank, member.role
                                    FROM member
                                    INNER JOIN classes ON class = classes.id
                                    WHERE (role =3 AND rank =1)
                                    OR (role =3 AND rank =3)
                                    OR (role =3 AND rank =5)
                                    ";

                        $result_tanks= $conn->query($ranges);
                        if($result_tanks->num_rows>0){
                            while($row = $result_tanks->fetch_assoc()) {
                                echo "<tr>
                                        <td>".$row['name']."</td><td>".$row['klasse']."<td>
                                </tr>";;
                            } 
                        }
                    ?>   
                    </table>
                </div>

                <div id="member-4"><!-- Melees -->
                    <table>
                        <tr>
                            <th>Name</th><th>Klasse</th>
                        </tr>
                        <?php   
                        $melees ="  SELECT member.name, classes.name as klasse, member.rank, member.role
                                    FROM member
                                    INNER JOIN classes ON class = classes.id
                                    WHERE (role =4 AND rank =1)
                                    OR (role =4 AND rank =3)
                                    OR (role =4 AND rank =5)
                                    ";

                        $result_tanks= $conn->query($melees);
                        if($result_tanks->num_rows>0){
                            while($row = $result_tanks->fetch_assoc()) {
                                echo "<tr>
                                        <td>".$row['name']."</td><td>".$row['klasse']."<td>
                                </tr>";;
                            } 
                        }
                    ?>   
                    </table>
                </div>
            </div>
        </div>

        <div id="infos" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
            <p>
            Wow, du hast dir bisher alles auf dieser Seite angeschaut und bist immernoch nicht weggerannt? Respekt! <br>
            Was? Du hast sogar ernsthaftes Interesse mit uns raiden zu gehen? Cool, hier gibt's noch weitere Informationen für dich: <br>

            Unsere aktuellen <b>Raidzeiten</b> sind:
                    <ul>
                        <li>Montag, 20:30-22.00</li>
                        <li>Mittwoch, 20:30-22.00</li>
                    </ul>
            Aktuell legen wir montags immer die Bosse, die vom Mittwoch "übrig geblieben sind". Es soll sich ja auch niemand vernachlässigt fühlen. <br>
            Sollten wir in einer Woche schon am Mittwoch mit allem fertig sein, überlegen wir uns in der Regel etwas als Alternativplan. Was das dann ist? <br>
            Wieder eine sehr gute Frage. Also der Alternativplan kann sein, dass man einen Twinkrun macht, ggf. Timewalks geht oder eben M+. Wichtig ist uns, dass <br>
            wir trotzdem was <b>gemeinsam</b> machen. <br> <br>
            Ach fast hätten wir noch was wichtiges vergessen: Unsere Links zu Raider.io und natürlich unsere Logs, die du dir gern mal anschauen kannst, um dir ein Bild zu machen. <br>
            Die Links findest du hier:
            </p>
            <ul>
                <li><a href="https://raider.io/guilds/eu/anetheron/Order%20and%20Chaos" target="_blank">Raider.io</a> </li>
                <li><a href="https://www.warcraftlogs.com/guild/calendar/304372/" target="_blank"> WarcraftLogs </a></li>
            </ul>
            Soooo... jetzt weißt du aber wirklich so gut wie alles. <br>
            Also wenn du uns jetzt immernoch kennenlernen willst, dann zögere nicht und schreibe einen unserer Offiziere inGame an:
            <ul id="offilist">
                <li>Kreischi</li>
                <li>Reinerpunk</li>
                <li>Gefearfach</li>
                <li>Hauie</li>
                <li>Tack</li>
                <li>Subbi</li>
            </ul>
            
        </div>
    </div>
    </div> <!-- Raids ENDE -->

    <div id="mythic"> <!-- Mythic Plus -->.

    <h3>Mythic+ Instanzen </h3>
    <div id="affix_container">
        <div class="affix" id="one">
            <div id="t_one"></div> 
        </div>
        <div class="affix" id="two"></div>
        <div class="affix" id="three"></div>
        <div class="affix" id="four"></div>
    </div>

 
    <div id="t_two"></div>
    <div id="t_three"></div>
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

        $toplist = " SELECT member.name AS charname , member.score AS score, classes.name AS klasse, classes.color
                    FROM member
                    INNER JOIN classes
                    ON class = classes.id
                    ORDER BY score DESC
                    ";
        $result_toplist= $conn->query($toplist);
        if($result_toplist->num_rows>0){
            for ($i=0; $i<10; $i++){
                $row = $result_toplist->fetch_assoc();
                $y = $i+1;

                if ($i ==0){
                echo "<tr id='row-1'>
                    <td>".$y."</td><td>".$row['charname']."</td><td>".$row['klasse']."</td><td>".$row['score']."<td>
                </tr>";
                }else if ($i ==1){
                    echo "<tr id='row-2'>
                        <td>".$y."</td><td>".$row['charname']."</td><td>".$row['klasse']."</td><td>".$row['score']."<td>
                    </tr>";
                }else if ($i ==2){
                    echo "<tr id='row-3'>
                        <td>".$y."</td><td>".$row['charname']."</td><td>".$row['klasse']."</td><td>".$row['score']."<td>
                    </tr>";
                }else{
                    echo "<tr>
                        <td>".$y."</td><td>".$row['charname']."</td><td>".$row['klasse']."</td><td>".$row['score']."<td>
                    </tr>";
                } 
            }
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
            $('nav ul').toggleClass('active');
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

function openTab(evt, cityName) {
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

<!--

CREATE TABLE member
(
id serial,
name varchar(20),
realm varchar(20),
score decimal(6,2),
class integer,
rank integer,
role integer,
PRIMARY KEY (id),
FOREIGN KEY (class) REFERENCES classes(id)
);



klassencodes für    tanks(1):amaterau, sinner
                    heals(2):reínerpunk, kreischi, swarloz, 
                    ranges(3): hexer:9 mage:8, hunter:3, schamane:7,priester:5, druide:11
                    melees(4): schurke: 4, krieger:1, mönch:10, todesritter:6, paladin:2, dämonenjäger:12

                    Sonderfälle: druide, paladin

INSERT INTO member (name, realm, class, role)
VALUES
("Sinopa","Anetheron","2","2"),
("Syrthania","Anetheron","7","2"),
("Arkanix","Frostwolf","8","3")

RANGES
UPDATE member
SET role = 3
WHERE class = 9
OR class=8
OR class= 7
OR class= 5
OR class= 11
OR class= 3

MELEES
UPDATE member
SET role = 4
WHERE class = 4
OR class = 1
OR class = 10
OR class = 6
OR class = 2
OR class = 12

TANKS
UPDATE member
SET role= 1
WHERE name = "Sinnerella"
OR name ="Amaterasû"

HEALS
UPDATE member
SET role = 2
WHERE name = "kreischi"
OR name = "Swarloz"
OR name = "Reinerpunk"
OR name = "Syrthania "
OR name = "Sinopa "
-->
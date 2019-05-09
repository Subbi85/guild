"use strict";
let tabellenBauen=(data)=>{
    //DOM Elemente beschaffen
    let tanks = document.getElementById("table_tanks");
    let heals = document.getElementById("table_heals");
    let ranges = document.getElementById("table_ranges");
    let melees = document.getElementById("table_melees");

    //Neue DOM-Elemente aufbauen
    data.forEach(element => {
        let neueTr = document.createElement("tr");
        neueTr.setAttribute("style", "color:"+element.color);
        //Charname
        let neueTd = document.createElement("td");
        let neuerText = document.createTextNode(element.charname);
        neueTd.appendChild(neuerText);
        neueTr.appendChild(neueTd);

        //Realmname
        neueTd = document.createElement("td");
        neuerText = document.createTextNode(element.realm);
        neueTd.appendChild(neuerText);
        neueTr.appendChild(neueTd);

        //Wo soll angehängt werden?
        switch (element.role){
            case "tank":
                tanks.appendChild(neueTr);
                break;
            case "heal":
                heals.appendChild(neueTr);
                break;
            case "ranged":
                ranges.appendChild(neueTr);
                break
            case "melee":
                melees.appendChild(neueTr);
                break;
        }
    });
}

let hintergund = document.getElementById("Legion");
let hintergund_bfa = document.getElementById("BfA");
let hintergrundWechseln=(instanz)=>{

//Hintergundbild anpassen
    switch (instanz){
        case "smaragd":
            hintergund.style.backgroundImage="url('css/img/nightmare.jpg')";
            break;
        case "trials":
            hintergund.style.backgroundImage="url('css/img/tapferkeit.jpg')";
            break;
        case "nachtfestung":
            hintergund.style.backgroundImage="url('css/img/nachtfestung.jpg')";
            break;
        case "grab":
            hintergund.style.backgroundImage="url('css/img/grabmal.jpg')";
            break;
        case "antorus":
            hintergund.style.backgroundImage="url('css/img/antorus.jpg')";
            break;
        case "uldir":
            hintergund_bfa.style.backgroundImage="url('css/img/uldir.jpg')";
            break;
        case "dazar":
            hintergund_bfa.style.backgroundImage="url('css/img/bod.jpg')";
            break;
        case "tiegel":
            hintergund_bfa.style.backgroundImage="url('css/img/tiegel.jpg')";
            break;
    }
}

//####################### RAID PROGRESS #######################################################
function progression(){
    var blizzRequest = new XMLHttpRequest();
    blizzRequest.open('GET', 'https://raider.io/api/v1/guilds/profile?region=EU&realm=Anetheron&name=Order%20and%20Chaos&fields=raid_progression%2C%20raid_rankings');
    blizzRequest.onload=function(){
        var test = JSON.parse(blizzRequest.responseText);
        //Verarbeitung der Daten und Anpassen der Progressbars
        console.log(test);
    }
    blizzRequest.send();
    }
//####################### RAID PROGRESS ENDE #######################################################
progression();


//################# AFFIXE DER WOCHE #######################################################
function affixe(){                          /* Affixe der aktuellen Woche */
let blizzRequest = new XMLHttpRequest();
let affixes = [];
blizzRequest.open('GET', 'https://raider.io/api/v1/mythic-plus/affixes?region=EU&locale=de')
blizzRequest.onload=function(){
    var test = JSON.parse(blizzRequest.responseText);
    for(i=0; i<test.affix_details.length; i++){
        let affix = test.affix_details[i].name;
        let detail = test.affix_details[i].description;
        affixes.push(affix);
        affixes.push(detail);
    }
    console.log(affixes);
    //Display Data
    //#1
    document.getElementById("content_head_one").innerHTML = affixes[0];
    document.getElementById("content_one").innerHTML = affixes[1];
    //#2
    document.getElementById("content_head_two").innerHTML = affixes[2];
    document.getElementById("content_two").innerHTML = affixes[3];
    //#3
    document.getElementById("content_head_three").innerHTML = affixes[4];
    document.getElementById("content_three").innerHTML = affixes[5];
    //#4
    document.getElementById("content_head_four").innerHTML = affixes[6];
    document.getElementById("content_four").innerHTML = affixes[7];

}  
blizzRequest.send();
}                                           
//################# AFFIXE DER WOCHE ENDE #######################################################

affixe();
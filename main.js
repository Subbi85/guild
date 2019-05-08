"use strict";
let tabellenBauen=(data)=>{
    //DOM Elemente beschaffen
    let tanks = document.getElementById("table_tanks");
    let heals = document.getElementById("table_heals");
    let ranges = document.getElementById("table_ranges");
    let melees = document.getElementById("table_melees");

    //Neue DOM-Elemente aufbauen
    data.forEach(element => {
        console.log(element.charname);
        console.log(element.role);

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
            hintergund.style.backgroundImage="url('css/img/title.png')";
            break;
        case "trials":
            hintergund.style.backgroundImage="url('css/img/uldir.png')";
            break;
        case "nachtfestung":
            hintergund.style.backgroundImage="url('css/img/title.png')";
            break;
        case "grab":
            hintergund.style.backgroundImage="url('css/img/uldir.png')";
            break;
        case "antorus":
            hintergund.style.backgroundImage="url('css/img/title.png')";
            break;
        case "uldir":
            hintergund_bfa.style.backgroundImage="url('css/img/uldir.png')";
            break;
        case "dazar":
            hintergund_bfa.style.backgroundImage="url('css/img/title.png')";
            break;
        case "tiegel":
            hintergund_bfa.style.backgroundImage="url('css/img/uldir.png')";
            break;
    }
}

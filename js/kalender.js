"use strict";
let d = new Date();
let dm = d.getMonth() + 1;
let dj = d.getYear() + 1900;
let data;
let i=0, y=0;

//Warcraftlogs API Call
let getLogs=()=>{
    let logRequest = new XMLHttpRequest();
    logRequest.open('GET', 'https://www.warcraftlogs.com/v1/reports/guild/Order%20and%20Chaos/Anetheron/EU?api_key=4d28ab7982ae116d3249c22dbc8f3158');
    logRequest.onload=function(){
        var logJSON = JSON.parse(logRequest.responseText);
        //Calculate Dates
        calculateDates(logJSON);
        buildLogs(logJSON);
    }
    logRequest.send();
}

//Umrechnen der Timestamps in real Dates
let calculateDates=(data)=>{
    const stamp = data[0].start;
}

//Aufbau der Logcontainer
let buildLogs=(data)=>{
    var logContainer = document.getElementById('logContainer')
    for (let i =0; i<10; i++){
        let newLog = document.createElement('div');
        let newLogText = document.createTextNode("Palast HC");
        let link = document.createElement('a');
        //Aufbau der Links
        link.setAttribute("href", "https://www.warcraftlogs.com/reports/"+data[i].id);
        link.setAttribute("target", "_blank");
        link.appendChild(newLogText);
        newLog.appendChild(link);
        newLog.setAttribute('class', 'log');
        logContainer.appendChild(newLog);
    }
}

getLogs();
Kalender(dm+i, dj+y);

//Kalender aufbauen
function Kalender(Monat, Jahr) {
    let Monatsname = new Array("Januar", "Februar", "März", "April", "Mai", "Juni",
        "Juli", "August", "September", "Oktober", "November", "Dezember");
    let Tag = new Array("Mo", "Di", "Mi", "Do", "Fr", "Sa", "So");
    // aktuelles Datum für die spätere Hervorhebung ermitteln
    let jetzt = new Date();
    let DieserMonat = jetzt.getMonth() + 1;
    let DiesesJahr = jetzt.getYear() + 1900;
    let DieserTag = jetzt.getDate();
    // ermittle Wochentag des ersten Tags im Monat halte diese Information in Start fest
    let Zeit = new Date(Jahr, Monat - 1, 1);
    let Start = Zeit.getDay();
    //Hilfsletiable für die Termine
    if (Start > 0) {
        Start--;
    } else {
        Start = 6;
    }
    // die meisten Monate haben 31 Tage...
    let Stop = 31;
    // ...April (4), Juni (6), September (9) und November (11) haben nur 30 Tage...
    if (Monat == 4 || Monat == 6 || Monat == 9 || Monat == 11) --Stop;
    // ...und der Februar nur 28 Tage...
    if (Monat == 2) {
        Stop = Stop - 3;
        // ...außer in Schaltjahren
        if (Jahr % 4 == 0) Stop++;
        if (Jahr % 100 == 0) Stop--;
        if (Jahr % 400 == 0) Stop++;
    }
    let tabelle = document.getElementById('kalender_table');
    // schreibe Tabellenüberschrift
    let Monatskopf = Monatsname[Monat - 1] + " " + Jahr;
    let caption = tabelle.createCaption();

    caption.innerHTML = Monatskopf;
    // schreibe Tabellenkopf
    let row = tabelle.insertRow(0);
    for (let i = 0; i <= 6; i++) {
        let cell = row.insertCell(i);
        cell.innerHTML = Tag[i];
    }
    // ermittle Tag und schreibe Zeile
    let Tageszahl = 1;
    for (let i = 0; i <= 4; i++) {
        let row = tabelle.insertRow(1 + i);
        for (let j = 0; j <= 6; j++) {
            // Zellen vor dem Start-Tag in der ersten Zeile und Zeilen nach dem Stop-Tag werden leer aufgefüllt
            if (((i == 0) && (j <= 5) && (j < Start)) || (Tageszahl > Stop)) {
                let cell = row.insertCell(j);
                cell.innerHTML = ' ';
            }else{
                // normale Zellen werden mit der Tageszahl befüllt und mit der Klasse Kalendertag markiert
                // und um einen oder meherere eventuellen Termin erweitert
                let cell = row.insertCell(j);
                cell.innerHTML = Tageszahl;
                cell.className = 'kalendertag';

                // und der aktuelle Tag (heute) wird noch einmal speziell mit der Klasse "heute" markiert
                if ((Jahr == DiesesJahr) && (Monat == DieserMonat) && (Tageszahl ==
                        DieserTag)) {
                    cell.className = cell.className + ' heute';
                }
                Tageszahl++;
            }
        }
    }
}

//Löscht den bisherigen Kalender und erstellt einen neuen
let deleteKalender=()=>{
    let container = document.getElementById('kalender_container');
    container.removeChild(document.getElementById('kalender_table'));
}

//Aufbau des neuen Kalenders
let createNewKalender=(direction)=>{
    deleteKalender();
    let container = document.getElementById("kalender_container");
    let newKalender = document.createElement('table');
    newKalender.setAttribute('id', 'kalender_table');
    if (direction === 'next'){
        container.appendChild(newKalender);
        dm++
        if(dm>12){
            dm=1;
            dj++;
        }
    }
    if (direction === 'prev'){
        container.appendChild(newKalender);
        dm--;
        if(dm<=1){
            dm=12;
            dj--;
        }
    }
    Kalender(dm, dj);
}
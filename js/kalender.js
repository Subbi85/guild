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
        let kalenderObject = createObject(logJSON);
        console.log(logJSON);
        Kalender(dm, dj, kalenderObject);
    }
    logRequest.send();
}
getLogs();

//Erstellen eines bereinigten Objekts mit allen Daten
let createObject=(data)=>{
    let dateObjekt= [];
    for (let i=0; i<data.length; i++){
        dateObjekt.push({
            id : data[i].id,
            start : {
                        day: parseInt(calculateDate(data[i]).split(".")[0]),
                        month: parseInt(calculateDate(data[i]).split(".")[1]),
                        year: parseInt(calculateDate(data[i]).split(".")[2])
                    },
            title : data[i].title
        });
    }
    return dateObjekt;
}

//Umrechnung der Timestamps in real Dates
let calculateDate =(data)=>{
    let dataDate = data.start;
    let realDate = new Date(dataDate);
    let DateString = realDate.toString();
    let splits = DateString.split(" ");
    let realDateString = splits[2]+"."+calculateMonth(splits[1])+"."+splits[3];
    return realDateString;
}

//Berechnung des Monats
let calculateMonth=(month)=>{
    let number =0;
    switch (month){
        case "Jan":
            number = 1;
            break;
        case "Feb":
            number = 2;
            break;
        case "Mar":
            number = 3;
            break;
        case "Apr":
            number = 4;
            break;
        case "May":
            number = 5;
            break;
        case "Jun":
            number = 6;
            break;
        case "Jul":
            number = 7;
            break;
        case "Aug":
            number = 8;
            break;
        case "Sep":
            number = 9;
            break;
        case "Oct":
            number = 10;
            break;
        case "Nov":
            number = 11;
            break;
        case "Dec":
            number = 12;
            break;
    }
    return number;
}


//Kalender aufbauen
function Kalender(Monat, Jahr, data) {
    let monthlyData=[];
    //Bestimmen aller monatsrelevanten Termine
    for(let i=0; i<data.length; i++){
        if(data[i].start.month == Monat && data[i].start.year == Jahr){
            monthlyData.push(data[i]);
        }
    }
   //Kalender aufbauen
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

                monthlyData.sort(function(a, b){return a.start.day-b.start.day});
                //Termine Eintragen
                if (monthlyData[0].start.day!==0){
                    if(monthlyData[0].start.day === parseInt(Tageszahl)){
                        let termin= document.createElement("div");
                        termin.setAttribute("class", "log");
                        let ta = document.createElement("a");
                        ta= document.createElement("a");
                        ta.href= "https://www.warcraftlogs.com/reports/"+monthlyData[0].id;
                        ta.innerText = monthlyData[0].title;
                        ta.target="_blank";
                        termin.appendChild(ta);
                        cell.appendChild(termin);
                        monthlyData.shift();                        
                    }
                }
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
    let table = document.createElement("table");
    table.setAttribute("id", "kalender_table");
    container.appendChild(table);
}

//Aufbau des neuen Kalenders
let createNewKalender=(direction)=>{
    deleteKalender();
    if (direction === 'next'){
        dm++        
        getLogs();
    }
    if (direction === 'prev'){
        dm--;
        getLogs();
    }
}
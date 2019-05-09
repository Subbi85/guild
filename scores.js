"use strict";
//Globals
var text =  '{ "member" : [';  
var counter =0;
var size=0;

//AJAX-Abruf der SQL Daten
let member = new XMLHttpRequest();
member.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        let data = JSON.parse(this.responseText);
        size= data.length;
        for(let i=0; i<data.length; i++){
            let result = getScores(data[i]);
        } 
    }
}
member.open("GET", "php/select.php");
member.send();

//Beschaffen der Scores
let getScores=(data)=>{
    if (data.realm ==="Guldan")
        data.realm="Gul'dan";
    //AJAX-Syntax
    var blizzRequest = new XMLHttpRequest();
    blizzRequest.open('GET', 'https://raider.io/api/v1/characters/profile?region=eu&realm='+data.realm+'&name='+data.charname+'&fields=mythic_plus_scores')
    blizzRequest.onload=function(){
        var score = JSON.parse(blizzRequest.responseText);
        var current = score.mythic_plus_scores.all;
        text= createJSON(score, current);
    }                
    blizzRequest.send();
}

//Aufbau JSON
let createJSON=(score, current)=>{
    counter++;
    text += '{ "charname":"'+score.name+'" , "realm":"'+score.realm+'", "score": "'+current+'"}';
    if(counter <size){
        text+=',';
    }
    if(counter==size){
        text+= ']}';
        let obj = JSON.parse(text);
        sortJSON(obj);
        createDivs(obj);
        //sendPHP(obj, text);
    }
    return text;
}

//Sortiere das JSON
let sortJSON=(obj)=>{
    obj.member.sort(function(a,b){
        if(Number(a.score) == Number(b.score))
            return 0;
        if(Number(a.score) > Number(b.score))
            return -1;
        if(Number(a.score) < Number(b.score))
            return 1;
    });
}

//Send to PHP
let sendPHP=(obj)=>{
    let jsonstring = JSON.stringify(obj);
    console.log(jsonstring);
    document.getElementById("tabelle").value = jsonstring;
    //AJAX
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/receive.php");
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.send(jsonstring);
}

//Ausgabe der Daten im Div
let createDivs=(obj)=>{
    let display = document.querySelector("tbody");
    for(let i=0; i<10; i++){
        //Neue Reihe
        let y=i+1;
        let newTr= document.createElement("tr");
        newTr.setAttribute("id", "Rang"+y);
        //Alle td der Reihe
        //Platz        
        let newTd = document.createElement("td");
        let newText= document.createTextNode(i);
        newTd.appendChild(newText);
        newTr.appendChild(newTd);
        //Charname
        newTd = document.createElement("td");
        newText= document.createTextNode(obj.member[i].charname);
        newTd.appendChild(newText);
        newTr.appendChild(newTd);
        //Realm
        newTd = document.createElement("td");
        newText= document.createTextNode(obj.member[i].realm);
        newTd.appendChild(newText);
        newTr.appendChild(newTd);
        //Score
        newTd = document.createElement("td");
        newText= document.createTextNode(obj.member[i].score);
        newTd.appendChild(newText);
        newTr.appendChild(newTd);

        //Anhängen an Tabelle
        display.appendChild(newTr);
    }
}

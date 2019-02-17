guildMembers();
affixe();

function guildMembers(){                	/*Erstellen der Memberliste für weitere Funktionen */
var guildRequest = new XMLHttpRequest();

guildRequest.open('GET', 'https://eu.api.battle.net/wow/guild/Anetheron/Order%20and%20Chaos?fields=members&locale=en_GB&apikey=2z8d96ypab8zbed7nrbz29a3uqxskz5u')
guildRequest.onload=function(){
    var test = JSON.parse(guildRequest.responseText);
    var member= [];
    for (i=0; i<test.members.length; i++){
        var rank = test.members[i].rank;
        if(rank==1 || rank==3 || rank== 5){  //Eventuell Ränge nochmal anpassen!!!!! 
            member.push(test.members[i].character["name"]);
            member.push(test.members[i].character["realm"]);
            member.push(test.members[i].character["class"]);
        }
    }
    for(i=0; i<member.length; i=i+3){
        var name = member[i];
        var realm = member[i+1];
        var classes = member[i+2]
        getScore(name, realm, classes);
        }
    }
    console.log("ENDE");
    guildRequest.send();
}

function getScore(name, realm, classes){           /* M+ Scores der Member */
    var scores = [];
    var blizzRequest = new XMLHttpRequest();

    blizzRequest.open('GET', 'https://raider.io/api/v1/characters/profile?region=eu&realm='+realm+'&name='+name+'&fields=mythic_plus_scores')
    blizzRequest.onload=function(){

    var score = JSON.parse(blizzRequest.responseText);
    var current = score.mythic_plus_scores.all;
    
        scores.push(name);
        scores.push(realm);
        scores.push(current);
        scores.push(classes);
        console.log(scores);
    }
    blizzRequest.send(scores);
}



const getMembers=()=>{


}











function affixe(){                          /* Affixe der aktuellen Woche */
var blizzRequest = new XMLHttpRequest();
var affixes = [];
blizzRequest.open('GET', 'https://raider.io/api/v1/mythic-plus/affixes?region=EU&locale=de')
blizzRequest.onload=function(){
    var test = JSON.parse(blizzRequest.responseText);
    for(i=0; i<test.affix_details.length; i++){
        var affix = test.affix_details[i].name;
        var detail = test.affix_details[i].description;
        affixes.push(affix);
        affixes.push(detail);
    }
    document.getElementById("one").innerHTML=affixes[0];
    document.getElementById("t_one").innerHTML=affixes[1]; //Beschreibung
    document.getElementById("two").innerHTML=affixes[2];
    document.getElementById("t_two").innerHTML=affixes[3]; // Beschreibung 2
    document.getElementById("three").innerHTML=affixes[4];
    document.getElementById("t_three").innerHTML=affixes[5]; // Beschreibung 3
    document.getElementById("four").innerHTML=affixes[6];
    document.getElementById("t_four").innerHTML=affixes[7]; // Beschreibung 4
}  
blizzRequest.send();
}                                           
// AFFIXE ENDE //

function progression(){
var data = [];
//var data = [11, 11, 11, 7, 7, 7, 10,10,10, 9, 9, 9, 3, 3, 3];   < Datensicherung der Dungeons aus Legion
var blizzRequest = new XMLHttpRequest();
blizzRequest.open('GET', 'https://raider.io/api/v1/guilds/profile?region=eu&realm=Anetheron&name=Order%20and%20Chaos&fields=raid_progression')
// https://raider.io/api/v1/guilds/profile?region=EU&realm=Anetheron&name=Order%20and%20Chaos&fields=raid_progression%2C%20raid_rankings
blizzRequest.onload=function(){
    var test = JSON.parse(blizzRequest.responseText);
    for(var i=0; i<=4; i++){
        switch (i){
            case 0:
            var raid = "antorus-the-burning-throne";
            break;
            case 1:
            var raid = "the-emerald-nightmare";
            break;
            case 2:
            var raid = "the-nighthold";
            break;
            case 3:
            var raid = "tomb-of-sargeras";
            break;
            case 4:
            var raid = "trial-of-valor";
            break;
            case 5:
            var raid ="uldir";
            break;
        }
    data.push(test.raid_progression[raid].total_bosses);
    data.push(test.raid_progression[raid].normal_bosses_killed);
    data.push(test.raid_progression[raid].heroic_bosses_killed);
    }
}
blizzRequest.send();
}
 

//Globals
affixe();

function guildMembers(){                	/*Erstellen der Memberliste für weitere Funktionen */
    console.log("Ja hallo");
var guildRequest = new XMLHttpRequest();
guildRequest.open('GET', 'https://eu.api.blizzard.com/wow/guild/Anetheron/Order%20and%20Chaos?fields=members&locale=en_US&access_token=US40yiXoUpTd1QPa5lC4ewfDEpjONjtrZ0')
guildRequest.onload=function(){
    var test = JSON.parse(guildRequest.responseText);
    var member= ["test"];   

    console.log(member);
    console.log(test);
    }
guildRequest.send()
}

//####################### RAID PROGRESS #######################################################
function progression(){
    var data = [];
    var blizzRequest = new XMLHttpRequest();
    blizzRequest.open('GET', 'https://raider.io/api/v1/guilds/profile?region=EU&realm=Anetheron&name=Order%20and%20Chaos&fields=raid_rankings%2C%20raid_progression');
    blizzRequest.onload=function(){
        var test = JSON.parse(blizzRequest.responseText);
        //Verarbeitung der Daten und Anpassen der Progressbars

        let tess= document.querySelector("#bla");
        tess.percent="50%";
        console.log(test);
    }
    blizzRequest.send();
    }
//####################### RAID PROGRESS ENDE #######################################################
progression();


// FERTIGE FUNKTIONEN:
//###################### GET SCORES #######################################################
let resultObj;
let array=[];
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
            array.push(scores);
    }
    blizzRequest.send();
}
//################# GET SCORES ENDE  ##################################################


let firstPart=()=>{
    getScore('Kreischi', 'Nathrezim', 'Schaman');
    getScore('Amaterasû','Anetheron','tank');
    getScore('Sinnerella','Guldan','tank');
    getScore('Parulor','Anetheron','melee');
    getScore('Tack','Guldan','melee');
    getScore('Corruption','Thrall','melee');
    getScore('Darkeddie','Rajaxx','melee');
    getScore('Sinopa','Anetheron','melee');
    getScore('Aywi','Rajaxx','melee');
    getScore('Tievy','Anetheron','melee');
    console.log({array});
}

let secondPart=()=>{
    getScore('Valafar','Guldan','melee');
    getScore('Menardius','Guldan','melee');
    getScore('Lýnxx','Anetheron','melee');
    getScore('Nyalarthotep','Anetheron','melee');
    getScore('Subbì','Anetheron','heal');
    getScore('Kreischi','Nathrezim','heal');
    getScore('Büffelhüfte','Thrall','heal');
    getScore('Ginflut','Anetheron','heal');
    getScore('Damari','Anetheron','ranged');
    getScore('Pitfall','Anetheron','ranged');
    console.log({array});
}


secondPart();
//################# AFFIXE DER WOCHE #######################################################
function affixe(){                          /* Affixe der aktuellen Woche */
let blizzRequest = new XMLHttpRequest();
let affixes = [];
blizzRequest.open('GET', 'https://raider.io/api/v1/mythic-plus/affixes?region=EU&locale=de')
blizzRequest.onload=function(){
    var test = JSON.parse(blizzRequest.responseText);
    console.log(test);
    for(i=0; i<test.affix_details.length; i++){
        let affix = test.affix_details[i].name;
        let detail = test.affix_details[i].description;
        affixes.push(affix);
        affixes.push(detail);
    }
    document.getElementById("affixOne").innerHTML=affixes[0];
    document.querySelector("#affixOneText").innerHTML=affixes[1]; //Beschreibung
    document.getElementById("affixTwo").innerHTML=affixes[2];
    document.getElementById("affixTwoText").innerHTML=affixes[3]; // Beschreibung 2
    document.getElementById("affixThree").innerHTML=affixes[4];
    document.getElementById("affixThreeText").innerHTML=affixes[5]; // Beschreibung 3
    document.getElementById("affixFour").innerHTML=affixes[6];
    document.getElementById("affixFourText").innerHTML=affixes[7]; // Beschreibung 4
}  
blizzRequest.send();
}                                           
//################# AFFIXE DER WOCHE ENDE #######################################################
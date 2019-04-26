//Globals
let resultObj;
let array=[];



affixe();

function guildMembers(){                	/*Erstellen der Memberliste für weitere Funktionen */
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
            console.log(scores[2]);
            array.push(scores);
    }
    blizzRequest.send();
}
//################# GET SCORES ENDE  ##################################################
let firstPart=()=>{
    getScore('Amaterasû','Anetheron','tank');
    getScore('Sinnerella',"Gul'dan",'tank');
    getScore('Parulor','Anetheron','melee');
    getScore('Tack',"Gul'dan",'melee');
    getScore('Darkeddie','Rajaxx','melee');
    getScore('Sinopa','Anetheron','melee');
    getScore('Aywi','Rajaxx','melee');
    getScore('Tievy','Anetheron','melee');
    getScore('Corruptìon','Thrall','melee');
    getScore('Valafar','Anetheron','melee');
    getScore('Lýnxx','Anetheron','melee');
    getScore('Nyalarthotep','Anetheron','melee');
    getScore('Kreischi', 'Nathrezim', 'heal');
    getScore('Büffelhüfte','Thrall','heal');
    getScore('Ginflut','Anetheron','heal');
    getScore('Damari','Rajaxx','ranged');
    getScore('Pitfall','Anetheron','ranged');
    getScore('Gefearfach','Anetheron','ranged');
    getScore('Hauie','Anetheron','ranged');
    getScore('Machtgeil','Rajaxx','ranged');
    getScore('Lorelin','Anetheron','ranged');
    getScore('Sêppêl','Guldan','ranged');
    getScore('Vinkly','Anetheron','ranged');
    getScore('Nanir','Anetheron','ranged');
    getScore('Swarloz','Anetheron','ranged');
}
firstPart();

function Score (name, realm,score){
    this.name= name,
    this.realm=realm,
    this.getScore= function(){
        var blizzRequest = new XMLHttpRequest();
        blizzRequest.open('GET', 'https://raider.io/api/v1/characters/profile?region=eu&realm='+realm+'&name='+name+'&fields=mythic_plus_scores')
        blizzRequest.onload=function(){
        var score = JSON.parse(blizzRequest.responseText);
        var current = score.mythic_plus_scores.all;

        this.score=current;
    }
    blizzRequest.send();
    }
}

let score_1 = new Score('Subbi', 'Anetheron');
console.log(score_1);


let tabelleAufbauen=()=>{
    console.log(array);

    for(let i=0; i<10; i++){
        console.log(array);
        
    }

}
tabelleAufbauen();

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
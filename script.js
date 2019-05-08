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
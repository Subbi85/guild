
function blizz(){
    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET', 'https://eu.api.battle.net/wow/character/Anetheron/Subb%C3%AC?fields=guild&locale=de_DE&apikey=2z8d96ypab8zbed7nrbz29a3uqxskz5u')
    ourRequest.onload=function(){
        var test = JSON.parse(ourRequest.responseText);
        var data = ourRequest[0].race;
        console.log(ourRequest.responseText);
    }
    ourRequest.send();
}


/*
function apicall_blizz(){
    var blizzRequest = new XMLHttpRequest();
    blizzRequest.open('GET', 'https://raider.io/api/v1/mythic-plus/affixes?region=EU&locale=en')
    blizzRequest.onload=function(){
        var test = JSON.parse(blizzRequest.responseText);
        console.log(blizzRequest.responseText);

    }
    blizzRequest.send();
}
*/
/*
function member_array(){

    var array = new Array;

    array[0] = {"name":"Kreischi", "server":"Nathrezim", "score":""};
    array[1] = {"name":"Subbì", "server":"Anetheron", "score":""};
    array[2] = {"name":"Fluxzi", "server":"Anetheron", "score":""};
    array[3] = {"name":"Ilidead", "server":"Anetheron", "score":""};
    

        for(i=0; i<array.length; i++){

            
            var name = array[i].name;
            var server = array[i].server;
            var score = apicall_char(name, server);
            
            console.log (score);
        }
}

function apicall_char(name, server){

    var name = name;
    var server = server;
    var affixRequest = new XMLHttpRequest();

    console.log(name);
    console.log(server);
        
    affixRequest.open('GET', 'https://raider.io/api/v1/characters/profile?region=EU&realm='+server+'&name='+name+'&fields=mythic_plus_scores')

    affixRequest.onload=function(){
        var test = JSON.parse(affixRequest.responseText);
        var score = test.mythic_plus_scores['all'];

        console.log(affixRequest.responseText);
        document.getElementById('all').innerHTML = "all: "+test.mythic_plus_scores['all'];
        console.log(score);
        return score;
    }
    affixRequest.send();   
}



/* Asynchron */
/*

function member(){

    var array = new Array;

    array[0] = {"name":"Kreischi", "server":"Nathrezim", "score":""};
    array[1] = {"name":"Subbì", "server":"Anetheron", "score":""};
    array[2] = {"name":"Fluxzi", "server":"Anetheron", "score":""};
    array[3] = {"name":"Hauie", "server":"Anetheron", "score":""};

        for(i=0; i<array.length; i++){
            var name = array[i].name;
            var server = array[i].server;
            var score = asynchronous(name, server);
        }
}

function asynchronous(name, server){
    var server = server;
    var name = name;
    var asynchronous = new XMLHttpRequest();
    asynchronous.open('GET', 'https://raider.io/api/v1/characters/profile?region=EU&realm='+server+'&name='+name+'&fields=mythic_plus_scores')


    if (asynchronous.status >= 200 && request.status < 300) {
      
     } else {
        console.log(name);
        console.log (asynchronous.responseText);
        var score = asynchronous.mythic_plus_scores['all'];
     }
     asynchronous.send();
}


 /*

function check (data){
   var request = new XMLHttpRequest();
   request.open("POST","usernamecheck.php");
   request.addEventListener('load', function(event) {
      if (request.status >= 200 && request.status < 300) {
         console.log(request.responseText);
      } else {
         console.warn(request.statusText, request.responseText);
      }
   });
   request.send(data);
}
 */
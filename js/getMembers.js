"use strict";

//Beziehe die Memberliste aus der Blizz-App
let getMembersFromBlizzard=()=>{
    console.log("getMember!");
    var url ="https://eu.api.blizzard.com/wow/guild/Anetheron/Order%20and%20Chaos?fields=members&locale=de_DE&access_token=USQnNFN9vxc662W6hiZk10jECamvsaYHzs";
    var clientID = "a79cb751419c4c1a8afd54a6c244f1c1";
    var secret = "mRUt4WL9XGV23oncnKp4jXsepXEHd82u";

    //AJAX-Syntax
    var memberRequest = new XMLHttpRequest();
    memberRequest.open('GET', url )
    memberRequest.setRequestHeader("Content-Type", "application/json");
    memberRequest.onload=function(){
        var memberList = JSON.parse(memberRequest);
        
        
    }                
    memberRequest.send();
}


getMembersFromBlizzard();
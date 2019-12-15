//Globals
window.onload=()=>{
    //Abrufen der Daten per AJAX
    let discord = new XMLHttpRequest();
    discord.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let url = JSON.parse(this.responseText);
            console.log(url[0].url);
        }
    }
    discord.open("GET", "php/dc.php", true);
    discord.send();
}

//Senden einer Nachricht an Discord
function sendDiscordMessage (url){
    var method = "POST";
    var message =  'Neue Nachricht von order-and-chaos.eu';
    var payload = JSON.stringify({
        "content": message,
        "embeds": [
            {
                "title": "Order and Chaos.eu",
                "color": 7498194,
                "url": "https://order-and-chaos.eu",
                "thumbnail": {
                    "url": "https://order-and-chaos.eu/css/img/classicons/"+url.class+".png"
                },
                "author": {
                    "name": url.char+", "+url.realm,
                    "url": "https://worldofwarcraft.com/de-de/character/eu/"+url.realm+"/"+url.char,
                },

            "fields": [
                {
                    "name": "Charname: ",
                    "value": url.char
                },
                {
                    "name": "Realm: ",
                    "value": url.realm
                },
                {
                    "name": "Nachricht: ",
                    "value": url.message
                }
            ]
            }
        ]
      });

    // Sending and receiving url in JSON format using POST method
    var xhr = new XMLHttpRequest();
    xhr.open(method , discordUrl, true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && (xhr.status === 200 || xhr.status === 204)) {
            console.log(xhr.responseText);
            let response = document.getElementById("contact_response");
            response.value = " Nachricht versendet";
            refreshForm();
        }else if(xhr.status === 400){
            let response = document.getElementById("contact_response");
            response.innerHTML ="Fehlerhafte Eingabe"
        }
    };
    xhr.send(payload);
}

//Zieht sich die Informationen aus dem Formular
function geturl(){
    let messageObject = {
        char : document.getElementById("charname").value,
        realm: document.getElementById("realm").value,
        class : document.getElementById("class").value,
        message : document.getElementById("message").value
    }
    createCharIcon(messageObject);
}

//Aufbauen der Farben und Icons
function createCharIcon(url){
    switch (url.class){
        case "dk" :
            {url.icon = "<:dk:438277556886700044>"}
            {url.color = "#C41F3B"}
        break;
        case "dh" :
            {url.icon = "<:dh:438277557377302538>"}
            {url.color = "#A330C9"}
        break;
        case "druid" :
            {url.icon = "<:druid:438277557268512769>"}
            {url.color = "#FF7D0A"}
        break;   
        case "warlock" :
            {url.icon = "<:warlock:438277557213986829>"}
            {url.color = "#9482C9"}
        break;   
        case "hunter" :
            {url.icon = "<:hunter:438277557083832321>"}
            {url.color = "#ABD473"}
        break;   
        case "warrior" :
            {url.icon = "<:warry:438277557054603265>"}
            {url.color = "#C79C6E"}
        break;   
        case "mage" :
            {url.icon = "<:mage:438277557486616576>"}
            {url.color = "#69CCF0"}
        break;   
        case "monk" :
            {url.icon = "<:monk:438277557318713345>"}
            {url.color = "#00FF96"}
        break;   
        case "paladin" :
            {url.icon = "<:pala:438277557406793729>"}
            {url.color = "#F58CBA"}
        break;   
        case "priester" :
            {url.icon = "<:priest:495430414870249472>"}
            {url.color = "#FFFFFF"}
        break;   
        case "shaman" :
            {url.icon = "<:shaman:438277557369044992>"}
            {url.color = "#0070DE"}
        break;   
        case "rogue" :
            {url.icon = "<:rogue:438277557289222145>"}
            {url.color = "#FFF569"}
        break;   
    }
    sendDiscordMessage(url);
}

//
function refreshForm(){
    let charname = document.getElementById("charname");
    let realm = document.getElementById("realm");
    let message = document.getElementById("message");

    charname.value ="";
    realm.value ="";
    message.value = "";
}
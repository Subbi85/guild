//Globals
function getUrl(data){
    //Abrufen der Daten per AJAX
    let discord = new XMLHttpRequest();
    discord.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let url = JSON.parse(this.responseText);
            console.log(url[0].url);
            data.url = url[0].url;
            sendDiscordMessage(data)
        }
    }
    discord.open("GET", "php/dc.php", true);
    discord.send();
}

function sendDiscordMessage (data){
    console.log({data});
}

//Senden einer Nachricht an Discord
function sendDiscordMessage2 (data){
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
                    "url": "https://order-and-chaos.eu/css/img/classicons/"+data.class+".png"
                },
                "author": {
                    "name": data.char+", "+data.realm,
                    "url": "https://worldofwarcraft.com/de-de/character/eu/"+data.realm+"/"+data.char,
                },

            "fields": [
                {
                    "name": "Charname: ",
                    "value": data.char
                },
                {
                    "name": "Realm: ",
                    "value": data.realm
                },
                {
                    "name": "Nachricht: ",
                    "value": data.message
                }
            ]
            }
        ]
      });

    // Sending and receiving data in JSON format using POST method
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
function getData(){
    let messageObject = {
        char : document.getElementById("charname").value,
        realm: document.getElementById("realm").value,
        class : document.getElementById("class").value,
        message : document.getElementById("message").value
    }
    createCharIcon(messageObject);
}

//Aufbauen der Farben und Icons
function createCharIcon(data){
    switch (data.class){
        case "dk" :
            {data.icon = "<:dk:438277556886700044>"}
            {data.color = "#C41F3B"}
        break;
        case "dh" :
            {data.icon = "<:dh:438277557377302538>"}
            {data.color = "#A330C9"}
        break;
        case "druid" :
            {data.icon = "<:druid:438277557268512769>"}
            {data.color = "#FF7D0A"}
        break;   
        case "warlock" :
            {data.icon = "<:warlock:438277557213986829>"}
            {data.color = "#9482C9"}
        break;   
        case "hunter" :
            {data.icon = "<:hunter:438277557083832321>"}
            {data.color = "#ABD473"}
        break;   
        case "warrior" :
            {data.icon = "<:warry:438277557054603265>"}
            {data.color = "#C79C6E"}
        break;   
        case "mage" :
            {data.icon = "<:mage:438277557486616576>"}
            {data.color = "#69CCF0"}
        break;   
        case "monk" :
            {data.icon = "<:monk:438277557318713345>"}
            {data.color = "#00FF96"}
        break;   
        case "paladin" :
            {data.icon = "<:pala:438277557406793729>"}
            {data.color = "#F58CBA"}
        break;   
        case "priester" :
            {data.icon = "<:priest:495430414870249472>"}
            {data.color = "#FFFFFF"}
        break;   
        case "shaman" :
            {data.icon = "<:shaman:438277557369044992>"}
            {data.color = "#0070DE"}
        break;   
        case "rogue" :
            {data.icon = "<:rogue:438277557289222145>"}
            {data.color = "#FFF569"}
        break;   
    }
    getUrl();

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
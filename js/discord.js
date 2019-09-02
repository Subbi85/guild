//Senden einer Nachricht an Discord
function sendDiscordMessage (data){
    var discordUrl = 'https://discordapp.com/api/webhooks/617101092907515905/gj89qvMQogvFJHqMrOdH10XbGN4iamFbH7qUpvkYSIZtCPNZFIgUDjyFcVrMXoSaV6la';
    var discordUrl = 'https://discordapp.com/api/webhooks/617116859103313927/S4KkP0PLfCNTqE2pyNeW5954JNvv9jv6Uu-NcWethyM6lCSZqsojWLQJxrsbSWivO3qo';
    var method = "POST";
    var message =  'Neue Nachricht von order-and-chaos.eu';
    var payload = JSON.stringify({
        "content": message,
        "embeds": [
            {
                "title": "Order and Chaos.eu",
                "color": 7498194,
                "url": "https://orderand-chaos.eu",
                "thumbnail": {
                    "url": "https://order-and-chaos.eu/css/img/logo.png"
                },
                "author": {
                    "name": "Test",
                    "url": "https://worldofwarcraft.com/de-de/character/eu/0+data.realm+/+data.char",
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

    console.log(data);
    console.log(payload);
    // Sending and receiving data in JSON format using POST method
    var xhr = new XMLHttpRequest();
    xhr.open(method , discordUrl, true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        console.log('Status: ', xhr.status, xhr.readyState);
        if (xhr.readyState === 4 && (xhr.status === 200 || xhr.status === 204)) {
            console.log(xhr.responseText);

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
    console.log(messageObject);
}

//Aufbauen der Farben und Icons
function createCharIcon(data){
    console.log("test");
    console.log(data);
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
    console.log(data);
    sendDiscordMessage(data);
}

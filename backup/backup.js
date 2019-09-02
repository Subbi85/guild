//Senden einer Nachricht an Discord
function sendDiscordMessage (data){
    //var discordUrl = 'https://discordapp.com/api/webhooks/617101092907515905/gj89qvMQogvFJHqMrOdH10XbGN4iamFbH7qUpvkYSIZtCPNZFIgUDjyFcVrMXoSaV6la';
    var discordUrl = 'https://discordapp.com/api/webhooks/617116859103313927/S4KkP0PLfCNTqE2pyNeW5954JNvv9jv6Uu-NcWethyM6lCSZqsojWLQJxrsbSWivO3qo';
    var method = "POST";
    var message =  'Neue Nachricht von order-and-chaos.eu';
    var payload = JSON.stringify({
        "content": message,
        "embeds": [
            {
            "title": "Order and Chaos.eu",
            "url": "https://orderand-chaos.eu",
            "color": 13698047,
            "thumbnail": {
                "url": "https://order-and-chaos.eu/css/img/logo.png"
            },
            "author": {
                "name": data.char+","+ data.realm,
                "url": "https://worldofwarcraft.com/de-de/character/eu/"+data.realm+"/"+data.char,
                "icon_url": "https://cdn.discordapp.com/embed/avatars/0.png"
            },
            "fields": [
                {
                    "name": "Charname: ",
                    "value": data.name
                },
                {
                    "name": "Realm: ",
                    "value": "Anetheron"
                },
                {
                    "name": "Nachricht: ",
                    "value": "Hier könnte Ihre Werbung stehen"
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
    console.log(messageObject);
    sendDiscordMessage(messageObject);
}

/*
Klassenicons für Discord

<:dk:438277556886700044>
#C41F3B

<:dh:438277557377302538>
#A330C9

<:druid:438277557268512769>
#FF7D0A

<:hunter:438277557083832321>
#ABD473

<:mage:438277557486616576>
#69CCF0

<:monk:438277557318713345>
#00FF96

<:pala:438277557406793729>
#F58CBA

<:priest:495430414870249472>
#fff

<:rogue:438277557289222145>
#FFF569

<:shaman:438277557369044992>
#0070DE

<:warlock:438277557213986829>
#9482C9

<:warry:438277557054603265>
#C79C6E

*/
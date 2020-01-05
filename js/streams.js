//Globals
let info = document.getElementById("info");
let checker = false;
let container = document.createElement("div");
container.setAttribute("class", "streamcontainer");

//Aufbauen der divs für online Streams
let buildResult=(name , status)=>{
    info.appendChild(container);
    if(checker === true){
        if(status === "online"){
            let newStream = document.createElement("div");
            newStream.classList.add("stream");
            let streamText = document.createTextNode(name+" ist gerade "+status);
            newStream.appendChild(streamText);
            buildiFrame(name, newStream);
        }
    }else if(checker === false){
        let noContent = document.createElement("div");
        noContent.classList.add("noContent");
        let noContentText = document.createTextNode(name+" ist offline! ");
        noContent.appendChild(noContentText);
        container.appendChild(noContent);
    }
}

//iFrame aufbauen
let buildiFrame=(name)=>{
    var ifrm = document.createElement("iframe");
    ifrm.setAttribute("src", "https://player.twitch.tv/?channel="+name);
    ifrm.style.width = "200px";
    ifrm.style.height = "200px";        
    ifrm.allowFullscreen = "true";
    container.appendChild(ifrm);
}

//Abrufen der Streamstatus 
let getStreamInfos=()=>{
var streams = ["kreischi_", "deathranger1995", "regulatorex", "sinnerlein"];
info.appendChild(container);
    for(let i=0; i<streams.length; i++){
        checkStream(streams[i]);
    }
}   

//let myIntervall = setInterval(getStreamInfos, 1000);
function checkStream(streamname){
var status = "";
var xhr = new XMLHttpRequest()
var client_id = "5eqgnru1njtqd2r2n7hm7qm3vt3kd7";
    xhr.open("GET", "https://api.twitch.tv/kraken/streams/kreischi_?client_id=client_id, true");
    xhr.onreadystatechange = function() {
    if(xhr.readyState == 4) {
        var data = JSON.parse(xhr.responseText);
        if(data["stream"] === null){
            status = "offline"
        }else{
            status = "online"
            checker = true;
        }
        //buildResult(streamname, status);
    }
    }
    xhr.send();
}

//init
getStreamInfos();

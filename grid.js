"use strict";
//Globals
let slide=1;
let created = false;
let max, former;

//Laden der Bilder bei Seitenaufruf
window.onload=()=>{
    let boxList = document.querySelectorAll('.box');
    for(let i=0; i<boxList.length; i++){
        createImage(i, 'box');
    }
}

//Erstellen der BildContainer für die Gallerie
let createImage=(index)=>{
    let box = document.getElementById('box-'+index);
    let newImg= document.createElement('img');
    newImg.setAttribute('src', 'pic'+index+'.png')
    if(index <=3 || index >=6){        
        newImg.setAttribute('width', '300px')
    }else{
        newImg.setAttribute('width', '605px')
    }
    newImg.setAttribute('height', '300px');
    box.appendChild(newImg);        
}

//OnClick Function "Bild groß anzeigen"
let zoomIn=(e)=>{
    slide = e.target.src.charAt(26);
    buildBorder();
    initGalerie();
}

//Init Galerie
let initGalerie=()=>{
    document.getElementById('id01').style.display='block';
    let display = document.getElementById('pic-display');
    display.style.backgroundImage= "url('pic"+slide+".png')";
    initMiniPics();
}

//Kleine Bilder initialisieren
let initMiniPics=()=>{
    let picList = document.querySelectorAll('.pics');
    if(created === false){
        for(let i=0; i<picList.length; i++){
            getSmallImages(i);
        }        
    }
    created = true;
}

let getSmallImages=(index)=>{
    let pic = document.getElementById('pic-'+index);
    let newImg = document.createElement('img');
    newImg.setAttribute('src', 'pic'+index+'.png');
    newImg.setAttribute('width', '100%');
    newImg.setAttribute('height', '100%');
    pic.appendChild(newImg);
}

//Bilder wechseln und Slideindex anpassen
let switchPic=(index)=>{
    let test = document.getElementById('pic-display');
    test.style.backgroundImage= "url('pic"+index+".png')";
    slide = index;
    buildBorder();
}

//Roten Rahmen um das aktive Bild anzeigen
let buildBorder=()=>{
    enableActiveClass();
    disableActiveClasee();
    former = slide;    
}   

let enableActiveClass=()=>{
    document.getElementById("box-"+slide).classList.toggle("active");
    document.getElementById("pic-"+slide).classList.toggle("active");
}

let disableActiveClasee=()=>{
    if(former != undefined){
        document.getElementById("box-"+former).classList.toggle("active");
        document.getElementById("pic-"+former).classList.toggle("active");
    }
}

//Slider Arrows
let nextSlide=()=>{
    let display = document.getElementById('pic-display');    
    if(slide <9){
        slide++;        
    }else{
        slide=1;
    }
    display.style.backgroundImage= "url('pic"+slide+".png')";
    buildBorder();
}

let formerSlide=()=>{
    let display = document.getElementById('pic-display');
    if(slide<1){
        slide = 9;
    }else{
        slide--;        
    }
    display.style.backgroundImage= "url('pic"+slide+".png')";
    buildBorder();
}
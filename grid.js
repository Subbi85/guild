"use strict";


//Laden der Bilder bei Seitenaufruf
window.onload=()=>{
    let boxList = document.querySelectorAll('.box');
    console.log(boxList);
    for(let i=0; i<boxList.length; i++){
        createImage(i);
    }
}

//Erstellen der BildContainer für die Gallerie
let createImage=(index)=>{
    let box = document.getElementById('box-'+index);
    let newImg= document.createElement('img');
    newImg.classList.add('limiter')
    newImg.setAttribute('src', 'pic1.png')
    if(index <=3 || index >=6){        
        newImg.setAttribute('width', '300px')
    }else{
        newImg.setAttribute('width', '605px')
    }
    newImg.setAttribute('height', '300px');
    box.appendChild(newImg);        
}

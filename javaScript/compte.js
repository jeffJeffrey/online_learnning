let bntCon = document.getElementById("btnCon");
let btnIns = document.getElementById("btnIns");
let nameField = document.getElementById("nameField");
let niveauField = document.getElementById("niveauField");
let title = document.getElementById("title");


bntCon.onclick = function(){
    nameField.style.maxHeight = "0";
    niveauField.style.maxHeight = "0";
    title.innerHTML = "Connexion";
    btnIns.classList.add("disable");
    bntCon.classList.remove("disable");
}

btnIns.onclick = function(){
    nameField.style.maxHeight = "60px";
    niveauField.style.maxHeight = "60px";
    title.innerHTML = "Inscription";
    btnIns.classList.remove("disable");
    bntCon.classList.add("disable");
}
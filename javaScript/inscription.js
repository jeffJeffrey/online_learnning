function verifNom(){
    text = document.getElementById("name").value.trim();
    if(text == ""){
        erreur = document.getElementById("erreurnom");
        erreur.innerHTML = "le nom est requie!!";
        bnom = document.getElementById("name");
        bnom.style.borderColor = "rgba(216, 106, 106, 0.884)";
    }else if( text != "" && text.length < 2){
        erreur = document.getElementById("erreurnom");
        erreur.innerHTML = "minimum deux caractere pour le nom";
        bnom = document.getElementById("name");
        bnom.style.borderColor = "rgba(216, 106, 106, 0.884)";
    }
    else{
        erreur = document.getElementById("erreurnom");
        erreur.innerHTML = "";
        bnom = document.getElementById("name");
        bnom.style.borderColor = "";

    }
} 
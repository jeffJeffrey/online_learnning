const afficheCour = document.getElementById("afficheCour")
const afficheVideo = document.getElementById("afficheVideo")
const afficheEncienSujet = document.getElementById("afficheEncienSujet")
const video = document.getElementById("video")
const cour = document.getElementById("cour")
const encienSujet = document.getElementById("encienSujet")

cour.classList.add("affiche")
video.classList.remove("affiche")
encienSujet.classList.remove("affiche")

afficheVideo.addEventListener("click", function(e) {
    e.preventDefault();
alert("fghjkkkjj")

    video.classList.add("affiche")
    cour.classList.remove("affiche")
    encienSujet.classList.remove("affiche")
})
afficheCour.addEventListener("click", function(e) {
    e.preventDefault();
    video.classList.remove("affiche")
    cour.classList.add("affiche")
    encienSujet.classList.remove("affiche")
})
afficheEncienSujet.addEventListener("click", function(e) {
    e.preventDefault();
    video.classList.remove("affiche")
    cour.classList.remove("affiche")
    encienSujet.classList.add("affiche")
})

currentLinks = document.querySelectorAll('a[href="'+document.URL+'"]')
currentLinks.forEach(link => link.className += 'current-link');
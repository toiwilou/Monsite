
var spoilersProfil = function(id) {
    var bouton = document.querySelector(id)
    bouton.addEventListener('click', function(){
    this.nextElementSibling.classList.add('visible')
    this.parentNode.removeChild(this)
})
}

spoilersProfil('#spoiler1 a')
spoilersProfil('#spoiler2 a')
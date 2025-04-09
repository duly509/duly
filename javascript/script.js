function affichermenu() {
    var menu = document.getElementById('menu');
    var menuButton = document.getElementById('menu_boutton');
    
    menu.style.display = 'block'; // Afficher le menu
    setTimeout(function() {
        menu.classList.add('show'); // Ajouter la classe pour activer la transition
    }, 10); // Ajouter un petit délai pour que l'animation soit prise en compte
}

function enlevermenu() {
    var menu = document.getElementById('menu');
    
    menu.classList.remove('show'); // Retirer la classe pour désactiver la transition
    setTimeout(function() {
        menu.style.display = 'none'; // Masquer le menu après l'animation
    }, 600); // Attendre la fin de l'animation avant de masquer le menu
}

document.addEventListener("DOMContentLoaded", function () {
    var selectElement = document.getElementById("jeux");
    var scoreboardElement = document.getElementById("scoreboard");

    // Fonction pour mettre à jour le scoreboard
    function updateScoreboard() {
        var selectedGame = selectElement.value;
        // Vous pouvez ajouter ici la logique pour récupérer les scores du jeu sélectionné
        // et les afficher dans le scoreboard
        scoreboardElement.innerHTML = "<p>Scoreboard pour le jeu " + selectedGame + "</p>";
    }

    // Mettre à jour le scoreboard lorsque le jeu sélectionné change
    selectElement.addEventListener("change", updateScoreboard);

    // Appel initial pour afficher le scoreboard pour le jeu sélectionné au chargement de la page
    updateScoreboard();
});

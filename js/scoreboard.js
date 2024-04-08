document.addEventListener("DOMContentLoaded", function () {

    // Récupère l'élément de sélection de jeu et le tableau de scores
    var selectElement = document.getElementById("jeux");
    var scoreboardElement = document.getElementById("scoreboard");

    // Fonction pour mettre à jour le scoreboard en fonction du jeu sélectionné
    function updateScoreboard() {
        var selectedGame = selectElement.value;

        // Tableaux de scores pour différents jeux
        var LolScores = [
            { name: "Thors Snoresson", score: 1659 },
            { name: "Kaimietis3", score: 1646 },
            { name: "JG top boy#lync1", score: 1594 },
            { name: "Mountain Wolf", score: 1502 }
        ];

        var SoulsScores = [
            { name: "Apex", score: 1000 },
            { name: "Player2", score: 950 },
            { name: "Player3", score: 900 },
            { name: "Player4", score: 850 }
        ];

        var WowScores = [
            { name: "딴도", score: 261.6 },
            { name: "Nabii", score: 261.0 },
            { name: "Panier", score: 255.8 },
            { name: "염구염꾸", score: 255.7 }
        ];

        // Affiche le scoreboard en fonction du jeu sélectionné
        if (selectedGame === "League Of Legends") {
            var scoreboardHTML = "<h3>Scoreboard pour League of Legends</h3>";
            scoreboardHTML += "<ol>";
            // Parcourt le tableau de scores et les affiche dans le HTML
            LolScores.forEach(function (player) {
                scoreboardHTML += "<li>" + player.name + ": " + player.score + " LP" + "</li>";
            });
            scoreboardHTML += "</ol>";
            scoreboardElement.innerHTML = scoreboardHTML;
        } else if (selectedGame === "Souls Breaker") {
            var scoreboardHTML = "<h3>Scoreboard pour Souls Breaker</h3>";
            scoreboardHTML += "<ol>";
            SoulsScores.forEach(function (player) {
                scoreboardHTML += "<li>" + player.name + ": " + player.score + "</li>";
            });
            scoreboardHTML += "</ol>";
            scoreboardElement.innerHTML = scoreboardHTML;
        } else if (selectedGame === "World Of Warcraft") {
            var scoreboardHTML = "<h3>Scoreboard pour World Of Warcraft</h3>";
            scoreboardHTML += "<ol>";
            WowScores.forEach(function (player) {
                scoreboardHTML += "<li>" + player.name + ": " + player.score + "</li>";
            });
            scoreboardHTML += "</ol>";
            scoreboardElement.innerHTML = scoreboardHTML;
        }
    }

    // Met à jour le scoreboard lorsque le jeu sélectionné change
    selectElement.addEventListener("change", updateScoreboard);

    updateScoreboard();
});

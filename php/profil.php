<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/accueil.css">
  <link rel="stylesheet" href="../css/profil.css">
  <title>Profil</title>
</head>

<body>
  <nav>
    <div class="nav-content">
      <div class="logo">
        <a href="./accueil.php">ArcadeLab</a>
      </div>
      <ul class="nav-links">
        <li><a href="./accueil.php">Accueil</a></li>
        <li><a href="../php/jeux.php">Jeux</a></li>

        <?php
        if (isset($_SESSION['login'])) {
          echo '<li><a href="../php/profil.php">' . $_SESSION['login'] . '</a></li>';
        } else {
          echo '<li><a href="../php/login.php">Connexion</a></li>';
        }
        ?>

      </ul>
    </div>
  </nav>

  <div class="profil">
    <div class="profil-text">
      <h2>Profil de <?php echo $_SESSION['login']; ?></h2>
      <!-- Ajouter ici un formulaire pour télécharger une photo de profil -->
      <div class="profil-image">
        <!-- Afficher ici la photo de profil si elle existe -->
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>
</body>

</html>

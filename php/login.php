<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/accueil.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Sign In</title>
</head>
<body>
    <nav>
        <div class="nav-content">
          <div class="logo">
            <a href="../accueil.html">ArcadeLab</a>
          </div>
          <ul class="nav-links">
            <li><a href="../accueil.html">Accueil</a></li>
            <li><a href="../jeux.html">Jeux</a></li>
            <li><a href="./login.php">Connexion</a></li>
          </ul>
        </div>
      </nav>

    <div class="login-container">
        <h2>Connexion</h2>
        <form action="./auth.php" method="POST">
          <div class="input-group">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" id="username" name="login" required>
          </div>
          <div class="input-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>
          </div>
          <button type="submit">Se connecter</button>
        </form>
        <p>Vous n'avez pas de compte ? <a href="./sign-up.php">Cliquez ici</a> pour vous inscrire.</p>
    </div>
</body>
</html>

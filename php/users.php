<?php

require_once "./DB_Conn.php";


$sqlQuery = "SELECT * FROM account";


$resultat = mysqli_query($conn, $sqlQuery);

foreach ($resultat as $resultats) {
  ?>
  <div>
    <h5>
      <?php echo $resultats['A_Username'] ?>
      <?php echo $resultats['A_Mail'] ?>
      <?php echo $resultats['A_Mdp'] ?>
    </h5>
  </div>

  <?php
}
?>
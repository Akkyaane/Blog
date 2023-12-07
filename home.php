<?php

session_start();
include "db/db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Accueil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <header class="bg-primary text-white text-center p-4">
    <div class="container mt-3">
      <nav class="navbar" style="background : #0d6efd; border: solid white; justify-content: center">
        <ul class="nav">
          <li class="nav-item"><a class="nav-link" href="../v-functionalities/v-PersonnalData/v-UpdatePersonnalData.php" style="color: white">Mon
              compte</a></li>
          <li class="nav-item"><a class="nav-link" href="../v-functionalities/v-settings/v-UpdateSettings.php" style="color: white">Paramètres</a></li>
          <li class="nav-item"><a class="nav-link" href="../../../models/authentication/logout/logout.php" style="color: white">Déconnexion</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <div class="container mt-5">
      <h3 style="text-align: center">Bienvenue
        <?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name'] ?>
      </h3>
    </div>

    <div class="container mt-3">
      <table class="table">
        <thead>
          <td>Titre</td>
          <td>Auteur</td>
          <td>Créé le</td>
        </thead>
        <tbody>
          <?php
          if (!$dbConnect) {
            echo "Connexion échouée.";
            echo "<br><button><a href='../../authentication/login/login.php'>Retour</a></button>";
          } else {
            $sql = 'SELECT * from articles';
            $request = $dbConnect->prepare($sql);
            $request->execute();
            while ($array = $request->fetchAll()) {
              if (!(empty($array))) {
                foreach ($array as $row) {
                  echo '<tr>
                              <td>'.$row['titre'].'</td>
                              <td>'.$row['auteur_article'].'</td>
                              <td>'.$row['date_creation'].'</td>';
                  }
              } else {
                echo '<tr>
                <td><td>
                <td>Aucun article</td>
                <td></td>';
              }
            }
          }
          ?>
        </tbody>
      </table>
    </div>
    <div class="container mt-3" style="display: flex; justify-content: left">
      <a href="../v-functionalities/v-ExpenseSheet/v-AddExpenseSheet/v-AddExpenseSheet.php" class="btn btn-primary mb-2">Créer un nouvel article</a>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
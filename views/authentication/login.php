<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Connexion</title>
  <link rel="stylesheet" href="../../assets/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  
  <header class="container my-5 px-3">
      <?php
        echo "
            <nav class='navbar navbar-expand-lg border-bottom'>
                <div class='container-fluid py-2'>
                    <a class='navbar-brand' href='../../controllers/index.php'>DigitalScoop</a>
                </div>
            </nav>";
      ?>
  </header>

  <main>
    <div class="container my-5 px-3">
      <form action="../../controllers/authentication/login.php" method="post">
          <div class="container py-2">
            <h3>Bienvenue</h3>
            <p>Veuillez vous connecter pour accéder à votre compte.</p>
          </div>
          <div class="container py-2">
            <input type="username" class="form-control c-input" name="username" id="username" placeholder="Pseudo" required />
          </div>
          <div class="container py-2">
            <input type="password" class="form-control c-input" name="password" id="password" placeholder="Mot de passe" required />
          </div>
          <div class="container py-2">
            <button type="submit" class="btn btn-dark" name="submit" id="submit">
              Se connecter
            </button>
          </div>
      </form>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog</title>
  <link rel="stylesheet" href="../assets/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header class="container my-5 px-3">
        <?php
            if (!(empty($_SESSION))) {
                echo '
                    <nav class="navbar navbar-expand-lg border-bottom">
                        <div class="container-fluid py-2">
                            <a class="navbar-brand" href="../controllers/index.php">DigitalScoop</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link c-a-index" href="../controllers/index.php?account='.$_SESSION['id'].'">Mon compte</a></li>
                                    <li class="nav-item"><a class="nav-link c-a-index" href="../controllers/index.php?logout">Déconnexion</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>';
            } else {
                echo "
                    <nav class='navbar navbar-expand-lg border-bottom'>
                        <div class='container-fluid py-2'>
                            <a class='navbar-brand' href='../controllers/index.php'>DigitalScoop</a>
                            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                                <span class='navbar-toggler-icon'></span>
                            </button>
                            <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                                <ul class='navbar-nav ms-auto'>
                                    <li class='nav-item dropdown'>
                                        <a class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                            Se connecter ou s'inscrire
                                        </a>
                                        <ul class='dropdown-menu'>
                                            <li><a class='dropdown-item c-a2-index' href='../controllers/index.php?login'>Se connecter</a></li>
                                            <li><a class='dropdown-item c-a2-index' href='../controllers/index.php?signup'>S'inscrire</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>";
            }
        ?>
    </header>

    <main>
        <div class="container d-flex flex-column py-2">
            <?php
                if (!empty($data)) {
                    echo '<div class="container d-flex justify-content-center py-2"><h3>Les dernières actus !</h3></div>';
                    foreach ($data as $index => $row) {
                        $id = $row['id'];
                        $publication_date = new DateTime($row['publication_date']);
                        $truncated_content = strlen($row['content']) > 500 ? substr($row['content'], 0, 500) . "... <strong>[Voir la suite de l'article]</strong>" : $row['content'];
                        echo '
                            <div class="container py-2 c-div-index">
                                <p>Publié le ' . $publication_date->format('d/m/Y') . ' | ' . 'Par ' . $row['author'] . '</p>
                                <p> <strong>' . $row['category'] . '</strong> - ' . '<a href="../controllers/index.php?readArticle=' . $id . '" class="c-a3-index"><strong>' . $row['title'] . '</strong></a></p>
                                <p><a href="../controllers/index.php?readArticle='. $id .'" class="c-a3-index">' . $truncated_content . '</a></p>';
                        echo '</div>';
                        if ($index === 9) {
                            break;
                        }
                    }
                } else {
                    echo '<p>Aucun résultat.</p>';
                }
            ?>
        </div>
        <div class="container py-2">
            <?php
                if (!(empty($_SESSION))) {
                    echo '<a href="../controllers/index.php?createArticle" class="btn btn-dark c-button-index">Publier</a>';
                }
            ?>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
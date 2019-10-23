<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">

        <!-- Reset CSS -->
        <link href="./css/reset.css"  rel="stylesheet">

        <!-- Really beautiful CSS -->
        <link href="./css/style.css"  rel="stylesheet">

        <title>O'Quiz</title>
    </head>
    <body>
        <main class="container">

            <nav>

                <ul>
                    <li>
                        <a href=<?= route('home'); ?>>
                        <h1>O'Quiz</h1>
                        </a>
                    </li>
                </ul>

                <ul>
                    <li>
                        <a href=<?= route('home'); ?>>
                            <i></i>
                            Accueil
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i></i>
                            Mon compte
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i></i>
                            Déconnexion
                        </a>
                    </li>

                </ul>
            </nav>
            <form action="" method="post">
                <p>
                    <label for="firstname">Prénom</label>
                    <input type="text" name="firstname"
                    id="firstname"required>
                </p>
                <p>
                    <label for="lastname">Nom</label>
                    <input type="text" name="lastname"
                    id="lastname"required>
                </p>
                <p>

                    <label for="email">E-mail</label>
                    <input type="text" name="email"
                    id="email"required>
                </p>

                    <label for="password">Mot de passe</label>
                    <input type="text" name="password"
                    id="password"required>
                </p>
                <p>
                    <button type="submit">Créer le compte</button>
                </p>
            </form>
            </div>
        </main>

    </body>
</html>

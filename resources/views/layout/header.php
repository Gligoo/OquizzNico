<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">

        <!-- Reset CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Really beautiful CSS -->
        <link href="<?= url('/css/style.css'); ?>"  rel="stylesheet">

        <title>O'Quiz</title>
    </head>
    <body>
        <main class="container">

            <nav>

                <ul>
                    <li>
                        <a href="<?= route('home'); ?>">
                        <h1>O'Quiz</h1>
                        </a>
                    </li>
                </ul>


                    <div>
                        <p>Bonjour</p>
                        <form method="post" action="<?= route('signout'); ?>">
                            <button type="submit" class="btn btn-primary">Se déconnecter</button>
                        </form>
                    </div>


                <ul>
                    <li>
                        <a href="<?= route('home'); ?>">
                            <i></i>
                            Accueil
                        </a>
                    </li>

                    <li>
                        <a href="<?= route('account'); ?>">
                            <i></i>
                            Mon compte
                        </a>
                    </li>

                    <li>
                        <a href="<?= route('tags'); ?>">
                            <i></i>
                            Sujets
                        </a>
                    </li>

                    <li>
                        <a href="<?= route('signin'); ?>">Se connecter</a>
                    </li>
                    <li>
                        <a href="<?= route('signup'); ?>">S'inscrire</a>
                    </li>

                </ul>
            </nav>

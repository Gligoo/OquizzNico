<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">

        <!-- Reset CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Really beautiful CSS -->
        <link href="./css/style.css"  rel="stylesheet">

        <title>O'Quiz</title>
    </head>
    <body>
        <main class="container">

            <nav>

                <ul>

                    <a href="<?= route('home'); ?> ">
                    <h1>O'Quiz</h1>
                    </a>

                </ul>

                <ul>

                        <a href=<?= route('home'); ?>>
                            Accueil
                        </a>

                        <a href="#">
                            Mon-compte
                        </a>

                        <a href="#">
                            Déconnexion
                        </a>


                </ul>
            </nav>

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
                    <li>
                        <a href="<?= route('home'); ?> ">
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

            <div>
                <h2> Bienvenue sur O'Quiz </h2>
                <p>

                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

                </p>
            </div>

            <div class="row">
                <?php foreach ($quizList as $quiz) : ?>
                <div class="col-4">
                    <h3><?= $quiz->title; ?></h3>
                    <h5><?= $quiz->description; ?></h5>
                    <p><?= $quiz->user->firstname;
                    ?><?= $quiz->user->lastname ?></p>
                </div>
                <?php endforeach; ?>
        </main>
    </body>
</html>

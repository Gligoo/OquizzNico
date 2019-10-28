<?= view('layout.header'); ?>

<div>
    <h2> Bienvenue sur O'Quiz </h2>
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
</div>

<h4>
    <?php if (App\Utils\UserSession::isConnected()) : ?>
        <Div> Bonjour <?= \App\Utils\UserSession::getUser()->firstname ?>  <?= \App\Utils\UserSession::getUser()->lastname ?> </Div>
        <Div> Pret à défier la team Rocket? </Div>
    <?php else : ?>
    <?php endif ?>

</h4>

<div class="row">
    <?php foreach ($quizList as $quiz) : ?>
    <div class="col-4">
        <a href="<?= route('quiz', ['id' => $quiz->id]); ?>"><h3><?= $quiz->title; ?></h3></a>
        <h5><?= $quiz->description; ?></h5>
        <p>by <?= $quiz->user->firstname; ?> <?= $quiz->user->lastname ?></p>
    </div>
    <?php endforeach; ?>
</div>

<?= view('layout.footer'); ?>

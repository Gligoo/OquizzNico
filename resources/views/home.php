<?= view('layout.header'); ?>

            <div class="row">
                <?php foreach ($quizList as $quiz) : ?>
                <div class="col-4">
                    <h3><?= $quiz->title; ?></h3>
                    <h5><?= $quiz->description; ?></h5>
                    <p><?= $quiz->user->firstname;
                    ?><?= $quiz->user->lastname ?></p>
                </div>
                <?php endforeach; ?>

<?= view('layout.footer'); ?>

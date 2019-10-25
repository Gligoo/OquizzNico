<?= view('layout.header'); ?>

<h1><?= $tag->name; ?></h1>

<div class="row">
    <ul>
        <?php foreach ($tag->quizzes as $quiz) : ?>
            <li><a href="<?= route('quiz', ['id' => $quiz->id]); ?>"><?= $quiz->title; ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>

<?= view('layout.footer'); ?>

<?php
// On crée un tableau de correspondance entre id du niveau de difficulté et classe CSS à appliquer (couleur difficulté)
$levelClasses = [
    1 => 'beginner',
    2 => 'medium',
    3 => 'expert'
];
echo view('layout.header');
?>
<div>
    <h2><?= $quiz->title; ?>
        <span><?= $quiz->questions->count(); ?> questions</span>
    </h2>
</div>

<div>
    <h4><?= $quiz->description; ?></h4>
</div>


<div>
    <?php foreach ($quiz->tags as $tag) : ?>
        <a href="<?= route('tag_quizzes', ['tagId' => $tag->id]); ?>" class="badge badge-primary"><?= $tag->name; ?></a>
    <?php endforeach; ?>
</div>

<div>
    <p>by <?= $quiz->user->firstname; ?> <?= $quiz->user->lastname ?></p>
</div>

<div class="row">
    <?php foreach ($quiz->questions->shuffle() as $question) : ?>
        <div class="col-4 question">

            <span class="level level--<?= $levelClasses[$question->level->id]; ?>"><?= $question->level->name; ?></span>

            <div class="question__question"><?= $question->question; ?></div>
            <div>
                <ol>
                    <?php foreach ($question->answers->shuffle() as $answer) : ?>
                        <li><?= $answer->description; ?></li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= view('layout.footer'); ?>

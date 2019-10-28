<?php
$levelClasses = [
    1 => 'beginner',
    2 => 'medium',
    3 => 'expert'
];
echo view('layout.header');
?>
<div>
    <h2><?= $quiz->title; ?> <span><?= $quiz->questions->count(); ?> questions</span>
    </h2>
</div>

<div>
    <h4><?= $quiz->description; ?></h4>
</div>

    <div> Ecrit par <?= $quiz->user->firstname; ?></div>

    <form action="<?= route('quiz_post', ['id' => $quiz->id]); ?>" method="post">
        <div class="row">
            <?php foreach ($quiz->questions as $question) : ?>
                <div class="col-4 question">

                    <span
                        class="level level--<?= $levelClasses[$question->level->id]; ?>"
                    ><?= $question->level->name; ?></span>

                    <div class="question__question"><?= $question->question; ?></div>

                    <div class="question__choices">
                        <?php
                        foreach ($question->answers->shuffle() as $answer) :
                            $answerInputId = 'questions' . $question->id . 'Answer' . $answer->id;
                        ?>
                            <div>
                                <input
                                    type="radio"*
                                    name="answers[<?= $question->id; ?>]"
                                    id="<?= $answerInputId; ?>"
                                    value="<?= $answer->id ?>"
                                >
                                <label
                                    for="<?= $answerInputId; ?>"
                                ><?= $answer->description; ?></label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div>
            <input class="btn" type="submit" value="OK"/>
        </div>
    </form>

<?= view('layout.footer'); ?>

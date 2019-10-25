<?php
$levelClasses = [
    1 => 'beginner',
    2 => 'medium',
    3 => 'expert'
];
echo view('layout.header');
?>

<div>
    <h2><?= $quiz->title; ?></h2>
    <h3>Score : <?= $score ?> / <?= $quiz->questions->count(); ?></h3>
</div>

<a href="<?= route('home'); ?>">Retour à la liste des quiz</a>

<div class="row">
    <?php foreach ($quiz->questions as $question) : ?>
        <div class="col-4 question">

            <span class="level level--<?= $levelClasses[$question->level->id]; ?>"><?= $question->level->name; ?></span>

            <div class="question__question"><?= $question->question; ?></div>
            <div>
                <ol>
                    <?php
                    $questionIsAnswered = ! empty($submittedAnswerIdList[$question->id]);
                    foreach ($question->answers as $answer) :
                        $answerStatusClass = '';
                        if ($questionIsAnswered) {
                            $submittedAnswerId = $submittedAnswerIdList[$question->id];
                            if ($submittedAnswerId == $answer->id
                                && ! $question->isGoodAnswer($submittedAnswerId)
                            ) {
                                $answerStatusClass = ' question__question__answer--bad';
                            }
                        }
                        if ($question->isGoodAnswer($answer->id)) {
                            $answerStatusClass = ' question__question__answer--good';
                        }
                        ?>
                        <li class="question__question__answer<?= $answerStatusClass; ?>"><?= $answer->description; ?></li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<a href="<?= route('home'); ?>">Retour à la liste des quiz</a>

<?= view('layout.footer'); ?>

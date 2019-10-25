<?= view('layout.header'); ?>

<div class="row">
    <?php foreach ($tagList as $tag) : ?>
        <div class="col-3"><a href="<?= route('tag_quizzes', ['tagId' => $tag->id]); ?>" class="badge badge-primary"><?= $tag->name; ?></a></div>
    <?php endforeach; ?>
</div>

<?= view('layout.footer'); ?>

<!doctype html>
<html>
<head>
    <title>create.php</title>
</head>
<body>

    <h2><?= esc($title) ?></h2>

    <?= session()->getFlashdata('error') ?>
    <?= validation_list_errors() ?>

    <form action="/news/create" method="post">
        <?= csrf_field() ?>

        <label for="title">Título</label>
        <input type="input" name="title" value="<?= set_value('title') ?>">
        <br>

        <label for="body">Texto</label>
        <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
        <br>

        <input type="submit" name="submit" value="Crear objeto news">
    </form>

</body>
</html>
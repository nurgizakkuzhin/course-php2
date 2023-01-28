<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">

    <title>Site</title>
</head>
<body>

<div class="container p-5">
    <div class="row gy-5" id="menu">
        <div class="col">
            <a href="/" class="btn btn-outline-secondary">Новости</a>
            <a href="/admin" class="btn btn-outline-success">Админ</a>
            <a href="/templates/admin/create.php" class="btn btn-outline-success">Добавить новость</a>
        </div>
    </div>
    <hr>
    <?php foreach ($articles  as $article) : ?>
        <div class="row p-2">
            <div class="col">
                <a class="btn btn-outline-info" href="/admin/update.php?id=<?php echo $article->id; ?>">✎</a>
                <a class="btn btn-outline-danger" href="/admin/delete.php?id=<?php echo $article->id; ?>">X</a>
                <a href="/admin/article.php?id=<?php echo $article->id; ?>"><?php echo $article->title; ?></a>
            </div>
        </div>
    <?php endforeach;?>
</div>
</body>
</html>
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
        </div>
    </div>
    <hr>
    <div class="card">
        <div class="card-header">
            Новости
        </div>
    <?php foreach ($this->articles as $article): ?>
        <div class="card-body">
            <h5 class="card-title"><a href="/article.php?id=<?php echo $article->id;?>"><?php echo $article->title; ?></a></h5>
            <p class="card-text"><?php echo mb_substr($article->content, 0, 150) . '...'; ?></p>
            <a href="#" class="btn btn-primary">Читать полностью ...</a>
        </div>
    <?php endforeach; ?>
    </div>
</div>
</body>
</html>
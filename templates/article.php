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
        </div>
    </div>
    <hr>
    <?php
    if (false !== $this->article) {
        ?>
        <div class="row">
            <div class="col">
                <h6><?php echo $this->article->title; ?></h6>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <blockquote class="blockquote">
                    <p class="mb-0"><?php echo $this->article->content; ?></p>
                    <?php if (isset($this->article->author)) : ?>
                        <footer class="blockquote-footer"><?php echo $this->article->author->author; ?></footer>
                    <?php endif; ?>
                </blockquote>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div class="row">
            <div class="col-auto">
                <div class="alert alert-danger" role="alert">
                    Новость не найдена
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="/">Вернуться на главную</a>
            </div>
        </div>
        <?php
    } ?>
</div>
</body>
</html><?php

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
    <div class="row">
        <div class="col">
            <form action="/admin/create.php" method="post">
                <div class="form-group">
                    <input class="form-control" type="text" name="title" placeholder="Заголовок новости">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="content" cols="30" rows="10"
                              placeholder="Текст новости"></textarea>
                </div>
                <div class="form-row">
                    <div class="col-auto">
                        <a href="/" class="btn-outline-secondary btn form-control">Отмена</a>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary form-control" type="submit">Сохранить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
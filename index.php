<?php
    require_once './app.php';
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Тестовое задание</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <a href="/">Home</a>
    <form method="get">
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="submit" class="btn btn-info" name="read_file" value="1">Прочитать файл</button>
            <button type="submit" class="btn btn-danger" name="matrix_transport" value="1">Транспонировать матрицу</button>
            <button type="submit" class="btn btn-warning" name="db_write" value="1">Загрузить данные из Excel</button>
            <button type="submit" class="btn btn-success" name="db_read" value="1">Вывести данные из БД</button>
        </div>
    </form>
    <? if(!empty($read_file) || !empty($matrix_data_set)): ?>
        <h4>Содержимое файла</h4>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <? foreach ($matrix_data as $m_item): ?>
                    <p class="m-1"><?= $m_item ?></p>
                <? endforeach; ?>
            </div>
        </div>
    <? endif; ?>

    <? if (!empty($data_insert)) : ?>
        <div class="alert alert-success" role="alert">
            Данные добавлены в таблицу !
        </div>
    <? endif; ?>

    <? if (!empty($data_get_db)) : ?>
        <table class="table table-dark table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Price</th>
            </tr>
            </thead>
            <tbody>
                <? foreach ($data_get_db as $key => $item): ?>
                    <tr>
                        <td scope="row"><?= $key ?></td>
                        <td><?= $item['name'] ?></td>
                        <td><?= $item['phone'] ?></td>
                        <td><?= $item['price'] ?></td>
                    </tr>
                <? endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4">Всего записей: <?= count($data_get_db) ?></td>
                </tr>
            </tfoot>
        </table>
    <? endif; ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

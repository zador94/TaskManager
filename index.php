<?php
include 'splAutoloadRegister.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="test.js"></script>
    <title>Document</title>
</head>
<body>
<h1>Введите название задачи</h1>
<div class="formTask">
    <p>Название задачи <input type="text" class="name"></p>
    <p>Описание задачи</p> <textarea class="description"  cols="30" rows="10"></textarea>
    <p>Дата исполнения задачи <input type="date" class="date"></p>
    <p>Статус задачи <select class="status">
            <option value="выполнено">выполнено</option>
            <option value="не выполнено">не выполнено</option>
        </select></p>
    <button class="sendForm">Отправить</button>
    <button class="readDate">Посмотреть список задач</button>
</div>
<div class="formResult"></div>
</body>
</html>



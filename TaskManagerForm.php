<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Заполните форму</h1>
<form action="addTaskDatabase.php" method="post">
    <p>Название задачи <input type="text" name="name"></p>
    <p>Описание задачи</p> <textarea name="description"  cols="30" rows="10"></textarea>
    <p>Дата исполнения задачи <input type="date" name="date"></p>
    <p>Название задачи <select name="status">
            <option value="выполнено">выполнено</option>
            <option value="не выполнено">не выполнено</option>
        </select></p>
    <input type="submit" value="Отправить">
</form>
</body>
</html>

<?php
if (!empty($_REQUEST['name']) && !empty($_REQUEST['description']) && !empty($_REQUEST['date']) && !empty($_REQUEST['status'])) {

    try {
        $connection = new PDO("mysql:host=localhost;dbname=databasetask", 'root', 'root');
        echo 'Соединение установлено';
        $nameTask = $_REQUEST['name'];
        $description = $_REQUEST['description'];
        $date = $_REQUEST['date'];
        $status = $_REQUEST['status'];
        $command = "INSERT INTO tasks (nameTask, descriptionTask, dateTask, statusTask) VALUE ('$nameTask', '$description', '$date', '$status')";
        $sql = $connection->exec($command);
        if ($sql > 0) {
            echo 'Данные успешно добавлены <br>';
        } else {
            echo 'Что-то пошло не так';
        }
    } catch (PDOException $error) {
        $error->getMessage();
    }
}
?>

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
<a href="\">Вернуться назад</a>
</body>
</html>

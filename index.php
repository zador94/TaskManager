<?php
include 'splAutoloadRegister.php';

$task1 = new Task('Провести совещание', 'Посовещаться с людьми', '01/03/23', 'не выполнено');
$task2 = new Task('Позвонить маме', 'Узнать как дела у мамы', '01/03/23', 'не выполнено');
$task3 = new Task('Уборка', 'Убрать дом', '01/03/23', 'выполнено');
$task4 = new Task('Учеба', 'Выучить 3 главы', '01/03/23', 'не выполнено');

$taskManager = new TaskManager();

$taskManager->addTask($task1);
$taskManager->addTask($task2);
$taskManager->addTask($task3);
$taskManager->addTask($task4);

$taskManager->changeStatusTask(2, 'выполнено');

$taskManager->showListNoCompleateTask();

foreach ($taskManager->showListTask() as $task) {

    echo 'Идентификатор: ' . $task->getId() . '<br>' . 'Название задачи: ' . $task->getNameTask() . '<br>'
        . 'Дата начала задачи: ' . $task->getDateTask() . '<br>' . 'Статус задачи: ' . $task->getStatusTask() . '<br><br>';

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
    <h1>Выберите действие</h1>
    <a href="TaskManagerForm.php">Добавить новую задачу</a><br>
    <a href="ShowListTask.php">Просмотр списка всех задач</a><br>
    <a href="CompleteStatusTask.php">Просмотр списка выполненных задач</a><br>
    <a href="NoCompleteStatusTask.php">Просмотр списка невыполненных задач</a><br>
</body>
</html>

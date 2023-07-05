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
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Название задачи</th>
            <th>Описание задачи</th>
            <th>Дата исполнения задачи</th>
            <th>Статус задачи</th>
        </tr>
        <?php
        try {
            $connection = new PDO("mysql:host=localhost;dbname=databasetask", 'root', 'root');
            $sql = "select * from tasks";
            $result = $connection->query($sql);
            while($row = $result->fetch()){
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nameTask"] . "</td>";
                echo "<td>" . $row["descriptionTask"] . "</td>";
                echo "<td>" . $row["dateTask"] . "</td>";
                echo "<td>" . $row["statusTask"] . "</td>";
                echo "<td> <form action='deleteTask.php' method='post'>
                            <input type='hidden' name='id' value='" . $row["id"] . "'/>
                             <input type='submit' value='Удалить'>
                    </form>
                    </td>";
                echo "<td> <form action='updateTask.php' method='post'>
                            <input type='hidden' name='id' value='" . $row["id"] . "'/>
                             <input type='submit' value='Изменить статус задачи'>
                    </form>
                    </td>";
                echo "</tr>";
            }
        } catch (Exception $e) {
            $e->getMessage();
        }
        ?>
    </table>
</body>
</html>
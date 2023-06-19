<?php
try {
    $connection = new PDO("mysql:host=localhost;dbname=databasetask", 'root', 'root');

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
        $taskId = $_POST["id"];

        $sql = "SELECT statusTask FROM tasks WHERE id = :id";
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(":id", $taskId);
        $stmt->execute();
        $row = $stmt->fetch();
        $currentStatus = $row["statusTask"];

        if ($currentStatus == "выполнено") {
            $newStatus = "не выполнено";
        } else {
            $newStatus = "выполнено";
        }
        $sql = "UPDATE tasks SET statusTask = :status WHERE id = :id";
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(":status", $newStatus);
        $stmt->bindParam(":id", $taskId);
        $stmt->execute();

        header("Location: ShowListTask.php");
    }
} catch (Exception $e) {
    $e->getMessage();
}


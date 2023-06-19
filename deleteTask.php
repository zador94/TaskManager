<?php
if(isset($_POST["id"]))
{
    try {
        $conn = new PDO("mysql:host=localhost;dbname=databasetask", "root", "root");
        $sql = "DELETE FROM tasks WHERE id = :userid";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue (":userid", $_POST["id"]);
        $stmt->execute();
        header ("Location: ShowListTask.php");
    }
    catch (PDOException $e) {
        echo $e->getMessage();
    }
}
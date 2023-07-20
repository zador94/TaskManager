<?php

class DataBaseMySQL implements IDataTransfer
{
    private PDO $connection;
    private string $host = 'localhost';
    private string $name = 'databasetask';
    private string $login = 'root';
    private string $password = 'root';

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=". $this->host. ";dbname=" .$this->name, $this->login, $this->password);
    }

    public function create(Task $task)
    {
        $sql = "INSERT INTO tasks (nameTask, descriptionTask, dateTask, statusTask) 
    VALUE (:name, :description, :date, :status)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(':name', $task->getNameTask());
        $stmt->bindValue(':description', $task->getDescriptionTask());
        $stmt->bindValue(':date', $task->getDateTask());
        $stmt->bindValue(':status', $task->getStatusTask());
        $result = $stmt->execute();
        if ($result > 0) {
            return 'Данные записаны';
        } else {
            return 'Данные не записаны';
        }
    }

    public function read()
    {
        $sql = "select * from tasks";
        $result = $this->connection->query($sql);
        while($row = $result->fetch()){
            $arData[] = $row;
        }
        return $arData;
    }


    public function update(int $id, string $status)
    {
        $sql = "UPDATE tasks SET statusTask = :status WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(':status', $status);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM tasks WHERE id = :userid";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue (":userid", $_POST["id"]);
        $stmt->execute();
        return 'Данные удалены';
    }
}
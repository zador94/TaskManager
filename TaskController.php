<?php

namespace TaskManager;

use DataBaseMySQL;
use IDataTransfer;
use Task;
include 'splAutoloadRegister.php';

class TaskController
{
    private IDataTransfer $dto;
    public function __construct(IDataTransfer $dto)
    {
        $this->dto = $dto;
    }
    public function create(string $name, string $description, string $date, string $status)
    {
        $task = new Task($name, $description, $date, $status);
        echo json_encode($this->dto->create($task));
    }

    public function read()
    {
        $arData = $this->dto->read();
        echo json_encode($arData);
    }

    public function update(int $id, string $status)

    {
        $this->dto->update($id, $status);
        echo json_encode(['success' => true]);
    }

    public function delete(int $id)
    {
        $this->dto->delete($id);
        echo json_encode($this->dto->delete($id));
    }
}

$controller = new TaskController(new DataBaseMySQL());
if (!empty($_REQUEST['action'])) {
    switch ($_REQUEST['action']) {
        case 'create':
            $controller->create($_REQUEST['name'], $_REQUEST['description'], $_REQUEST['date'], $_REQUEST['status']);
            break;
        case 'read':
            $controller->read();
            break;
        case 'delete':
            $controller->delete($_REQUEST['id']);
            break;
        case 'update':
            $controller->update($_REQUEST['id'], $_REQUEST['status']);
            break;
    }
}
<?php

class TaskManager
{
    private array $listTask;

    public function addTask(Task $task)
    {
        $this->listTask[] = $task;
    }

    public function deleteTask(int $id)
    {
        foreach ($this->listTask as $key => $task) {
            if ($task->getId() == $id) {
               unset($this->listTask[$key]);
            }
        }
    }

    public function changeStatusTask(int $id, string $nameStatus)
    {
        foreach ($this->listTask as $key => $value) {
            if ($value->getId() == $id) {
                $value->setStatusTask($nameStatus);
            }
        }
    }

    public function showListTask()
    {
        return $this->listTask;
    }

    public function showListNoCompleateTask()
    {
        foreach ($this->listTask as $value) {
            if ($value->getStatusTask() == 'не выполнено') {
               echo 'Идентификатор: ' . $value->getId() . '<br>' . 'Название задачи: ' . $value->getNameTask() . '<br>'
                   . 'Дата начала задачи: ' . $value->getDateTask() . '<br>' . 'Статус задачи: '
                   . $value->getStatusTask() . '<br><br>';
            }
        }
    }
}
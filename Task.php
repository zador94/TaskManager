<?php

class Task
{
    public function __construct(private string $nameTask,
                                private string $descriptionTask,
                                private string $dateTask,
                                private string $statusTask)
    {
    }


    public function getNameTask(): string
    {
        return $this->nameTask;
    }


    public function setNameTask(string $nameTask): void
    {
        $this->nameTask = $nameTask;
    }


    public function getDescriptionTask(): string
    {
        return $this->descriptionTask;
    }


    public function setDescriptionTask(string $descriptionTask): void
    {
        $this->descriptionTask = $descriptionTask;
    }


    public function getDateTask(): string
    {
        return $this->dateTask;
    }

    public function setDateTask(string $dateTask): void
    {
        $this->dateTask = $dateTask;
    }

    public function getStatusTask(): string
    {
        return $this->statusTask;
    }


    public function setStatusTask(string $statusTask): void
    {
        $this->statusTask = $statusTask;
    }

}
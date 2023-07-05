<?php

interface IDataTransfer
{
    public function create(Task $task);
    public function read();
    public function update(int $id, string $status);
    public function delete(int $id);
}
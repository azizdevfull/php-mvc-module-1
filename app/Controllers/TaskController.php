<?php
// controllers/TaskController.php
require_once 'models/Task.php';

class TaskController
{
    private $task;

    public function __construct()
    {
        $this->task = new Task();
    }

    public function index()
    {
        $tasks = $this->task->getAll();
        require 'views/tasks/index.php';
    }

    public function create()
    {
        require 'views/tasks/create.php';
    }

    public function store()
    {
        $this->task->create($_POST['title'], $_POST['description']);
        header("Location: /");
    }

    public function edit($id)
    {
        $task = $this->task->get($id);
        require 'views/tasks/edit.php';
    }

    public function update($id)
    {
        $this->task->update($id, $_POST['title'], $_POST['description']);
        header("Location: /");
    }

    public function delete($id)
    {
        $this->task->delete($id);
        header("Location: /");
    }
}

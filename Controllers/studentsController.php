<?php
class studentsController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/Student.php');

        $tasks = new Student();

        $d['tasks'] = $tasks->showAllTasks();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["title"]))
        {
            require(ROOT . 'Models/Student.php');

            $task= new Student();

            if ($task->create($_POST["title"], $_POST["description"]))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        require(ROOT . 'Models/Student.php');
        $task= new Student();

        $d["task"] = $task->showTask($id);

        if (isset($_POST["title"]))
        {
            if ($task->edit($id, $_POST["title"], $_POST["description"]))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        require(ROOT . 'Models/Student.php');

        $task = new Student();
        if ($task->delete($id))
        {
            header("Location: " . WEBROOT . "tasks/index");
        }
    }
}
?>
<?php
class studentsController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/Student.php');

        $students = new Student();

        $d['students'] = $students->showAllStudents();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["student_group"]))
        {
            require(ROOT . 'Models/Student.php');

            $student= new Student();

            if ($student->create($_POST["first_name"], $_POST["last_name"], $_POST["student_group"]))
            {
                header("Location: " . WEBROOT . "students/index");
            }
        }

        $this->render("create");
    }

    function delete($id)
    {
        require(ROOT . 'Models/Student.php');

        $student = new Student();
        if ($student->delete($id))
        {
            header("Location: " . WEBROOT . "students/index");
        }
    }
}
?>
<?php
require "models/Student.php";

class StudentController{
    private $student;

    public function __construct(){
        $this->student = new Student();
    }

    public function getAllStudents(){
        return $this->student->getAllStudents();
    }
}

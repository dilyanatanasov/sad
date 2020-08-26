<?php
require "controllers/BaseClass.php";

/**
 * Model class of the related Student tables
 * Class Student
 */
class Student extends BaseClass {

    /**
     * Insert single student record
     * @param $student array
     * @return boolean
     */
    public function addStudent($student){
        $query = $this->dbInstance->prepare("INSERT INTO students(id, first_name, last_name) VALUES(NULL, 'Dilyan', 'Atanasov');");
        return $this->dbInstance->exec($query->queryString);
    }

    /**
     * Inserts Multiple records on one query
     * @param $students array
     * @return mixed
     */
    public function addMultipleStudents($students){
        $sql = "INSERT INTO students(`first_name`, `last_name`) VALUES";
        foreach ($students as $student) {
            $sql .= "('${student['first_name']}', '${student['last_name']}'),";
        }
        $sql = substr($sql, 0, -1).";";
        $query = $this->dbInstance->prepare($sql);
        return $this->dbInstance->exec($query->queryString);
    }

    /**
     * Get single student data by id
     * @param $userId string
     * @return mixed
     */
    public function getStudent($userId){
        $prepared = $this->dbInstance->prepare("SELECT * FROM students WHERE id = $userId");
        $stmt = $this->dbInstance->query($prepared->queryString);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }

    /**
     * Retrieve all available students
     * @return mixed
     */
    public function getAllStudents(){
        $prepared = $this->dbInstance->prepare("SELECT * FROM students");
        $stmt = $this->dbInstance->query($prepared->queryString);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
}
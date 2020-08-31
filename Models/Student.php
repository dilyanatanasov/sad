<?php
class Student extends Model
{
    public function create($first_name, $last_name, $student_group)
    {
        $sql = "INSERT INTO students (first_name, last_name, student_group) VALUES (:first_name, :last_name, :student_group)";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'student_group' => $student_group
        ]);
    }

    public function showStudent($id)
    {
        $sql = "SELECT * FROM students WHERE id =" . $id;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }

    public function showAllStudents()
    {
        $sql = "SELECT * FROM students";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM students WHERE id = ?';
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$id]);
    }
}
?>
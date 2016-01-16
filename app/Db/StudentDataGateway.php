<?php 
namespace StudentList\Db;

class StudentDataGateway extends TableDataGateway {

    public $fields = array('name', 'surname', 'sex', 'groupNumber', 'email', 'examMark', 'year', 'local');

    public function add(Student $student) {
        $sql = "INSERT INTO students 
                     VALUES (:name, :surname, :sex, :groupNumber, :email, :examMark, :year, :local)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':surname', $surname);
        $stmt->bindValue(':sex', $sex);
        $stmt->bindValue(':groupNumber', $groupNumber);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':examMark', $examMark);
        $stmt->bindValue(':year', $year);
        $stmt->bindValue(':local', $local);
        $stmt->execute();   
    }
}
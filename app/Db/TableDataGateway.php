<?php
namespace StudentList\Db;
use StudentList\Entities\Student;

class StudentsDataGateway {

    private $pdo;

    public $fields = array('name', 'surname', 'sex', 'groupNumber', 'email', 'examMark', 'year', 'local');

    public function __construct(PDO $pdo) {
        $this->$pdo = $pdo;
    }

}
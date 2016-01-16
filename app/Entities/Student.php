<?php
namespace StundetList\Entities;
use StudentList\Db\StudentsDataGateway;

class Student {

    const GENDER_MALE = 0;
    const GENDER_FEMALE = 1; 
    const RESIDENCY_RESIDENT = 0;
    CONST RESIDENCY_NONRESIDENT = 1;

    private $dbInstance;

    public $name;
    public $surname;
    public $groupNumber;
    public $email;
    public $examMark;
    public $year = 0;

    public function __construct($name, $surname, $sex, $groupNumber, $email, $examMark, $year, $local) {
        $this->dbInstance = new StudentsDataGateway($pdo);
        $this->name = $name;
        $this->surname = $surname;
        $this->sex = $sex;
        $this->groupNumber = $groupNumber;
        $this->email = $email;
        $this->examMark = $examMark;
        $this->year = $year; 
        $this->local = $local;
    }

    public function add(array $values) {
        $this->dbInstance->add($values);
    }
}
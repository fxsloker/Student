<?php
namespace StudentList\Controllers;
use StudentList\Entities\Student;
use StudentList\Views\View;

class BaseController {

    public $_view;

    public function __construct() {
        $this->_view = 'main';
    }

    public function indexAction() {
        $view = new View();
        $view->render($this->_view, $this->getAllStundets());
    }

    public function addAction() {
        $student = new Student();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $student->add($_POST);
        }
    }

    public function getAllStundets() {
        return;
    }
}
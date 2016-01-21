<?php
namespace StudentList\Controllers;
use StudentList\Entities\Student;
use StudentList\Views\View;

class BaseController extends Controller {

    public function __construct() {
        $this->_view = 'home';
    }

    public function indexAction() {
        $view = new View();
        $view->render($this->_view, $this->getAllStundets());
    }

    public function getAllStundets() {
        return;
    }
}
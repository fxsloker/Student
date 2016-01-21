<?php
namespace StudentList\Controllers;
use StudentList\Entities\Student;
use StudentList\Views\View;

class RegisterController extends Controller {

    public function __construct() {
        $this->_view = 'register';
    }    

    public function indexAction() {
        $view = new View();
        $view->render($this->_view);
    }    
}
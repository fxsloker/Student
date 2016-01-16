<?php
namespace StudentList\Views;

class View {

    public $header;
    public $footer;

    public function __construct() {
        $this->header = __DIR__.'/templates/header.php';
        $this->footer = __DIR__.'/templates/footer.php';
    }

    public function render($tmpl, $params) {
        require_once $this->header;
        require_once __DIR__.'/templates/'.$tmpl.'.php';
        require_once $this->footer;
    }
}
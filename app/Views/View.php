<?php
namespace StudentList\Views;

class View {

    public $header;
    public $footer;

    public function __construct() {
        $this->header = __DIR__.'/_templates/header.php';
        $this->footer = __DIR__.'/_templates/footer.php';
    }

    public function render($tmpl, array $params = null) {
        require_once $this->header;
        require_once __DIR__.'/'.$tmpl.'/index.php';
        require_once $this->footer;
    }
}
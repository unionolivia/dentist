<?php

class Forgot extends Controller {

    function __construct() {
         parent::__construct();
        $this->view->js = ['public/js/prism.js'];
        $this->view->css = ['public/css/page-center.css', 'public/css/prism.css'];
       
    }

    public function index() {
        $this->view->title = 'Forgot your Password';
        $this->view->render('index_header');
        $this->view->render('forgot/index');
        $this->view->render('index_footer');
    }

}

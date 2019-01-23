<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
//                echo md5('admin');
//        echo Hash::create('haval256,4', 'admin', HASH_PASSWORD_KEY);
        $this->view->js = ['public/js/prism.js', 'public/js/login.js', 'public/js/sweetalert.min.js'];
        $this->view->css = ['public/css/page-center.css', 'public/css/prism.css', 'public/css/sweetalert.css'];
    }

    public function index() {
        $this->view->title = 'Welcome to e-Dentist';
        $this->view->render('index_header');
        $this->view->render('index/index');
        $this->view->render('index_footer');
    }

}

<?php

class Register extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->js = ['public/js/register.js',  'public/js/sweetalert.min.js'];
        $this->view->css = ['public/css/page-center.css', 'public/css/prism.css','public/css/sweetalert.css'];
    }

    public function index() {
        $this->view->title = 'Welcome to e-Dentist - Register for Free';
        $this->view->render('index_header');
        $this->view->render('register/index');
        $this->view->render('index_footer');
    }

    public function logMeIn() {
        $this->model->logMeIn();
    }
    
    public function processRegister(){
    	$data = [];
    
    	$data = [
            'email' => $_POST['email'],
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'password' => $_POST['password']
        ];
           
    	$this->model->processRegister($data);
    }

}

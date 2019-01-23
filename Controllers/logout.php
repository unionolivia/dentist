<?php

class Logout extends Controller {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
        $this->view->email = $_SESSION['email'];
        $this->view->firstname = $_SESSION['firstname'];
        $this->view->lastname = $_SESSION['lastname'];
    }
    
       public function index() {
        Session::destroy();
        header('location: ' . URL);
        exit();
    }

}


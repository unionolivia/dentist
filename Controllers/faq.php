<?php

class Faq extends Controller {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
        $this->view->js = ['public/js/faq.js', 'public/js/jquery.redirect.js', 'public/js/custom.js'];
        $this->view->css = ['public/css/custom.css'];
        $this->view->email = $_SESSION['email'];
        $this->view->firstname = $_SESSION['firstname'];
        $this->view->lastname = $_SESSION['lastname'];
    }

    public function index() {
        $this->view->title = 'FAQs - Frequently Asked Question';
        $this->view->render('header');
        $this->view->render('faq/index');
        $this->view->render('footer');
    }

    public function faqs() {
        $this->model->faqs();
    }

}

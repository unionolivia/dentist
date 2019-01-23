<?php

class Search extends Controller {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
        $this->view->js = ['public/js/search.js', 'public/js/imagesloaded.pkgd.min.js', 'public/js/masonry.pkgd.min.js', 'public/js/jquery.redirect.js', 'public/js/custom.js'];
        $this->view->css = ['public/css/custom.css'];
        $this->view->email = $_SESSION['email'];
        $this->view->firstname = $_SESSION['firstname'];
        $this->view->lastname = $_SESSION['lastname'];
    }

    public function index() {
        $this->view->title = 'Search Results';
        $this->view->render('header');
        $this->view->categoryid = $_POST['categoryid'];
        $this->view->render('search/index');
        $this->view->render('footer');
    }

    public function searchResult() {
        $this->model->searchResult();
    }
    
    public function searchWhereNotEqualToResult() {
        $this->model->searchWhereNotEqualToResult();
    }
    
}

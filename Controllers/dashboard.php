<?php

class Dashboard extends Controller {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
        $this->view->js = ['public/js/jquery.dataTables.min.js', 'public/js/dashboard.js', 'public/js/sweetalert.min.js', 'public/js/custom.js'];
        $this->view->css = ['public/css/jquery.dataTables.min.css', 'public/css/sweetalert.css', 'public/css/custom.css'];
        $this->view->email = $_SESSION['email'];
        $this->view->firstname = $_SESSION['firstname'];
        $this->view->lastname = $_SESSION['lastname'];
    }

    public function index() {
        $this->view->title = 'Welcome to Dashboard';
        $this->view->render('header');
        $this->view->render('dashboard/index');
        $this->view->render('footer');
    }

    public function updateProfilePicture() {
        $data = [];
        $data['email'] = $_POST['email'];

        require 'Libs/Upload.php';
        $this->uploader = new Upload($_FILES['file']);

        if ($this->uploader->uploaded) {

            // get the filename and store in $file
            $fileName = $this->uploader->file_src_name_body;

            $this->uploader->file_new_name_body = $fileName;
            $this->uploader->file_overwrite = TRUE;
            $this->uploader->image_resize = TRUE;
            $this->uploader->image_x = 200;
            $this->uploader->image_y = 200;
            $this->uploader->image_ratio = TRUE;

            $this->uploader->process('public/image/pic/');

            if (!$this->uploader->processed) {
                throw new Exception($this->uploader->error);
            }

            $data['image'] = "{$fileName}.{$this->uploader->file_src_name_ext}";
            $data['dimension'] = "{$this->uploader->image_src_x}x{$this->uploader->image_src_y}";

            $this->uploader->clean();
        } else {
            throw new Exception($this->uploader->error);
        }

//         Validation, here!

        $this->model->updateProfilePicture($data);
    }

    public function profile() {
        $this->model->profile();
    }
    
    public function faq() {
        $this->model->faq();
    }
    
    public function getAppointment() {
        $this->model->getAppointment();
    }
    public function approveAppointment() {
        $this->model->approveAppointment();
    }
}

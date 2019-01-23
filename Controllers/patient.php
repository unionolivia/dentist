<?php

class Patient extends Controller {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
        $this->view->js = ['public/js/imagesloaded.pkgd.min.js', 'public/js/sweetalert.min.js', 'public/js/masonry.pkgd.min.js', 'public/js/jquery.dataTables.min.js', 'public/js/jquery.redirect.js', 'public/js/patient.js', 'public/js/custom.js'];
        $this->view->css = ['public/css/jquery.dataTables.min.css', 'public/css/sweetalert.css', 'public/css/custom.css'];
        $this->view->user = $_SESSION['user'];
        $this->view->email = $_SESSION['email'];
        $this->view->firstname = $_SESSION['firstname'];
        $this->view->lastname = $_SESSION['lastname'];
    }

    public function index() {
        $this->view->title = 'Welcome to e-Dentist';
        $this->view->render('header');
       $this->view->email = $_SESSION['email'];
        $this->view->render('patient/index');
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
    
    public function getPersonID() {
        $this->model->getPersonID();
    }
    
    public function sendAppointment() {
        
        $date = $_POST['date'];
        $date = date("Y-m-d",strtotime($date));
        
        $data = [
            'person_id' => $_POST['person_id'],
            'date' => $date,
            'time' => $_POST['time'],
            'subject' => $_POST['subject'],
            'description' => $_POST['description']
        ];

        $this->model->sendAppointment($data);
    }

    public function faq() {
        $this->model->faq();
    }

    public function searchOnTheSite() {
        $this->model->searchOnTheSite();
    }
    
    public function appointMsg() {
        $this->model->appointMsg();
    }

}

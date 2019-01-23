<?php

class RegisterModel extends Model {

    function __construct() {
        parent::__construct();
    }

    public function logMeIn() {
        $email = $_POST['email'];
        $password = Hash::create('haval256,4', $_POST['password'], HASH_PASSWORD_KEY);

        $this->result = [];
        $data = $this->db->select('SELECT person_id, firstname, lastname, role FROM person WHERE email = :email AND password = :password', ['email' => $email, 'password' => $password], 'fetch');
        if (!empty($data)) {
            $user = $data['person_id'];
            $firstname = $data['firstname'];
            $lastname = $data['lastname'];
            $role = $data['role'];

            Session::init();
            Session::set('loggedIn', TRUE);
            Session::set('user', $user);
            Session::set('email', $email);
            Session::set('firstname', $firstname);
            Session::set('lastname', $lastname);

            switch ($role) {
                case 'admin':

                    Session::set('role', 'admin');
                    $this->result['message'] = 'a';
                    break;

                case 'patient':
                    Session::set('role', 'patient');
                    $this->result['message'] = 'p';
                    break;

                default:

                    Session::set('role', 'default');
                    $this->result['message'] = 'd';
                    break;
            }
        } else {
            $this->result['message'] = FALSE;
        }

        echo json_encode($this->result);
    }

    public function processRegister($data) {
        $postData = [
            'email' => $data['email'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'password' => Hash::create('haval256,4', $data['password'], HASH_PASSWORD_KEY)
        ];

        if (!empty($postData)) {
            $this->db->insert('person', $postData);
            $id = $this->db->lastInsertId();
            $this->result['message'] = TRUE;

            // Session starts here
            Session::init();
            Session::set('role', 'default');
            Session::set('loggedIn', TRUE);
            Session::set('user', $id);
            Session::set('email', $data['email']);
            Session::set('firstname', $data['firstname']);
            Session::set('lastname', $data['lastname']);
        } else {
            $this->result['message'] = FALSE;
        }

        echo json_encode($this->result);
    }

}

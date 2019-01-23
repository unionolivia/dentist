<?php
class PatientModel extends Model {

    function __construct() {
        parent::__construct();
    }

    public function updateProfilePicture($data) {

        $postData = [
            'image' => $data['image'],
            'dimension' => $data['dimension']
        ];
        if (!empty($postData)) {
            $this->db->update('person', $postData, "email = '{$data['email']}'");
            echo '<img src="public/image/pic/'.$data['image'].'" alt="" class="circle responsive-img valign profile-image">';
        } else {
           echo '<img src="public/image/pic/avatar.png" alt="" class="circle responsive-img valign profile-image">';
        }

    }
    
    public function profile() {
       $email = $_POST['email'];
        $data = $this->db->select('SELECT firstname, lastname, image FROM person WHERE email = :email', ['email' => $email]);
        echo json_encode($data);   
    }
    
    
    public function searchOnTheSite() {
        $stringSearch = $_POST['string'];
        $data = $this->db->select("SELECT * FROM category WHERE name like '%{$stringSearch}%' || description like '%{$stringSearch}%' ");

        echo json_encode($data);
    }
    
    public function getPersonID() {
        $email = $_POST['email'];
        $data = $this->db->select('SELECT person_id FROM person WHERE email = :email', ['email' => $email]);
        echo json_encode($data); 
    }
    
    public function sendAppointment($data) {
             $postData = [
            'person_id' => $data['person_id'],
            'date' => $data['date'],
            'time' => $data['time'],
            'subject' => $data['subject'],
            'description' => $data['description'],
            'approve_status' => 'pending'
        ];

        if (!empty($postData)) {
            $this->db->insert('appointment', $postData);

            $this->result['message'] = TRUE;
        } else {
            $this->result['message'] = FALSE;
        }

        echo json_encode($this->result);        
    }
    
    public function appointMsg() {
        $user = $_POST['user'];
        $data = $this->db->select('SELECT date, time, approve_status FROM appointment WHERE person_id = :person_id', ['person_id' => $user]);
        echo json_encode($data);
    }
    

}

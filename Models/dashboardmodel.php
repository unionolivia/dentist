<?php

class DashboardModel extends Model {

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
            echo '<img src="public/image/pic/' . $data['image'] . '" alt="" class="circle responsive-img valign profile-image">';
        } else {
            echo '<img src="public/image/pic/avatar.png" alt="" class="circle responsive-img valign profile-image">';
        }
    }

    public function profile() {
        $email = $_POST['email'];
        $data = $this->db->select('SELECT firstname, lastname, image FROM person WHERE email = :email', ['email' => $email]);
        echo json_encode($data);
    }

    public function getAppointment() {
        $data = $this->db->select('SELECT email, approve_status, appointment_id, time, date, appointment.date_added AS today_date, subject, description FROM person, appointment WHERE person.person_id = appointment.person_id', ['']);
        echo json_encode($data);
    }

    public function approveAppointment() {
        $appointID = $_POST['appoint_id'];
        $data = $this->db->select('SELECT approve_status FROM appointment WHERE appointment_id = :appointment_id', ['appointment_id' => $appointID], 'fetch');
        if (!empty($data)) {
            $status = $data['approve_status'];

            switch ($status) {
                case 'pending':
                    $postData = [
                        'approve_status' => 'approved'
                    ];
                    $this->db->update('appointment', $postData, "appointment_id = $appointID");
                    $this->result['message'] = 'a';
                    break;

                case 'approved':
                    $postData = [
                        'approve_status' => 'disapproved'
                    ];
                    $this->db->update('appointment', $postData, "appointment_id = $appointID");
                    $this->result['message'] = 'd';
                    break;
                
                default:
                    case 'disapproved':
                    $postData = [
                        'approve_status' => 'pending'
                    ];
                    $this->db->update('appointment', $postData, "appointment_id = $appointID");
                    $this->result['message'] = 'p';
                    break;
            }
        } else {
            $this->result['message'] = FALSE;
        }
        echo json_encode($this->result);
    }

}

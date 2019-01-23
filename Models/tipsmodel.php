<?php

class TipsModel extends Model {

    function __construct() {
        parent::__construct();
    }

    public function addTips($data) {
        $postData = [
            'name' => $data['name'],
            'description' => $data['description'],
            'image' => $data['image']
        ];

        if (!empty($postData)) {
            $this->db->insert('tip', $postData);

            $this->result['message'] = TRUE;
        } else {
            $this->result['message'] = FALSE;
        }

        echo json_encode($this->result);
    }

    public function getTips() {
        $data = $this->db->select('SELECT * FROM tip');
        echo json_encode($data);
    }

}

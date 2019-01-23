<?php

class FaqModel extends Model {

    function __construct() {
        parent::__construct();
    }

    public function faqs() {
        $data = $this->db->select('SELECT * FROM category');
        echo json_encode($data);
    }

}

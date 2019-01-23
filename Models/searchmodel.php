<?php

class SearchModel extends Model {

    function __construct() {
        parent::__construct();
    }

    public function searchResult() {
        $id = $_POST['id'];
        $data = $this->db->select("SELECT * FROM category WHERE category_id = :categoryid", ['categoryid' => $id]);
        echo json_encode($data);
    }
    
    public function searchWhereNotEqualToResult() {
        $id = $_POST['id'];
        $data = $this->db->select("SELECT * FROM category WHERE category_id != :categoryid", ['categoryid' => $id]);
        echo json_encode($data);
    }

}

<?php

class CategoryModel extends Model {

    function __construct() {
        parent::__construct();
    }

    public function addCategory($data) {
        $postData = [
            'name' => $data['name'],
            'description' => $data['description'],
            'image' => $data['image']
        ];
        

        if (!empty($postData)) {
            $this->db->insert('category', $postData);

            $this->result['message'] = TRUE;
        } else {
            $this->result['message'] = FALSE;
        }

        echo json_encode($this->result);
    }

    public function getCategory() {
        $data = $this->db->select('SELECT * FROM category');
        echo json_encode($data);
    }

}

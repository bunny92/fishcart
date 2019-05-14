<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Admin_model extends CI_Model {

    public function admin_authenticate($credential) {
        $query = $this->db->get_where('admin_users', $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $data['status'] = 1;
            $data['last_login_time'] = date("Y-m-d h:i:sa");
            $this->update_user_data($data);
            return 'success';
        }
        return 'Invalid Credentials..!';
    }

    public function update_user_data($data) {
        $this->db->where('username', 'admin');
        $this->db->update('admin_users', $data);
    }

    public function getTableData($tableName) {
        return $this->db->get($tableName)->result();
    }

    public function showproductsbyid_model($productId) {
        $sql = "SELECT * FROM product_details where id = $productId";
        $query = $this->db->query($sql);
        return $query->row();
    }

    public function addProductModel($data) {
        $this->db->insert('product_details', $data);
        $groupId = $this->db->insert_id();
        if ($groupId > 0) {
            return TRUE;
        } else {
            return FALSE;
            ;
        }
    }

}

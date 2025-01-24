<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class License_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_licenses() {
        $query = $this->db->get('license');
        return $query->result_array();
    }

    public function insert_license($data) {
        return $this->db->insert('license', $data);
    }

    public function get_license_by_id($id) {
        $query = $this->db->get_where('license', array('id' => $id));
        return $query->row_array();
    }

    public function update_license($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('license', $data);
    }

    public function delete_license($id) {
        return $this->db->delete('license', array('id' => $id));
    }
}
?>

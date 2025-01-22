<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Composer_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // La base de datos ya se autocarga, no es necesario volver a cargarla aquí
    }

    public function get_all_composers() {
        $query = $this->db->get('composer');
        return $query->result_array();
    }

    public function insert_composer($data) {
        return $this->db->insert('composer', $data);
    }

    public function get_composer_by_id($id) {
        $query = $this->db->get_where('composer', array('id' => $id));
        return $query->row_array();
    }

    public function update_composer($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('composer', $data);
    }

    public function delete_composer($id) {
        return $this->db->delete('composer', array('id' => $id));
    }
    // Otra forma de obtener un compositor por su id
    public function get_composer($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('composer');
        return $query->row(); // Returns a single row
    }
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Genre_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Obtener todos los géneros
    public function get_all_genres() {
        $query = $this->db->get('musical_genre');
        return $query->result_array();
    }

    // Obtener un género específico por su ID
    public function get_genre($id) {
        $query = $this->db->get_where('musical_genre', array('id' => $id));
        return $query->row_array();
    }

    // Insertar un nuevo género
    public function insert_genre($data) {
        return $this->db->insert('musical_genre', $data);
    }

    // Actualizar un género existente
    public function update_genre($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('musical_genre', $data);
    }

    // Eliminar un género
    public function delete_genre($id) {
        $this->db->where('id', $id);
        return $this->db->delete('musical_genre');
    }
}
?>

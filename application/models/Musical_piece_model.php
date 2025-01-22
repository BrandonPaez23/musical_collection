<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musical_piece_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Obtener todas las piezas musicales
    public function get_all_pieces() {
        $this->db->select('musical_piece.*, composer.name AS composer_name, musical_genre.name AS genre_name');
        $this->db->from('musical_piece');
        $this->db->join('composer', 'musical_piece.composer_id = composer.id', 'left');
        $this->db->join('musical_genre', 'musical_piece.genre_id = musical_genre.id', 'left'); // Aquí se usa 'musical_genre'
        $query = $this->db->get();
        return $query->result_array();
    }

    // Obtener una pieza musical específica por su ID
    public function get_piece($id) {
        $this->db->select('musical_piece.*, composer.name AS composer_name, musical_genre.name AS genre_name');
        $this->db->from('musical_piece');
        $this->db->join('composer', 'musical_piece.composer_id = composer.id', 'left');
        $this->db->join('musical_genre', 'musical_piece.genre_id = musical_genre.id', 'left'); // Aquí también
        $this->db->where('musical_piece.id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    // Insertar una nueva pieza musical
    public function insert_piece($data) {
        return $this->db->insert('musical_piece', $data);
    }

    // Actualizar una pieza musical existente
    public function update_piece($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('musical_piece', $data);
    }

    // Eliminar una pieza musical
    public function delete_piece($id) {
        $this->db->where('id', $id);
        return $this->db->delete('musical_piece');
    }
}

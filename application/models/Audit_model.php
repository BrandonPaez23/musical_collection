<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Audit_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Obtener todas las auditorías
    public function get_all_audits() {
        $query = $this->db->get('audit');
        return $query->result_array(); // Retorna como arreglo asociativo
    }

    // Insertar una nueva auditoría
    public function insert_audit($data) {
        return $this->db->insert('audit', $data);
    }

    // Obtener una auditoría por su ID
    public function get_audit_by_id($id) {
        $query = $this->db->get_where('audit', array('id' => $id));
        return $query->row_array(); // Retorna una fila como arreglo asociativo
    }

    // Actualizar una auditoría existente
    public function update_audit($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('audit', $data);
    }

    // Eliminar una auditoría por su ID
    public function delete_audit($id) {
        return $this->db->delete('audit', array('id' => $id));
    }

    // Otra forma de obtener una auditoría por su ID
    public function get_audit($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('audit');
        return $query->row(); // Retorna una sola fila como objeto
    }
}
?>

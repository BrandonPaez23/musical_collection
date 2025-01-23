<?php
class Audit extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Audit_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    // Listar todas las auditorías
    public function index() {
        $data['audits'] = $this->Audit_model->get_all_audits();
        $this->load->view('audit/index', $data);
    }

    // Crear una nueva auditoría
    public function create() {
        if ($this->input->post()) {
            $data = array(
                'date_audit' => $this->input->post('date_audit'),
                'description' => $this->input->post('description'),
                'user_audit' => $this->input->post('user_audit'),
                'gender' => $this->input->post('gender'),
            );

            if ($this->Audit_model->insert_audit($data)) {
                redirect('audit');
            }
        }
        $this->load->view('audit/create');
    }

    // Editar una auditoría existente
    public function edit($id) {
        $data['audit'] = $this->Audit_model->get_audit($id);
        if (!$data['audit']) {
            show_404(); // Mostrar error si no se encuentra la auditoría
        }
        $this->load->view('audit/edit', $data);
    }

    // Actualizar una auditoría existente
    public function update($id) {
        $data = array(
            'date_audit' => $this->input->post('date_audit'),
            'description' => $this->input->post('description'),
            'user_audit' => $this->input->post('user_audit'),
            'gender' => $this->input->post('gender'),
        );

        if ($this->Audit_model->update_audit($id, $data)) {
            redirect('audit');
        } else {
            show_error('Error updating audit.');
        }
    }

    // Eliminar una auditoría existente
    public function delete($id) {
        if ($this->Audit_model->delete_audit($id)) {
            redirect('audit');
        }
    }
}
?>

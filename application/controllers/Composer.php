<?php
class Composer extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Composer_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index() {
        $data['composers'] = $this->Composer_model->get_all_composers();
        $this->load->view('composer/index', $data);
    }

    public function create() {
        if ($this->input->post()) {
            $data = array(
                'name' => $this->input->post('name'),
                'nationality' => $this->input->post('nationality'),
                'birth_date' => $this->input->post('birth_date')
            );

            if ($this->Composer_model->insert_composer($data)) {
                redirect('composer');
            }
        }
        $this->load->view('composer/create');
    }

    // Editar compositor
    public function edit($id) {
        $data['composer'] = $this->Composer_model->get_composer($id);
        if (!$data['composer']) {
            show_404(); // Mostrar error si no se encuentra el compositor
        }
        $this->load->view('composer/edit', $data);
    }

    // Actualizar compositor
    public function update($id) {
        $data = array(
            'name' => $this->input->post('name'),
            'nationality' => $this->input->post('nationality'),
            'birth_date' => $this->input->post('birth_date'),
        );

        if ($this->Composer_model->update_composer($id, $data)) {
            redirect('composer');
        } else {
            show_error('Error updating composer.');
        }
    }

    public function delete($id) {
        if ($this->Composer_model->delete_composer($id)) {
            redirect('composer');
        }
    }
}
?>

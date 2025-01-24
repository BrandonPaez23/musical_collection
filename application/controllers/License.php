<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class License extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('License_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index() {
        $data['licenses'] = $this->License_model->get_all_licenses();
        $this->load->view('license/index', $data);
    }

    public function create() {
        if ($this->input->post()) {
            $data = array(
                'type' => $this->input->post('type'),
                'cost' => $this->input->post('cost'),
                'acronym' => $this->input->post('acronym'),
                'status' => $this->input->post('status'),
            );

            if ($this->License_model->insert_license($data)) {
                redirect('license');
            }
        }
        $this->load->view('license/create');
    }

    public function edit($id) {
        $data['license'] = $this->License_model->get_license_by_id($id);
        if (!$data['license']) {
            show_404();
        }

        if ($this->input->post()) {
            $updated_data = array(
                'type' => $this->input->post('type'),
                'cost' => $this->input->post('cost'),
                'acronym' => $this->input->post('acronym'),
                'status' => $this->input->post('status'),
            );

            if ($this->License_model->update_license($id, $updated_data)) {
                redirect('license');
            }
        }

        $this->load->view('license/edit', $data);
    }

    public function delete($id) {
        if ($this->License_model->delete_license($id)) {
            redirect('license');
        } else {
            show_error('Error deleting license.');
        }
    }
}
?>

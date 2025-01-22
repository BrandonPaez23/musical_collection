<?php
class Genre extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Genre_model'); // Cargar el modelo correcto
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    // Mostrar todos los géneros
    public function index() {
        $data['genres'] = $this->Genre_model->get_all_genres();
        $this->load->view('genre/index', $data);
    }

    // Crear un nuevo género
    public function create() {
        if ($this->input->post()) {
            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description')
            );

            if ($this->Genre_model->insert_genre($data)) {
                redirect('genre');
            }
        }
        $this->load->view('genre/create'); // Vista para crear un nuevo género
    }

    // Editar un género existente
    public function edit($id) {
        $data['genre'] = $this->Genre_model->get_genre($id);

        if ($this->input->post()) {
            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description')
            );

            if ($this->Genre_model->update_genre($id, $data)) {
                redirect('genre');
            }
        }
        $this->load->view('genre/edit', $data); // Vista para editar un género
    }

    // Eliminar un género
    public function delete($id) {
        if ($this->Genre_model->delete_genre($id)) {
            redirect('genre');
        }
    }
}
?>

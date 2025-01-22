<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musical_piece extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Cargar los modelos necesarios
        $this->load->model('Musical_piece_model');
        $this->load->model('Composer_model');
        $this->load->model('Genre_model');
    }

    // Método para mostrar todas las piezas musicales
    public function index() {
        $data['pieces'] = $this->Musical_piece_model->get_all_pieces();
        $this->load->view('musical_piece/index', $data);
    }

    // Método para mostrar el formulario de creación
    public function create() {
        $data['composers'] = $this->Composer_model->get_all_composers();
        $data['genres'] = $this->Genre_model->get_all_genres();
        $this->load->view('musical_piece/create', $data);
    }

    // Método para guardar una nueva pieza musical
    public function store() {
        $data = [
            'title' => $this->input->post('title'),
            'author' => $this->input->post('author'),
            'era' => $this->input->post('era'),
            'creation_date' => $this->input->post('creation_date'),
            'composer_id' => $this->input->post('composer_id'),
            'genre_id' => $this->input->post('genre_id'),
        ];
        $this->Musical_piece_model->insert_piece($data);
        redirect('musical_piece');
    }

    // Método para mostrar el formulario de edición
    public function edit($id) {
        $data['piece'] = $this->Musical_piece_model->get_piece($id);
        $data['composers'] = $this->Composer_model->get_all_composers();
        $data['genres'] = $this->Genre_model->get_all_genres();
        $this->load->view('musical_piece/edit', $data);
    }

    // Método para actualizar una pieza musical
    public function update($id) {
        $data = [
            'title' => $this->input->post('title'),
            'author' => $this->input->post('author'),
            'era' => $this->input->post('era'),
            'creation_date' => $this->input->post('creation_date'),
            'composer_id' => $this->input->post('composer_id'),
            'genre_id' => $this->input->post('genre_id'),
        ];
        $this->Musical_piece_model->update_piece($id, $data);
        redirect('musical_piece');
    }

    // Método para eliminar una pieza musical
    public function delete($id) {
        $this->Musical_piece_model->delete_piece($id);
        redirect('musical_piece');
    }
}
?>
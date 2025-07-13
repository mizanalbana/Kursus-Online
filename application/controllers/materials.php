<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materials extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Materials_model');
        $this->load->model('Course_model');
    }

    public function index() {
        $data['title'] = 'Daftar Materi';
        $data['materials'] = $this->Materials_model->get_all();
        $this->load->view('layouts/meta');
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('materials/index', $data);
        $this->load->view('layouts/footer');
    }

    public function create() {
        $data['title'] = 'Tambah Materi';
        $data['courses'] = $this->Course_model->get_all();
        $this->load->view('layouts/meta');
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('materials/create', $data);
        $this->load->view('layouts/footer');
    }

    public function store()
    {
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|zip';
    $config['max_size'] = 2048; // 2MB

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('file')) {
        // Jika gagal upload
        $error = $this->upload->display_errors();
        echo "<p>Upload gagal: $error</p>";
        return;
    }

    // Jika berhasil
    $uploaded_file = $this->upload->data('file_name');

    $data = [
        'course_id' => $this->input->post('course_id'),
        'title' => $this->input->post('title'),
        'description' => $this->input->post('description'),
        'file' => $uploaded_file
    ];

    $this->Materials_model->insert($data);
    redirect('materials');
    }


    public function delete($id) {
        $this->Materials_model->delete($id);
        redirect('materials');
    }
}

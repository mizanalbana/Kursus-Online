<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Enrollment_model');
        $this->load->model('User_model');
        $this->load->model('Course_model');
    }

    public function index()
    {
        $data['title'] = 'Profil Pendaftaran Kursus';
        $data['enrollments'] = $this->Enrollment_model->get_all(); // ambil data relasi
        $data['users'] = $this->User_model->get_all();              // ambil semua user
        $data['courses'] = $this->Course_model->get_all();          // ambil semua course

        // load view
        $this->load->view('layouts/meta');
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('profile/index', $data);
        $this->load->view('layouts/footer');
    }

    public function create()
    {
        $data['users'] = $this->User_model->get_all();
        $data['courses'] = $this->Course_model->get_all();
        $data['title'] = 'Tambah Pendaftaran';

        // load view
        $this->load->view('layouts/meta');
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('profile/create', $data);
        $this->load->view('layouts/footer');

    }

    public function store()
    {
        $data = [
            'user_id' => $this->input->post('user_id'),
            'course_id' => $this->input->post('course_id'),
            // jika ada kolom ini di DB
            'enrolled_at' => $this->input->post('enrolled_at')
        ];

        $this->Enrollment_model->insert($data);
        redirect('profile');
    }


    public function delete($id)
    {
        $this->Enrollment_model->delete($id);
        redirect('profile');
    }
}
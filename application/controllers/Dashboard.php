<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


    public function __construct() {
        parent::__construct();
    //     if (!$this->session->userdata('logged_in')) {
    //         redirect('auth/login');
    //     }


        $this->load->model('Course_model');
        $this->load->model('User_model');
        $this->load->model('Enrollment_model');
        $this->load->model('materials_model');
    }


    public function index() {
        $data['role'] = $this->session->userdata('role');

        if ($data['role'] === 'admin') {
            $data['total_users'] = $this->User_model->count_all();
            $data['total_courses'] = $this->Course_model->count_all();
            $data['total_enrollments'] = $this->Enrollment_model->count_all();
            
            $data['title'] = 'Semua Kursus';
            $data['courses'] = $this->Course_model->get_all_courses();
        }

        if ($data['role'] === 'instructor') {
            $instructor_id = $this->session->userdata('user_id');
            $data['courses'] = $this->Course_model->get_by_instructor($instructor_id);
            $data['materials'] = $this->materials_model->get_by_instructor($instructor_id);
        }

        if ($data['role'] === 'student') {
            $student_id = $this->session->userdata('user_id');
            $data['enrollments'] = $this->Enrollment_model->get_all($student_id);

            $data['title'] = 'Materi';
            $data['materials'] = $this->materials_model->get_all();

        }

        $this->load->view('layouts/meta');
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('dashboard/index', $data);
        $this->load->view('layouts/footer');
        

    }

    // public function index() {
        
    //     $this->load->view('layouts/meta');
    //     $this->load->view('layouts/header', $data);
    //     $this->load->view('layouts/sidebar');
    //     $this->load->view('dashboard/index', $data);
    //     $this->load->view('layouts/footer');
    // }

    
}

    



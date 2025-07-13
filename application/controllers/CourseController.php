<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CourseController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Course_model');
    }

    public function index() {
        $data['title'] = 'Semua Kursus';
        $data['courses'] = $this->Course_model->get_all_courses();
        $this->load->view('layouts/meta');
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('dashboard/index', $data);
        $this->load->view('layouts/footer');
    }


    public function create() {
    $data['title'] = 'Tambah Kursus';
    $this->load->model('User_model'); // pastikan sudah ada
    $data['instructors'] = $this->User_model->get_all_instructors(); // ambil semua user dengan role 'instructor'
    $this->load->view('layouts/meta');
    $this->load->view('layouts/header', $data);
    $this->load->view('layouts/sidebar');
    $this->load->view('course/create', $data);
    $this->load->view('layouts/footer');
    }

    public function store() {
        $data = [
            'title'         => $this->input->post('title'),
            'description'   => $this->input->post('description'),
            'instructor_id' => $this->input->post('instructor_id'),
            'time'          => $this->input->post('time')
        ];
        $this->Course_model->insert_course($data);
        redirect('dashboard');
    }

    public function edit($id) {
        $data['title'] = 'Edit Kursus';
        $data['course'] = $this->Course_model->get_course($id);
        $this->load->view('layouts/meta');
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar'); // pastikan sudah ada
        $this->load->view('course/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function update($id) {
        $data = [
            'title'         => $this->input->post('title'),
            'description'   => $this->input->post('description'),
            'instructor_id' => $this->input->post('instructor_id'),
            'time'          => $this->input->post('time')
        ];
        $this->Course_model->update_course($id, $data);
        redirect('dashboard');
    }

    public function delete($id) {
        $this->Course_model->delete_course($id);
        redirect('dashboard');
    }
    function hari_indonesia($datetime)
    {
        $day_map = [
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
        ];

        $timestamp = strtotime($datetime);
        $english_day = date('l', $timestamp);
        $hari = $day_map[$english_day];
        return $hari . ', ' . date('d M Y H:i', $timestamp);
    }

}

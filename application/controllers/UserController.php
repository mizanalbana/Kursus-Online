<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!is_role('admin')) {
            redirect('dashboard');
        }

        $this->load->model('User_model');
    }

    public function index() {
        $data['title'] = 'Kelola Pengguna';
        $data['user'] = $this->User_model->get_all_user();
        $this->load->view('layouts/meta');
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('user/index', $data);
        $this->load->view('layouts/footer');
    }

    public function edit($id) {
        $data['title'] = 'Edit Pengguna';
        $data['user_data'] = $this->User_model->get_user($id);
        $this->load->view('layouts/meta');
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('user/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function update() {
        $id = $this->input->post('id');
        $data = [
            'name'  => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'role'  => $this->input->post('role')
        ];

        $password = $this->input->post('password');
        if (!empty($password)) {
            $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        }
        
        $this->User_model->update_user($id, $data);
        redirect('user');
    }

    public function delete($id) {
        $this->User_model->delete_user($id);
        redirect('user');
    }
}

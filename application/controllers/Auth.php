<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->helper(['url', 'form']);
    }

    public function login()
    {
        if ($this->input->post()) {
            $email = $this->input->post('email', true);
            $password = $this->input->post('password', true);

            $user = $this->User_model->get_by_email($email);

            if (!$user) {
                $this->session->set_flashdata('error', 'Email tidak ditemukan.');
                redirect('auth/login');
            }

            // Bandingkan password input (md5) dengan password dari DB
            if (md5($password) === $user['password']) {
                $this->session->set_userdata([
                    'user_id' => $user['id'],
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'logged_in' => true
                ]);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('error', 'Password salah.');
                redirect('auth/login');
            }
        }

        $this->load->view('auth/login');
    }

    public function register()
    {
        if ($this->input->post()) {
            $data = [
                'name' => $this->input->post('name', true),
                'email' => $this->input->post('email', true),
                'password' => md5($this->input->post('password', true)),
                'role' => $this->input->post('role', true)
            ];

            $this->User_model->register($data);
            $this->session->set_flashdata('success', 'Registrasi berhasil. Silakan login.');
            redirect('auth/login');
        }
        // Load view untuk registrasi
        $data['title'] = 'Registrasi Pengguna';
        $this->load->view('layouts/meta', $data);
        // $this->load->view('layouts/header', $data);
        // $this->load->view('layouts/sidebar');
        $this->load->view('auth/register');
        // $this->load->view('layouts/footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}

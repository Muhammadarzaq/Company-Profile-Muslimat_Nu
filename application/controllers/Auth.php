<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'requaired|trim');
        $this->form_validation->set_rules('password', 'Password', 'requaired|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('tamplate/auth_header');
            $this->load->view('Auth/login');
            $this->load->view('tamplate/auth_footer');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->db->get_where('user', ['email' => $email])->row_array();


            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'as_id' => $user['as_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['as_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                password anda salah </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">
                Email anda salah, Anda belum mendaftar</div>');
                redirect('auth');
            }
        };
    }

    public function registrasi()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'requaired|trim');
        $this->form_validation->set_rules('email', 'Email', 'requaired|trim');
        $this->form_validation->set_rules('password1', 'Password1', 'requaired|trim|min_length[3]|mathces[password2]');
        $this->form_validation->set_rules('password2', 'Password2', 'requaired|trim|mathces[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('tamplate/auth_header');
            $this->load->view('auth/registrasi');
            $this->load->view('tamplate/auth_footer');
        } else {
            $data = [
                'nama' =>  $this->input->post('nama'),
                'email' =>  $this->input->post('email'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'as_id' => 2,
                'gambar' => 'user.png',
                'date_created' =>  time()
            ];
            // echo "<pre>";
            // var_dump($data);
            // die();

            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Selamat, anda sudah terdaftar! silahkan login</div>');

            redirect('auth');

            // INSERT INTO `user` (`id`, `nama`, `email`, `password`, `as_id`, `gambar`, `date_created`) VALUES (NULL, 'muhammad gbrn', 'gbrn@gmail.com', 'u6281648687324uihsdai87467', '2', 'user.png', '');
        }
    }

    public function keluar()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('as_id');
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
        Anda berhasil log Out</div>');
    }
}

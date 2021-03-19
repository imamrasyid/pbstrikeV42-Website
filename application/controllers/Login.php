<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('main/login_model', 'login');
        $this->load->library('lib');
        $this->lib->proteksi_halaman();
    }

    function index()
    {
        $this->form_validation->set_rules(
            'username',
            'Username',
            'trim|min_length[4]|max_length[16]|alpha_numeric|required',
            array(
                'min_length' => '%s Harus Memiliki 4 Karakter Atau Lebih',
                'max_length' => '%s Hanya Dapat Memiliki 16 Karakter',
                'alpha_numeric' => '%s Hanya Dapat Menggunakan Huruf Dan Angka',
                'required' => '%s Tidak Boleh Kosong'
            )
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'trim|min_length[4]|max_length[16]|alpha_numeric|required',
            array(
                'min_length' => '%s Harus Memiliki 4 Karakter Atau Lebih',
                'max_length' => '%s Hanya Dapat Memiliki 16 Karakter',
                'alpha_numeric' => '%s Hanya Dapat Menggunakan Huruf Dan Angka',
                'required' => '%s Tidak Boleh Kosong'
            )
        );
        if ($this->form_validation->run() === FALSE) 
        {
            $data['title'] = 'PointBlank Strike || Login';
            $data['content'] = 'main/content/login/content_login';
            $this->load->view('main/layout/wrapper', $data, FALSE);   
        }
        else
        {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->lib->enkripsi_password($this->input->post('password')),
            );
            if ($data) 
            {
                $this->login->login_akun($data['username'], $data['password']);
            }
        }
    }

    function lupa_password()
    {
        $this->form_validation->set_rules(
            'username',
            'Username',
            'trim|min_length[4]|max_length[16]|alpha_numeric|required',
            array(
                'min_length' => '%s Harus Memiliki 4 Karakter Atau Lebih',
                'max_length' => '%s Hanya Dapat Memiliki 16 Karakter',
                'alpha_numeric' => '%s Hanya Dapat Menggunakan Huruf Dan Angka',
                'required' => '%s Tidak Boleh Kosong'
            )
        );
        $this->form_validation->set_rules(
            'hint_question',
            'Pertanyaan Hint',
            'required',
            array('required' => '%s Tidak Boleh Kosong')
        );
        $this->form_validation->set_rules(
            'hint_answer',
            'Jawaban Hint',
            'required',
            array('required' => '%s Tidak Boleh Kosong')
        );
        if ($this->form_validation->run() === FALSE) 
        {
            $data['title'] = 'PointBlank Strike || Lupa Password';
            $data['content'] = 'main/content/login/content_lupapassword';
            $this->load->view('main/layout/wrapper', $data, FALSE);   
        }
        else
        {
            $this->login->lupa_password();
        }
    }

    function set_passwordbaru()
    {
        if (empty($_GET['token'])) 
        {
            $this->session->set_flashdata('gagal', 'Token Tidak Ditemukan');
            redirect(base_url('login/lupa_password'), 'refresh');
        }
        if (!empty($_GET['token']))
        {
            $this->form_validation->set_rules(
                'password_baru',
                'Password Baru',
                'trim|min_length[4]|max_length[16]|alpha_numeric|required',
                array(
                    'min_length' => '%s Harus Memiliki 4 Karakter Atau Lebih',
                    'max_length' => '%s Hanya Dapat Memiliki 16 Karakter',
                    'alpha_numeric' => '%s Hanya Dapat Menggunakan Huruf Dan Angka',
                    'required' => '%s Tidak Boleh Kosong'
                )
            );
            $this->form_validation->set_rules(
                're_passwordbaru',
                'Konfirmasi Password Baru',
                'trim|min_length[4]|max_length[16]|alpha_numeric|required|matches[password_baru]',
                array(
                    'min_length' => '%s Harus Memiliki 4 Karakter Atau Lebih',
                    'max_length' => '%s Hanya Dapat Memiliki 16 Karakter',
                    'alpha_numeric' => '%s Hanya Dapat Menggunakan Huruf Dan Angka',
                    'required' => '%s Tidak Boleh Kosong',
                    'matches' => '%s Tidak Cocok'
                )
            );
            if ($this->form_validation->run() === FALSE) 
            {
                $data['title'] = 'PointBlank Strike || Set Password Baru';
                $data['content'] = 'main/content/login/content_passwordbaru';
                $this->load->view('main/layout/wrapper', $data, FALSE);   
            }
            else
            {
                $token = $_GET['token'];
                $password = $this->input->post('password_baru');
                $enkripsi_password = $this->lib->enkripsi_password($this->input->post('password_baru'));
                
                $this->login->password_baru($token, $enkripsi_password, $password);
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
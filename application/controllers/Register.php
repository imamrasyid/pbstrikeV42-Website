<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Register extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('main/register_model', 'register');
        $this->load->library('lib');
        $this->lib->proteksi_halaman();
    }

    function index()
    {
        $this->form_validation->set_rules(
            'username',
            'Username',
            'trim|min_length[4]|max_length[16]|alpha_numeric|is_unique[accounts.login]|required',
            array(
                'min_length' => '%s Harus Memiliki 4 Karakter Atau Lebih',
                'max_length' => '%s Hanya Dapat Memiliki 16 Karakter',
                'alpha_numeric' => '%s Hanya Dapat Menggunakan Huruf dan Angka',
                'is_unique' => '%s Telah Terdaftar',
                'required' => '%s Tidak Boleh Kosong'
            )
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'trim|valid_email|required',
            array(
                'valid_email' => '%s Tidak Valid',
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
        $this->form_validation->set_rules(
            're_password',
            'Konfirmasi Password',
            'trim|min_length[4]|max_length[16]|alpha_numeric|matches[password]|required',
            array(
                'min_length' => '%s Harus Memiliki 4 Karakter Atau Lebih',
                'max_length' => '%s Hanya Dapat Memiliki 16 Karakter',
                'alpha_numeric' => '%s Hanya Dapat Menggunakan Huruf Dan Angka',
                'matches' => '%s Tidak Cocok',
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
            $data['title'] = 'PointBlank Strike || Register';
            $data['content'] = 'main/content/register/content_register';
            $this->load->view('main/layout/wrapper', $data, FALSE);
        }
        else
        {
            $data = array(
                'login' => $this->input->post('username'),
                'password' => $this->lib->enkripsi_password($this->input->post('password')),
                'lastip' => $this->input->ip_address(),
                'email' => $this->input->post('email'),
                'hint_question' => $this->input->post('hint_question'),
                'hint_answer' => $this->input->post('hint_answer')
            );
            if ($data) 
            {
                $this->register->daftar_akun($data);
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
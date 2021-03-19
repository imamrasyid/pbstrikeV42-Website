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
        $this->load->model('admin/login_model', 'login');
        $this->load->library('lib');
        $this->lib->protect_adminlogin();
    }

    function index()
    {
        $this->form_validation->set_rules(
            'username',
            'Username',
            'trim|min_length[4]|max_length[16]|alpha_numeric|required',
            array(
                'min_length' => '%s Harus Memiliki 4 Karater Atau Lebih',
                'max_length' => '%s Hanya Dapat Memiliki 16 Karakter',
                'alpha_numeric' => '%s GABISA PAKE SIMBOL AJG',
                'required' => '%s Tidak Boleh Kosong'
            )
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'trim|min_length[4]|max_length[16]|alpha_numeric|required',
            array(
                'min_length' => '%s Harus Memiliki 4 Karater Atau Lebih',
                'max_length' => '%s Hanya Dapat Memiliki 16 Karakter',
                'alpha_numeric' => '%s GABISA PAKE SIMBOL AJG',
                'required' => '%s Tidak Boleh Kosong'
            )
        );
        if ($this->form_validation->run() === FALSE) 
        {
            $data['title'] = 'Point Blank Strike || Login Panel';
            $data['content'] = 'admin/content/login/content_login';
            $this->load->view('admin/layout/login/wrapper', $data, FALSE);   
        }
        else
        {
            $username = $this->input->post('username');
            $password = $this->lib->enkripsi_password($this->input->post('password'));
            $validation = $this->login->admin_login($username, $password);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
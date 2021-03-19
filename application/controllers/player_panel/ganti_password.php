<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class ganti_password extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('lib');
        $this->lib->proteksi_playerpanel();
        $this->load->model('main/gantipassword_model', 'ganti_password');
    }

    function index()
    {
        $this->form_validation->set_rules(
            'password_lama',
            'Password Lama',
            'trim|min_length[4]|max_length[16]|alpha_numeric|required',
            array(
                'min_length' => '%s Harus Memiliki 4 Karakter Atau Lebih',
                'max_length' => '%s Hanya Dapat Memiliki 16 Karakter',
                'alpha_numeric' => '%s Hanya Dapat Menggunakan Huruf Dan Angka',
                'required' => '%s Tidak Boleh Kosong'
            )
        );
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
            're_password_baru',
            'Konfirmasi Password Baru',
            'trim|min_length[4]|max_length[16]|alpha_numeric|matches[password_baru]|required',
            array(
                'min_length' => '%s Harus Memiliki 4 Karakter Atau Lebih',
                'max_length' => '%s Hanya Dapat Memiliki 16 Karakter',
                'alpha_numeric' => '%s Hanya Dapat Menggunakan Huruf Dan Angka',
                'matches' => '%s Tidak Cocok',
                'required' => '%s Tidak Boleh Kosong'
            )
        );
        if ($this->form_validation->run() === FALSE) 
        {
            $data['title'] = 'Point Blank Strike || Ganti Password';
            $data['content'] = 'main/content/player_panel/content_gantipassword';
            $this->load->view('main/layout/wrapper', $data, FALSE);   
        }
        else
        {
            $this->ganti_password->ganti_password_akun();
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
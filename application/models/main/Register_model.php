<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function daftar_akun($data)
    {
        $process = $this->db->insert('accounts', $data);
        if ($process) 
        {
            $this->session->set_flashdata('berhasil', 'Registrasi Berhasil');
            redirect(base_url('register'), 'refresh');
        }
        else
        {
            $this->session->set_flashdata('gagal', 'Server Terlalu Lama Merespon, Registrasi Dibatalkan');
            redirect(base_url('register'), 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
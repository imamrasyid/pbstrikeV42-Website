<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Gantipassword_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('lib');
    }

    function ganti_password_akun()
    {
        $data = array(
            'password_lama' => $this->lib->enkripsi_password($this->input->post('password_lama')),
            'password_baru' => $this->lib->enkripsi_password($this->input->post('password_baru')),
            're_password_baru' => $this->lib->enkripsi_password($this->input->post('re_password_baru'))
        );

        $check = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid'], 'password' => $data['password_lama']));
        $result = $check->row();
        if ($result) 
        {
            if ($data['password_baru'] == $result->password) 
            {
                $this->session->set_flashdata('gagal', 'Password Baru Tidak Boleh Sama Dengan Password Lama');
                redirect(base_url('player_panel/ganti_password'), 'refresh');
            }
            if ($data['password_baru'] != $result->password) 
            {
                $process = $this->db->where('player_id', $_SESSION['uid'])->update('accounts', array('password' => $data['password_baru']));
                if ($process) 
                {
                    $this->session->set_flashdata('berhasil', 'Password Berhasil Diganti');
                    redirect(base_url('player_panel/ganti_password'), 'refresh');
                }
                else
                {
                    $this->session->set_flashdata('gagal', 'Server Terlalu Lama Merespon, Ganti Password Dibatalkan');
                    redirect(base_url('player_panel/ganti_password'), 'refresh');
                }
            }
        }
        else
        {
            $this->session->set_flashdata('gagal', 'Password Lama Salah');
            redirect(base_url('player_panel/ganti_password'), 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
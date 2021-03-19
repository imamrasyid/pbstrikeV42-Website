<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('logger');
    }

    function admin_login($param1, $param2)
    {
        $check = $this->db->get_where('accounts', array('login' => $param1, 'password' => $param2));
        $result = $check->row();
        if ($result) 
        {
            if ($result->access_level != 6) 
            {
                $this->logger->logger_login_gagal();
                redirect('https://www.youtube.com/watch?v=j-8DQK1oSoE', 'refresh');
            }
            if ($result->access_level == 6) 
            {
                $this->session->set_userdata('admin_id', $result->player_id);
                $this->session->set_userdata('admin_name', $result->player_name);
                $this->logger->logger_login_berhasil();
                $this->session->set_flashdata('berhasil', 'Login Berhasil, Selamat Datang '.$_SESSION['admin_name'].'');
                redirect(base_url('404/home'), 'refresh');
            }
        }
        else
        {
            $this->logger->logger_login_gagal();
            redirect('https://www.youtube.com/watch?v=j-8DQK1oSoE', 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
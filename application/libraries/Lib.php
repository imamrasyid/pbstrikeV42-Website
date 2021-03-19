<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Lib
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->database();
    }

    public function enkripsi_password($password)
    {
        $ingredient = '/x!a@r-$r%an¨.&e&+f*f(f(a)';
		$encrypt_result = hash_hmac('md5', $password, $ingredient);
		return $encrypt_result;
    }
    
    public function proteksi_halaman()
    {
        if (!empty($_SESSION['uid'])) 
        {
            redirect(base_url('home'), 'refresh');
        }
    }

    public function proteksi_playerpanel()
    {
        if (empty($_SESSION['uid'])) 
        {
            redirect(base_url('home'), 'refresh');
        }
    }

    public function protect_adminlogin()
    {
        if (!empty($_SESSION['admin_id'])) 
        {
            redirect(base_url('404/home'), 'refresh');
        }
    }

    public function protect_adminhome()
    {
        if (empty($_SESSION['admin_id'])) 
        {
            redirect(base_url('404/login'), 'refresh');
        }
    }

    public function protect_hint()
    {
        $check = $this->ci->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
        $result = $check->row();
        if ($result) 
        {
            if ($result->hint_question != null || $result->hint_answer != null) 
            {
                redirect(base_url('player_panel'), 'refresh');
            }
        }
        else
        {
            redirect(base_url('home'), 'refresh');
        }
    }

    function eyetracker_encrypt($param)
    {
        $username = $param;
        $hash_username = md5($param);
        $main_process = rand(000000000, 999999999) . $hash_username;
        $result = sha1($main_process);

        $db_insert = $this->ci->db->insert('web_lupapassword', array('login' => $username, 'token' => $result, 'tanggal' => date('d-m-Y'), 'status' => '1'));
        if ($db_insert) 
        {
            redirect(base_url('login/set_passwordbaru?token='.$result));
        }
        else
        {
            $this->session->set_flashdata('gagal', 'Sepertinya ada yang salah, silahkan menghubungi developer untuk mendapatkan detail kesalahan');
            redirect(base_url('login/lupa_password'), 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
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
        $this->load->library('lib');
    }
    
    function login_akun($username, $password)
    {
        $check = $this->db->get_where('accounts', array('login' => $username, 'password' => $password));
        $result = $check->row();
        if ($result == null) 
        {
            $this->session->set_flashdata('gagal', 'Username Atau Password Salah');
            redirect(base_url('login'), 'refresh');
        }
        if ($result != null) 
        {
            $update_lastlogin = $this->db->where('player_id', $result->player_id)->update('accounts', array('lastip' => $this->input->ip_address(), 'last_login' => date('ydmhi')));
            if ($update_lastlogin) 
            {
                $this->session->set_userdata('uid', $result->player_id);
                $this->session->set_userdata('player_name', $result->player_name);
                $this->session->set_userdata('access_level', $result->access_level);
                redirect(base_url('home'), 'refresh');
            }
            else
            {
                $this->session->set_flashdata('gagal', 'Login Gagal');
            }
        }
    }

    function lupa_password()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'hint_question' => $this->input->post('hint_question'),
            'hint_answer' => $this->input->post('hint_answer')
        );
        $check_user = $this->db->get_where('accounts', array('login' => $data['username']));
        $result_user = $check_user->row();
        if ($result_user) 
        {
            if ($result_user->hint_question != $data['hint_question']) 
            {
                $this->session->set_flashdata('gagal', 'Pertanyaan Hint Salah');
                redirect(base_url('login/lupa_password'), 'refresh');
            }
            if ($result_user->hint_answer != $data['hint_answer']) 
            {
                $this->session->set_flashdata('gagal', 'Jawaban Hint Salah');
                redirect(base_url('login/lupa_password'), 'refresh');
            }
            if ($result_user->hint_question == $data['hint_question'] && $result_user->hint_answer == $data['hint_answer']) 
            {
                $this->lib->eyetracker_encrypt($data['username']);
            }
        }
        else
        {
            $this->session->set_flashdata('gagal', 'Akun Tidak Ditemukan');
            redirect(base_url('login/lupa_password'), 'refresh');
        }
    }
    function get_token($param)
    {
        $check = $this->db->where('token', $param)->get('web_lupapassword');
        $result = $check->row();
        if ($result) 
        {
            if ($result->status == 0) 
            {
                $this->session->set_flashdata('gagal', 'Token Tidak Valid. Gagal Melakukan Recovery Password');
                redirect(base_url('login/lupa_password'), 'refresh');
            }
            if ($result->status == 1) 
            {
                return $result;
            }
        }
        else
        {
            $this->session->set_flashdata('gagal', 'Token Tidak Ditemukan. Silahkan Menghubungi Developer Untuk Informasi Lebih Lanjut');
            redirect(base_url('login/lupa_password'), 'refresh');
        }
    }

    function password_baru($token, $data, $data2)
    {
        $check = $this->db->get_where('web_lupapassword', array('token' => $token));
        $result = $check->row();
        if ($result) 
        {
            $akun_check = $this->db->get_where('accounts', array('login' => $result->login));
            $akun_result = $akun_check->row();
            if ($akun_result) 
            {
                $proses = $this->db->where('login', $akun_result->login)->update('accounts', array('password' => $data, 'passwordview' => $data2));
                if ($proses) 
                {
                    $proses2 = $this->db->where('token', $result->token)->update('web_lupapassword', array('status' => '0'));
                    if ($proses2) 
                    {
                        $this->session->set_flashdata('berhasil', 'Password Berhasil Diperbarui, Silahkan Melakukan Login Ulang.');
                        redirect(base_url('login'), 'refresh');
                    }
                    else
                    {
                        $this->session->set_flashdata('gagal', 'Server Terlalu Lama Merespon, Pembaruan Password Dibatalkan');
                    }
                }
                else
                {
                    $this->session->set_flashdata('gagal', 'Server Terlalu Lama Merespon, Pembaruan Password Dibatalkan');
                    redirect(base_url('login'), 'refresh');
                }
            }
            else
            {
                $this->session->set_flashdata('gagal', 'Akun Tidak Ditemukan');
                redirect(base_url('login'), 'refresh');
            }
        }
        else
        {
            $this->session->set_flashdata('gagal', 'Token Tidak Cocok');
            redirect(base_url('login/lupa_password'), 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
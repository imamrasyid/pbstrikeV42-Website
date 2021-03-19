<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Logger
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->database();
    }

    function logger_login_gagal()
    {
        $this->ci->db->insert(
            'web_log_admin',
            array(
                'deskripsi' => ''.$this->ci->input->ip_address().' Melakukan Login.',
                'browser' => ''.$this->ci->agent->browser().' '.$this->ci->agent->version().'',
                'os' => $this->ci->agent->platform(),
                'ip_address' => $this->ci->input->ip_address(),
                'date' => date('d-m-Y h:i:s')
            )
        );
    }

    function logger_login_berhasil()
    {
        $this->ci->db->insert(
            'web_log_admin',
            array(
                'deskripsi' => ''.$_SESSION['admin_name'].' Telah Melakukan Login Ke Dalam Sistem.',
                'browser' => ''.$this->ci->agent->browser().' '.$this->ci->agent->version().'',
                'os' => $this->ci->agent->platform(),
                'ip_address' => $this->ci->input->ip_address(),
                'date' => date('d-m-Y h:i:s')
            )
        );
    }

    function logger_redeemcode_berhasil()
    {
        $this->ci->db->insert(
            'web_log_admin',
            array(
                'deskripsi' => ''.$_SESSION['admin_name'].' Telah Membuat Redeem Code Baru',
                'browser' => ''.$this->ci->agent->browser().' '.$this->ci->agent->version().'',
                'os' => $this->ci->agent->platform(),
                'ip_address' => $this->ci->input->ip_address(),
                'date' => date('d-m-Y h:i:s')
            )
        );
    }

    function logger_tambahakun()
    {
        $this->ci->db->insert('web_log_admin',
            array(
                'deskripsi' => ''.$_SESSION['admin_name'].' Telah Menambahkan Sebuah Akun Baru.',
                'browser' => ''.$this->ci->agent->browser.' '.$this->ci->agent->version().'',
                'os' => $this->ci->agent->platform(),
                'ip_address' => $this->ci->input->ip_address(),
                'date' => date('d-m-Y h:i:s')
            )
        );
    }

    function logger_logout()
    {
        $this->ci->db->insert(
            'web_log_admin',
            array(
                'deskripsi' => ''.$_SESSION['admin_name'].' Telah Logout Dari Sistem',
                'browser' => ''.$this->ci->agent->browser().' '.$this->ci->agent->version().'',
                'os' => $this->ci->agent->platform(),
                'ip_address' => $this->ci->input->ip_address(),
                'date' => date('d-m-Y h:i:s')
            )
        );
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
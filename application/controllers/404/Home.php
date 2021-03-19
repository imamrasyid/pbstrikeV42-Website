<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/home_model', 'home');
        $this->load->library('lib');
        $this->load->library('logger');
        $this->lib->protect_adminhome();
    }
    function index()
    {
        $data['title'] = 'Point Blank Strike || Admin Dashboard';
        $data['header'] = 'Dashboard';

        $data['total_players'] = $this->home->total_players();
        $data['online_players'] = $this->home->online_players();
        $data['total_clan'] = $this->home->total_clan();
        $data['total_vip'] = $this->home->total_vip();
        $data['total_log'] = '';

        $data['total_admin'] = $this->home->total_admin();
        $data['registrasi_terakhir'] = $this->home->registrasi_terakhir();

        $data['content'] = 'admin/content/home/content_home';
        $this->load->view('admin/layout/main/wrapper', $data, FALSE);
    }

    function logout()
    {
        $this->logger->logger_logout();
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        redirect(base_url('404/login'), 'refresh');
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
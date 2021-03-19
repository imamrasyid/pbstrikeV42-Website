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
        $this->load->model('main/playerpanel_model', 'player_panel');
        $this->load->library('lib');
        $this->lib->proteksi_playerpanel();
    }

    function index()
    {
        $data['title'] = 'PointBlank Strike || Player Panel';

        $data['detail'] = $this->player_panel->detail_akun();

        $data['content'] = 'main/content/player_panel/content_home';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
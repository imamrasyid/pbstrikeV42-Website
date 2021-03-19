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
        $this->load->model('main/home_model', 'home');
    }

    function index()
    {
        $data['title'] = 'PointBlank Strike || Home';

        $data['players_online'] = $this->home->players_online();
        $data['server_status'] = '1'; // 1 = Online || 0 = Maintenance;
        $data['total_players'] = $this->home->total_players();

        $data['best_players'] = $this->home->best_players();
        $data['best_clans'] = $this->home->best_clans();

        $data['content'] = 'main/content/home/content_home';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }

    function logout()
    {
        $this->home->logout();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
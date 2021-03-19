<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Player_rank extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('main/rank_model', 'rank');
    }

    function index()
    {
        $data['title'] = 'PointBlank Strike || Player Rank';

        $data['player_rank'] = $this->rank->player_rank();
        $data['content'] = 'main/content/player_rank/content_playerrank';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
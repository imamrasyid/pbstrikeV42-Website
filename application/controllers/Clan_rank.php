<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Clan_rank extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('main/rank_model', 'rank');
    }

    function index()
    {
        $data['title'] = 'PointBlank Strike || Clan Rank';

        $data['clan_rank'] = $this->rank->clan_rank();

        $data['content'] = 'main/content/clan_rank/content_clanrank';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
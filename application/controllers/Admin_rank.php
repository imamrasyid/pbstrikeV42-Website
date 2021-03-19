<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Admin_rank extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('main/rank_model', 'rank');
    }
    function index()
    {
        $data['title'] = 'PointBlank Strike || Admin Rank';

        $data['admin'] = $this->rank->admin_rank();

        $data['content'] = 'main/content/admin_rank/content_adminrank';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
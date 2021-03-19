<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Inventory extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('main/inventory_model', 'inventory');
        $this->load->library('lib');
        $this->lib->proteksi_playerpanel();
    }

    function index()
    {
        $data['title'] = 'PointBlank Strike || Inventory';

        $data['item'] = $this->inventory->total_item();

        $data['content'] = 'main/content/player_panel/content_inventory';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }

    function delete_item()
    {
        if (empty($_GET['idx'])) 
        {
            redirect(base_url('player_panel/inventory'), 'refresh');
        }
        if (!empty($_GET['idx'])) 
        {
            $this->inventory->delete_item($_GET['idx']);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
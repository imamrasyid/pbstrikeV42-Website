<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Rank_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function player_rank()
    {
        return $this->db->order_by('exp', 'desc')->where('access_level <', 5)->get('accounts')->result_array();
    }

    function clan_rank()
    {
        return $this->db->order_by('clan_exp', 'desc')->get('clan_data')->result_array();
    }

    function admin_rank()
    {
        return $this->db->order_by('exp', 'desc')->where('access_level >', 4)->get('accounts')->result_array();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
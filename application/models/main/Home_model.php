<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function players_online()
    {
        $check = $this->db->where('online', 't')->get('accounts');
        return $check->num_rows();
    }

    function total_players()
    {
        $check = $this->db->get('accounts');
        return $check->num_rows();
    }

    function best_players()
    {
        return $this->db->order_by('exp', 'desc')->limit('5')->get('accounts')->result_array();
    }

    function best_clans()
    {
        return $this->db->order_by('clan_exp', 'desc')->limit('5')->get('clan_data')->result_array();
    }

    function logout()
    {
        $this->session->unset_userdata('uid');
        $this->session->unset_userdata('player_name');
        $this->session->unset_userdata('access_level');
        redirect(base_url('home'), 'refresh');
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
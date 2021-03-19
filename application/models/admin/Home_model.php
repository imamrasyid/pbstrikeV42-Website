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

    function total_players()
    {
        $check = $this->db->get('accounts');
        $result = $check->num_rows();
        return $result;
    }

    function online_players()
    {
        $check = $this->db->get_where('accounts', array('online' => 't'));
        $result = $check->num_rows();
        return $result;
    }

    function total_clan()
    {
        $check = $this->db->get('clan_data');
        return $check->num_rows();
    }

    function total_vip()
    {
        $check = $this->db->where('pc_cafe >', 0)->get('accounts');
        return $check->num_rows();
    }

    function total_log()
    {

    }

    function total_admin()
    {
        return $this->db->where('access_level >', 5)->get('accounts')->result_array();
    }

    function registrasi_terakhir()
    {
        return $this->db->order_by('player_id', 'desc')->limit(5)->get('accounts')->result_array();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
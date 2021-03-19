<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Banned_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function semua_player()
    {
        $check = $this->db->where('access_level <', 4)->get('accounts');
        $result = $check->result_array();
        return $result;
    }

    function banned($param1, $param2)
    {
        $check = $this->db->get_where('accounts', array('player_id' => $param1));
        $result = $check->row();
        if ($result) 
        {
            if ($result->player_name == "EyeTracker") 
            {
                $this->session->set_flashdata('berhasil', 'Player Berhasil Dibanned. Tapi Boong :v');
                redirect(base_url('404/player/banned'), 'refresh');
            }
            if ($result->player_name == "N1ceDre4m") 
            {
                $this->session->set_flashdata('berhasil', 'Player Berhasil Dibanned. Tapi Boong :v');
                redirect(base_url('404/player/banned'), 'refresh');
            }
            if ($result->player_name != "EyeTracker" || $result->player_name != "N1ceDre4m") 
            {
                $process = $this->db->where('player_id', $result->player_id)->update('accounts',array('access_level' => '-1', 'ban_reason' => $param2));
                if ($process) 
                {
                    $this->session->set_flashdata('berhasil', "".$result->player_name." Berhasil Dibanned!.");
                    redirect(base_url('404/player/banned'), 'refresh');
                }
                else
                {
                    $this->session->set_flashdata('gagal', 'Server Terlalu Sibuk Untuk Merespon. Banned Dibatalkan');
                    redirect(base_url('404/player/banned'), 'refresh');
                }
            }
        }
        else
        {
            $this->session->set_flashdata('gagal', 'Player Tidak Ditemukan');
            redirect(base_url('404/player/banned'), 'refresh');
        }
    }

    function unbanned($param)
    {
        $check = $this->db->get_where('accounts', array('player_id' => $param));
        $result = $check->row();
        if ($result) 
        {
            $process = $this->db->where('player_id', $result->player_id)->update('accounts', array('access_level' => '0', 'ban_reason' => ''));
            if ($process) 
            {
                $this->session->set_flashdata('berhasil', 'Player Berhasil Diunbanned');
                redirect(base_url('404/player/banned'), 'refresh');
            }
            else
            {
                $this->session->set_flashdata('gagal', 'Server Terlalu Sibuk, Unbanned Dibatalkan');
                redirect(base_url('404/player/banned'), 'refresh');
            }
        }
        else
        {
            $this->session->set_flashdata('gagal', 'Player Tidak Ditemukan');
            redirect(base_url('404/player/banned'), 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
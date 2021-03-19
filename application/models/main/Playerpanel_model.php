<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Playerpanel_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function detail_akun()
    {
        $check = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
        return $check->row();
    }

    function setel_ulang_equipment()
    {
        $check = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
        $result = $check->row();
        if (result) 
        {
            $process = $this->db->where('player_id', $_SESSION['uid'])->update('accounts', array(
                'weapon_primary' => '100003004',
                'weapon_secondary' => '601002003',
                'weapon_melee' => '702001001',
                'weapon_thrown_normal' => '803007001',
                'weapon_thrown_special' => '904007002',
                'char_red' => '1001001005',
                'char_blue' => '1001002006',
                'char_helmet' => '1102003001',
                'char_dino' => '1006003041',
                'char_beret' => '0'
            ));
            if ($process) 
            {
                $this->session->set_flashdata('berhasil', 'Equipment Anda Telah Dipulihkan. Sekarang Anda Dapat Login Kembali');
                redirect(base_url('player_panel'), 'refresh');
            }
            else
            {
                $this->session->set_flashdata('gagal', 'Server Terlalu Lama Merespon, Equipment Gagal Dipulihkan.');
                redirect(base_url('player_panel'), 'refresh');
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
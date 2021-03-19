<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function total_item()
    {
        return $this->db->order_by('object_id', 'desc')->get_where('player_items', array('owner_id' => $_SESSION['uid']))->result_array();
    }

    function delete_item($data)
    {
        $check = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'object_id' => $data));
        $result = $check->row();
        if ($result) 
        {
            $proses = $this->db->where('object_id', $result->object_id)->delete('player_items');
            if ($proses) 
            {
                $this->session->set_flashdata('berhasil', 'Item Berhasil Dihapus');
                redirect(base_url('player_panel/inventory'), 'refresh');
            }
            else
            {
                $this->session->set_flashdata('gagal', 'Server Terlalu Lama Merespon, Item Gagal Dihapus');
                redirect(base_url('player_panel/inventory'), 'refresh');
            }
        }
        else
        {
            $this->session->set_flashdata('gagal', 'Item Tidak Ditemukan');
            redirect(base_url('player_panel/inventory'), 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
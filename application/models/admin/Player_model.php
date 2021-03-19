<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Player_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('lib');
        $this->load->library('logger');
    }

    function semua_player()
    {
        return $this->db->order_by('player_id', 'desc')->get('accounts')->result_array();
    }

    function semua_pangkat()
    {
        return $this->db->order_by('rank', 'asc')->get('web_rankinfo')->result_array();
    }

    function tambah_player()
    {
        $data = array(
            'login' => $this->input->post('login'),
            'password' => $this->lib->enkripsi_password($this->input->post('password')),
            'player_name' => $this->input->post('player_name'),
            'rank' => $this->input->post('rank'),
            'gp' => $this->input->post('gp'),
            'exp' => $this->input->post('exp'),
            'access_level' => $this->input->post('access_level'),
            'email' => $this->input->post('email'),
            'money' => $this->input->post('money')
        );
        if ($data['gp'] > 999999999) 
        {
            $this->session->set_flashdata('gagal', 'Points Tidak Boleh Lebih Dari 9 Digit Angka');
            redirect(base_url('404/player/tambah'), 'refresh');
        }
        if ($data['exp'] > 999999999) 
        {
            $this->session->set_flashdata('gagal', 'Exp Tidak Boleh Lebih Dari 9 Digit Angka');
            redirect(base_url('404/player/tambah'), 'refresh');
        }
        if ($data['money'] > 999999999) 
        {
            $this->session->set_flashdata('gagal', 'Cash Tidak Boleh Lebih Dari 9 Digit Angkat');
            redirect(base_url('404/player/tambah'), 'refresh');
        }

        $process = $this->db->insert('accounts', $data);
        if ($process) 
        {
            $this->logger->logger_tambahakun();
            $this->session->set_flashdata('berhasil', 'Akun Berhasil Ditambahkan');
            redirect(base_url('404/player'), 'refresh');
        }
        else
        {
            $this->session->set_flashdata('gagal', 'Server Terlalu Lama Merespon, Tambah Akun Dibatalkan');
            redirect(base_url('404/player/tambah'), 'refresh');
        }
    }

    function detail($param)
    {
        $check = $this->db->get_where('accounts', array('player_id' => $param));
        $result = $check->row();
        if ($result == null) 
        {
            $this->session->set_flashdata('gagal', 'Data Player Tidak Ditemukan');
            redirect(base_url('404/player'), 'refresh');
        }
        if ($result != null) 
        {
            return $result;
        }
    }

    function inventory($param)
    {
        $check = $this->db->order_by('object_id', 'desc')->get_where('player_items', array('owner_id' => $param));
        $result = $check->result_array();
        if ($result == null)
        {
            $this->session->set_flashdata('gagal', 'Data Player Tidak Ditemukan');
            redirect(base_url('404/player'), 'refresh');
        }
        if ($result != null) 
        {
            return $result;
        }
    }

    function delete_item($param)
    {
        $check = $this->db->get_where('player_items', array('object_id' => $param));
        $result = $check->row();
        if ($result == null) 
        {
            $this->session->set_flashdata('gagal', 'Tidak Ada Item Dengan ID ini');
            redirect(base_url('404/player'), 'refresh');
        }
        if ($result != null) 
        {
            $process = $this->db->where('object_id', $result->object_id)->delete('player_items');
            if ($process) 
            {
                $this->session->set_flashdata('berhasil', 'Item Berhasil Dihapus');
                redirect(base_url('404/player/inventory?idx='.$result->owner_id), 'refresh');
            }
            else
            {
                $this->session->set_flashdata('gagal', 'Item Gagal Dihapus');
                redirect(base_url('404/player/'), 'refresh');
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
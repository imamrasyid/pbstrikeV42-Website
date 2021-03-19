<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Redeemcode_model extends CI_Model
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

    function validasi_kode($data)
    {
        $cek_kode = $this->db->where('item_code', $data)->get('item_code');
        $hasil = $cek_kode->row();
        if ($hasil == null) 
        {
            $this->session->set_flashdata('gagal', 'Kode Tidak Ditemukan');
            redirect(base_url('player_panel/redeemcode'), 'refresh');
        }
        if ($hasil != null) 
        {
            $cek_pemakaian = $this->db->get_where('check_user_itemcode', array('item_code' => $hasil->item_code, 'uid' => $_SESSION['uid']));
            $hasil2 = $cek_pemakaian->row();
            if ($hasil2 == null) 
            {
                // Redeem Code Weapon || 1
                if ($hasil->tipe == 1) 
                {
                    $cek_inven = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $hasil->item_id));
                    $hasil3 = $cek_inven->row();
                    if ($hasil3 == null) 
                    {
                        $proses = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $hasil->item_id, 'item_name' => $hasil->item_name, 'count' => $hasil->item_count, 'category' => '1', 'equip' => '1'));
                        if ($proses) 
                        {
                            $proses2 = $this->db->insert('check_user_itemcode', array('uid' => $_SESSION['uid'], 'item_code' => $hasil->item_code));
                            if ($proses2) 
                            {
                                $this->session->set_flashdata('berhasil', 'Selamat '.$_SESSION['player_name'].', Kamu Mendapatkan '.$hasil->item_alert.'');
                                redirect(base_url('player_panel/redeemcode'), 'refresh');
                            }
                        }
                        else
                        {
                            $this->session->set_flashdata('gagal', 'Server Terlalu Lama Merespon, Redeem Code Dibatalkan');
                            redirect(base_url('player_panel/redeemcode'), 'refresh');
                        }
                    }
                    if ($hasil3 != null) 
                    {
                        // Jika Item Belum Dipakai
                        if ($hasil3->equip == 1) 
                        {
                            $total = $hasil->item_count + $hasil3->count;
                            $proses = $this->db->where('item_id', $hasil->item_id)->update('player_items', array('count' => $total));
                            if ($proses) 
                            {
                                $proses2 = $this->db->insert('check_user_itemcode', array('uid' => $_SESSION['uid'], 'item_code' => $hasil->item_code));
                                if ($proses2) 
                                {
                                    $this->session->set_flashdata('berhasil', 'Redeem Kode Berhasil & Durasi Item Berhasil Ditambahkan (Isi Code : '.$hasil3->item_name.').');
                                    redirect(base_url('player_panel/redeemcode'), 'refresh');
                                }
                            }
                        }
                        else
                        {
                            $this->session->set_flashdata('gagal', 'Kamu Telah Memiliki Item Ini Dan Sedang Dalam Kondisi Use, Redem Kode Dibatalkan');
                            redirect(base_url('player_panel/redeemcode'), 'refresh');
                        }
                    }   
                }
                if ($hasil->tipe == 2) 
                {
                    $cek_inven = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $hasil->item_id));
                    $hasil3 = $cek_inven->row();
                    if ($hasil3 == null) 
                    {
                        $proses = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $hasil->item_id, 'item_name' => $hasil->item_name, 'count' => $hasil->item_count, 'category' => '2', 'equip' => '1'));
                        if ($proses) 
                        {
                            $proses2 = $this->db->insert('check_user_itemcode', array('uid' => $_SESSION['uid'], 'item_code' => $hasil->item_code));
                            if ($proses2) 
                            {
                                $this->session->set_flashdata('berhasil', 'Selamat '.$_SESSION['player_name'].', Kamu Mendapatkan '.$hasil->item_alert.'');
                                redirect(base_url('player_panel/redeemcode'), 'refresh');
                            }
                        }
                        else
                        {
                            $this->session->set_flashdata('gagal', 'Server Terlalu Lama Merespon, Redeem Code Dibatalkan');
                            redirect(base_url('player_panel/redeemcode'), 'refresh');
                        }
                    }
                    if ($hasil3 != null) 
                    {
                        // Jika Item Belum Dipakai
                        if ($hasil3->equip == 1) 
                        {
                            $total = $hasil->item_count + $hasil3->count;
                            $proses = $this->db->where('item_id', $hasil->item_id)->update('player_items', array('count' => $total));
                            if ($proses) 
                            {
                                $proses2 = $this->db->insert('check_user_itemcode', array('uid' => $_SESSION['uid'], 'item_code' => $hasil->item_code));
                                if ($proses2) 
                                {
                                    $this->session->set_flashdata('berhasil', 'Redeem Kode Berhasil & Durasi Item Berhasil Ditambahkan (Isi Code : '.$hasil3->item_name.').');
                                    redirect(base_url('player_panel/redeemcode'), 'refresh');
                                }
                            }
                        }
                        else
                        {
                            $this->session->set_flashdata('gagal', 'Kamu Telah Memiliki Item Ini Dan Sedang Dalam Kondisi Use, Redem Kode Dibatalkan');
                            redirect(base_url('player_panel/redeemcode'), 'refresh');
                        }
                    }
                }
                if ($hasil->tipe == 3) 
                {
                    $cek_inven = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $hasil->item_id));
                    $hasil3 = $cek_inven->row();
                    if ($hasil3 == null) 
                    {
                        $proses = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $hasil->item_id, 'item_name' => $hasil->item_name, 'count' => $hasil->item_count, 'category' => '3', 'equip' => '1'));
                        if ($proses) 
                        {
                            $this->session->set_flashdata('berhasil', 'Selamat '.$_SESSION['player_name'].', Kamu Mendapatkan '.$hasil->item_alert.'');
                            redirect(base_url('player_panel/redeemcode'), 'refresh');
                        }
                        else
                        {
                            $this->session->set_flashdata('gagal', 'Server Terlalu Lama Merespon, Redeem Code Dibatalkan');
                            redirect(base_url('player_panel/redeemcode'), 'refresh');
                        }
                    }
                    if ($hasil3 != null) 
                    {
                        // Jika Item Belum Dipakai
                        if ($hasil3->equip == 1) 
                        {
                            $total = $hasil->item_count + $hasil3->count;
                            $proses = $this->db->where('item_id', $hasil->item_id)->update('player_items', array('count' => $total));
                            if ($proses) 
                            {
                                $this->session->set_flashdata('berhasil', 'Redeem Kode Berhasil & Durasi Item Berhasil Ditambahkan (Isi Code : '.$hasil3->item_name.').');
                                redirect(base_url('player_panel/redeemcode'), 'refresh');
                            }
                        }
                        else
                        {
                            $this->session->set_flashdata('gagal', 'Kamu Telah Memiliki Item Ini Dan Sedang Dalam Kondisi Use, Redem Kode Dibatalkan');
                            redirect(base_url('player_panel/redeemcode'), 'refresh');
                        }
                    }
                }
            }
            if ($hasil2 != null)
            {
                $this->session->set_flashdata('gagal', 'Kode Redeem Sudah Pernah Digunakan');
                redirect(base_url('player_panel/redeemcode'), 'refresh');
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
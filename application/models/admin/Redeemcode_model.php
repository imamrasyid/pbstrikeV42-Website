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
        $this->load->library('logger');
    }

    function total_diredeem($param)
    {
        $check = $this->db->get_where('check_user_itemcode', array('item_code' => $param));
        return $check->num_rows();
    }

    function semua_redeemcode()
    {
        return $this->db->get('item_code')->result_array();
    }

    function tambah_redeemcode()
    {
        $item_code = $this->input->post('item_code');
        $data = array(
            'item_id' => $this->input->post('item_id'),
            'item_name' => $this->input->post('item_name'),
            'item_count' => $this->input->post('item_count'),
            'item_alert' => $this->input->post('item_alert'),
            'item_code' => $this->input->post('item_code')
        );
        if ($data) 
        {
            $check = $this->db->get_where('item_code', array('item_code' => $item_code));
            $result = $check->row();
            if ($result) 
            {
                $this->session->set_flashdata('gagal', 'Item Code Sudah Terdaftar');
                redirect(base_url('404/redeemcode'), 'refresh');
            }
            else
            {
                if ($data['item_id'] >= 100003001 && $data['item_id'] <= 904007069)
                {
                    $buytype = $this->db->get_where('shop', array('item_id' => $data['item_id']));
                    $result2 = $buytype->row();
                    if ($result2->buy_type == 1) 
                    {
                        if ($data['item_count'] > 100) 
                        {
                            $this->session->set_flashdata('gagal', 'Jumlah Item Unit Hanya Boleh Kurang Dari 100 Unit');
                            redirect(base_url('404/redeemcode/tambah'), 'refresh');
                        }
                        else
                        {
                            $proses = $this->db->insert('item_code', array('item_id' => $data['item_id'], 'item_name' => $data['item_name'], 'item_count' => $data['item_count'], 'item_alert' => $data['item_alert'], 'item_code' => $data['item_code'], 'tipe' => '1'));
                            if ($proses) 
                            {
                                $this->logger->logger_redeemcode_berhasil();
                                $this->session->set_flashdata('berhasil', 'Data Redeem Berhasil Ditambahkan');
                                redirect(base_url('404/redeemcode'), 'refresh');
                            }
                            else
                            {
                                $this->session->set_flashdata('gagal', 'Server Terlalu Lama Merespon, Tambah Redeem Code Dibatalkan');
                                redirect(base_url('404/redeemcode/tambah'), 'refresh');
                            }
                        }
                    }
                    if ($result2->buy_type == 2 && $data['item_count'] < 86400)
                    {
                        if ($data['item_count'] < 86400 && $data['item_count'] > 2592000)
                        {
                            $this->session->set_flashdata('gagal', 'Jumlah Item Hari Hanya Boleh Kurang Dari 30 Hari');
                            redirect(base_url('404/redeemcode'), 'refresh');
                        }
                        else
                        {
                            $proses = $this->db->insert('item_code', array('item_id' => $data['item_id'], 'item_name' => $data['item_name'], 'item_count' => $data['item_count'], 'item_alert' => $data['item_alert'], 'item_code' => $data['item_code'], 'tipe' => '2'));
                            if ($proses) 
                            {
                                $this->logger->logger_redeemcode_berhasil();
                                $this->session->set_flashdata('berhasil', 'Data Redeem Berhasil Ditambahkan');
                                redirect(base_url('404/redeemcode'), 'refresh');
                            }
                            else
                            {
                                $this->session->set_flashdata('gagal', 'Server Terlalu Lama Merespon, Tambah Redeem Code Dibatalkan');
                                redirect(base_url('404/redeemcode/tambah'), 'refresh');
                            }
                        }
                    }
                    if ($result2->buy_type != 1 || $result2->buy_type != 2) 
                    {
                        $this->session->set_flashdata('gagal', 'Item Ini Memiliki Tipe Pembelian Yang Salah, Silahkan Memeriksanya Di Database');
                        redirect(base_url('404/redeemcode'), 'refresh');
                    }
                }
                if ($data['item_id'] > 904007069 && $data['item_id'] <= 1105003032)
                {
                    $buytype = $this->db->get_where('shop', array('item_id' => $data['item_id']));
                    $result2 = $buytype->row();
                    if ($result2->buy_type == 1) 
                    {
                        if ($data['item_count'] > 100) 
                        {
                            $this->session->set_flashdata('gagal', 'Jumlah Item Unit Hanya Boleh Kurang Dari 100 Unit');
                            redirect(base_url('404/redeemcode/tambah'), 'refresh');
                        }
                        else
                        {
                            $proses = $this->db->insert('item_code', array('item_id' => $data['item_id'], 'item_name' => $data['item_name'], 'item_count' => $data['item_count'], 'item_alert' => $data['item_alert'], 'item_code' => $data['item_code'], 'tipe' => '1'));
                            if ($proses) 
                            {
                                $this->logger->logger_redeemcode_berhasil();
                                $this->session->set_flashdata('berhasil', 'Data Redeem Berhasil Ditambahkan');
                                redirect(base_url('404/redeemcode'), 'refresh');
                            }
                            else
                            {
                                $this->session->set_flashdata('gagal', 'Server Terlalu Lama Merespon, Tambah Redeem Code Dibatalkan');
                                redirect(base_url('404/redeemcode/tambah'), 'refresh');
                            }
                        }
                    }
                    if ($result2->buy_type == 2)
                    {
                        if ($data['item_count'] < 86400 && $data['item_count'] > 2592000)
                        {
                            $this->session->set_flashdata('gagal', 'Jumlah Item Hari Hanya Boleh Kurang Dari 30 Hari');
                            redirect(base_url('404/redeemcode'), 'refresh');
                        }
                        else
                        {
                            $proses = $this->db->insert('item_code', array('item_id' => $data['item_id'], 'item_name' => $data['item_name'], 'item_count' => $data['item_count'], 'item_alert' => $data['item_alert'], 'item_code' => $data['item_code'], 'tipe' => '2'));
                            if ($proses) 
                            {
                                $this->logger->logger_redeemcode_berhasil();
                                $this->session->set_flashdata('berhasil', 'Data Redeem Berhasil Ditambahkan');
                                redirect(base_url('404/redeemcode'), 'refresh');
                            }
                            else
                            {
                                $this->session->set_flashdata('gagal', 'Server Terlalu Lama Merespon, Tambah Redeem Code Dibatalkan');
                                redirect(base_url('404/redeemcode/tambah'), 'refresh');
                            }
                        }
                    }
                    if ($result2->buy_type != 1 || $result2->buy_type != 2) 
                    {
                        $this->session->set_flashdata('gagal', 'Item Ini Memiliki Tipe Pembelian Yang Salah, Silahkan Memeriksanya Di Database');
                        redirect(base_url('404/redeemcode'), 'refresh');
                    }
                }
                if ($data['item_id'] > 1105003032 && $data['item_id'] <= 1302379000)
                {
                    $buytype = $this->db->get_where('shop', array('item_id' => $data['item_id']));
                    $result2 = $buytype->row();
                    if ($result2->buy_type == 1) 
                    {
                        if ($data['item_count'] > 100) 
                        {
                            $this->session->set_flashdata('gagal', 'Jumlah Item Unit Hanya Boleh Kurang Dari 100 Unit');
                            redirect(base_url('404/redeemcode/tambah'), 'refresh');
                        }
                        else
                        {
                            $proses = $this->db->insert('item_code', array('item_id' => $data['item_id'], 'item_name' => $data['item_name'], 'item_count' => $data['item_count'], 'item_alert' => $data['item_alert'], 'item_code' => $data['item_code'], 'tipe' => '1'));
                            if ($proses) 
                            {
                                $this->logger->logger_redeemcode_berhasil();
                                $this->session->set_flashdata('berhasil', 'Data Redeem Berhasil Ditambahkan');
                                redirect(base_url('404/redeemcode'), 'refresh');
                            }
                            else
                            {
                                $this->session->set_flashdata('gagal', 'Server Terlalu Lama Merespon, Tambah Redeem Code Dibatalkan');
                                redirect(base_url('404/redeemcode/tambah'), 'refresh');
                            }
                        }
                    }
                    if ($result2->buy_type == 2)
                    {
                        if ($data['item_count'] < 86400 && $data['item_count'] > 2592000)
                        {
                            $this->session->set_flashdata('gagal', 'Jumlah Item Hari Hanya Boleh Kurang Dari 30 Hari');
                            redirect(base_url('404/redeemcode'), 'refresh');
                        }
                        else
                        {
                            $proses = $this->db->insert('item_code', array('item_id' => $data['item_id'], 'item_name' => $data['item_name'], 'item_count' => $data['item_count'], 'item_alert' => $data['item_alert'], 'item_code' => $data['item_code'], 'tipe' => '2'));
                            if ($proses) 
                            {
                                $this->logger->logger_redeemcode_berhasil();
                                $this->session->set_flashdata('berhasil', 'Data Redeem Berhasil Ditambahkan');
                                redirect(base_url('404/redeemcode'), 'refresh');
                            }
                            else
                            {
                                $this->session->set_flashdata('gagal', 'Server Terlalu Lama Merespon, Tambah Redeem Code Dibatalkan');
                                redirect(base_url('404/redeemcode/tambah'), 'refresh');
                            }
                        }
                    }
                    if ($result2->buy_type != 1 || $result2->buy_type != 2) 
                    {
                        $this->session->set_flashdata('gagal', 'Item Ini Memiliki Tipe Pembelian Yang Salah, Silahkan Memeriksanya Di Database');
                        redirect(base_url('404/redeemcode'), 'refresh');
                    }
                }
            }   
        }
    }
    
    function list_item()
    {
        return $this->db->order_by('item_id', 'asc')->get('shop')->result_array();
    }

    function hapus($param1)
    {
        $check = $this->db->where('item_id', $param1)->get('item_code');
        $result = $check->row();
        if ($result) 
        {
            $process = $this->db->where('item_id', $result->item_id)->delete('item_code');
            if ($process) 
            {
                $this->session->set_flashdata('berhasil', 'Redeem Kode Berhasil Dihapus');
                redirect(base_url('404/redeemcode'), 'refresh');
            }
            else
            {
                $this->session->set_flashdata('gagal', 'Redeem Kode Gagal Dihapus');
                redirect(base_url('404/redeemcode'), 'refresh');
            }
        }
        else
        {
            $this->session->set_flashdata('gagal', 'Item Code Tidak Ditemukan');
            redirect(base_url('404/redeemcode'), 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
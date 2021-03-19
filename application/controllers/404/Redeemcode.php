<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Redeemcode extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/redeemcode_model', 'redeemcode');
        $this->load->library('lib');
        $this->lib->protect_adminhome();
    }

    function index()
    {
        $data['title'] = 'Point Blank Strike || Admin Redeem Code';
        $data['header'] = 'Redeem Code';

        $data['redeemcode'] = $this->redeemcode->semua_redeemcode();

        $data['content'] = 'admin/content/redeemcode/content_data';
        $this->load->view('admin/layout/main/wrapper', $data, FALSE);
    }

    function tambah()
    {
        $this->form_validation->set_rules(
            'item_id',
            'Item',
            'required',
            array('required' => '%s Tidak Boleh Kosong')
        );
        $this->form_validation->set_rules(
            'item_name',
            'Nama Item',
            'required',
            array('required' => '%s Tidak Boleh Kosong')
        );
        $this->form_validation->set_rules(
            'item_count',
            'Jumlah Item',
            'required',
            array('required' => '%s Tidak Boleh Kosong')
        );
        $this->form_validation->set_rules(
            'item_alert',
            'Notifikasi',
            'required',
            array('required' => '%s Tidak Boleh Kosong')
        );
        $this->form_validation->set_rules(
            'item_code',
            'Item Code',
            'required|max_length[19]',
            array('required' => '%s Tidak Boleh Kosong', 'max_length' => '%s Hanya Dapat Memiliki Maksimal 16 Karakter<br>Ex. (AAAA-BBBB-CCCC-DDDD)')
        );
        if ($this->form_validation->run() === FALSE) 
        {
            $data['title'] = 'Point Blank Strike || Admin Tambah Redeem Code';
            $data['header'] = 'Tambah Redeem Code';
    
            $data['list_item'] = $this->redeemcode->list_item();
    
            $data['content'] = 'admin/content/redeemcode/content_tambah';
            $this->load->view('admin/layout/main/wrapper', $data, FALSE);   
        }
        else
        {
            $this->redeemcode->tambah_redeemcode();
        }
    }

    function hapus()
    {
        if (empty($_GET['idx']))
        {
            $this->session->set_flashdata('gagal', 'Data Redeem Code Tidak Ditemukan');
            redirect(base_url('404/redeemcode'), 'refresh');
        }
        if (!empty($_GET['idx'])) 
        {
            $this->redeemcode->hapus($_GET['idx']);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
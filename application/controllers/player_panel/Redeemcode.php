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
        $this->load->model('main/redeemcode_model', 'redeemcode');
        $this->load->library('lib');
        $this->lib->proteksi_playerpanel();
    }
    function index()
    {
        $this->form_validation->set_rules(
            'code',
            'Redeem Kode',
            'trim|required',
            array(
                'required' => '%s Tidak Boleh Kosong'
            )
        );
        if ($this->form_validation->run() === FALSE) 
        {
            $data['title'] = 'PointBlank Strike || Redeem Code';

            $data['detail'] = $this->redeemcode->detail_akun();
    
            $data['content'] = 'main/content/player_panel/content_redeemcode';
            $this->load->view('main/layout/wrapper', $data, FALSE);   
        }
        else
        {
            $data = $this->input->post('code');
            if ($data) 
            {
                $this->redeemcode->validasi_kode($data);
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Player extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/player_model', 'player');
        $this->load->model('admin/banned_model', 'banned');
        $this->load->library('lib');
        $this->lib->protect_adminhome();
    }

    function index()
    {
        $data['title'] = 'Point Blank Strike || Data Players';
        $data['header'] = 'Players';

        $data['player'] = $this->player->semua_player();

        $data['content'] = 'admin/content/player/content_data';
        $this->load->view('admin/layout/main/wrapper', $data, FALSE);
    }

    function tambah()
    {
        $this->form_validation->set_rules(
            'login',
            'Username',
            'trim|min_length[4]|max_length[16]|required|is_unique[accounts.login]|alpha_numeric',
            array(
                'min_length' => '%s Harus Memiliki Lebih Dari 4 Karakter',
                'max_length' => '%s Hanya Dapat Memiliki 16 Karakter',
                'required' => '%s Tidak Boleh Kosong',
                'is_unique' => '%s Telah Terdaftar',
                'alpha_numeric' => '%s Tidak Dapat Menggunakan Simbol Dan Spasi'
            )
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'trim|min_length[4]|max_length[16]|required|alpha_numeric',
            array(
                'min_length' => '%s Harus Memiliki Lebih Dari 4 Karakter',
                'max_length' => '%s Hanya Dapat Memiliki 16 Karakter',
                'required' => '%s Tidak Boleh Kosong',
                'alpha_numeric' => '%s Tidak Dapat Menggunakan Simbol Dan Spasi'
            )
        );
        $this->form_validation->set_rules(
            'player_name',
            'Nickname',
            'trim|min_length[4]|max_length[16]|required',
            array(
                'min_length' => '%s Harus Memiliki Lebih Dari 4 Karakter',
                'max_length' => '%s Hanya Dapat Memiliki 16 Karakter',
                'required' => '%s Tidak Boleh Kosong'
            )
        );
        $this->form_validation->set_rules(
            'rank',
            'Pangkat',
            'required',
            array('required' => '%s Tidak Boleh Kosong')
        );
        $this->form_validation->set_rules(
            'gp',
            'Points',
            'required',
            array('required' => '%s Tidak Boleh Kosong')
        );
        $this->form_validation->set_rules(
            'exp',
            'Exp',
            'required',
            array('required' => '%s Tidak Boleh Kosong')
        );
        $this->form_validation->set_rules(
            'access_level',
            'Akses Level',
            'required',
            array('required' => '%s Tidak Boleh Kosong')
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'trim|valid_email|required',
            array(
                'valid_email' => '%s Tidak Valid',
                'required' => '%s Tidak Boleh Kosong'
            )
        );
        $this->form_validation->set_rules(
            'money',
            'Cash',
            'required',
            array('required' => '%s Tidak Boleh Kosong')
        );
        if ($this->form_validation->run() === FALSE) 
        {
            $data['title'] = 'Point Blank Strike || Tambah Player';
            $data['header'] = 'Tambah Player';

            $data['pangkat'] = $this->player->semua_pangkat();

            $data['content'] = 'admin/content/player/content_tambah';
            $this->load->view('admin/layout/main/wrapper', $data, FALSE);
        }
        else
        {
            $this->player->tambah_player();
        }
    }

    function detail()
    {
        if (empty($_GET['idx'])) 
        {
            $this->session->set_flashdata('gagal', 'Player Tidak Ditemukan');
            redirect(base_url('404/player'), 'refresh');
        }
        if (!empty($_GET['idx'])) 
        {
            $data['title'] = 'Point Blank Strike || Detail Player';
            $data['header'] = 'Detail Player';
            
            $data['detail'] = $this->player->detail($_GET['idx']);

            $data['content'] = 'admin/content/player/content_detail';
            $this->load->view('admin/layout/main/wrapper', $data, FALSE);
        }
    }

    function inventory()
    {
        if (empty($_GET['idx'])) 
        {
            $this->session->set_flashdata('gagal', 'Player Tidak Ditemukan');
            redirect(base_url('404/player'), 'refresh');
        }
        if (!empty($_GET['idx'])) 
        {
            $data['title'] = 'Point Blank Strike || Inventory Player';
            $data['header'] = 'Inventory Player';

            $data['inventory'] = $this->player->inventory($_GET['idx']);

            $data['content'] = 'admin/content/player/content_inventory';
            $this->load->view('admin/layout/main/wrapper', $data, FALSE);
        }
    }

    function banned()
    {
        $data['title'] = 'Point Blank Strike || Banned Player';
        $data['header'] = 'Banned Player';

        $data['player'] = $this->banned->semua_player();

        $data['content'] = 'admin/content/player/content_banned';
        $this->load->view('admin/layout/main/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
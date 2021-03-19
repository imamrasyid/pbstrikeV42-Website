<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Hint_baru extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('lib');
        $this->lib->protect_hint();
        $this->load->model('main/hintbaru_model', 'hint_baru');
    }
    function index()
    {
        $this->form_validation->set_rules(
            'hint_question',
            'Pertanyaan Hint',
            'required',
            array('required' => '%s Tidak Boleh Kosong')
        );
        $this->form_validation->set_rules(
            'hint_answer',
            'Jawaban Hint',
            'required',
            array('required' => '%s Tidak Boleh Kosong')
        );
        if ($this->form_validation->run() === FALSE) 
        {
            $data['title'] = 'Point Blank Strike || Hint Baru';
            $data['content'] = 'main/content/player_panel/content_hintbaru';
            $this->load->view('main/layout/wrapper', $data, FALSE);   
        }
        else
        {
            $this->hint_baru->hint_baru_akun();
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
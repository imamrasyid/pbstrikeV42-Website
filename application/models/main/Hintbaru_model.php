<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Hintbaru_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function hint_baru_akun()
    {
        $data = array(
            'hint_question' => $this->input->post('hint_question'),
            'hint_answer' => $this->input->post('hint_answer')
        );
        $process = $this->db->where('player_id', $_SESSION['uid'])->update('accounts', array('hint_question' => $data['hint_question'], 'hint_answer' => $data['hint_answer']));
        if ($process) 
        {
            $this->session->set_flashdata('berhasil', 'Hint Berhasil Dibuat. Harap Tidak Memberitahukan Hint Anda Kepada Siapapun');
            redirect(base_url('player_panel'), 'refresh');
        }
        else
        {
            $this->session->set_flashdata('gagal', 'Server Terlalu Lama Merespon. Hint Gagal Dibuat');
            redirect(base_url('player_panel/hint_baru'), 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
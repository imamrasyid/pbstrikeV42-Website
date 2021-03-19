<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Download_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function game()
    {
        return $this->db->where('tipe_file', '1')->get('web_download')->result_array();
    }

    function support_tools()
    {
        return $this->db->where('tipe_file', '2')->get('web_download')->result_array();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
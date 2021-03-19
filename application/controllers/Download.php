<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Download extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('main/download_model', 'download');
    }
    
    function index()
    {
        $data['title'] = 'PointBlank Strike || Download';

        $data['game'] = $this->download->game();
        $data['support_tools'] = $this->download->support_tools();

        $data['content'] = 'main/content/download/content_download';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>
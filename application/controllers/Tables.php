<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables extends CI_Controller 
{
    public function index()
    {
        $data = array(
                        'judul' => 'Tables',
                        'subjudul' => '',
                        'page' => 'v_tables', //file page di folder view
                     );
        $this->load->view('v_template', $data, false); //buat template
     }
}
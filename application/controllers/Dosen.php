<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller 
{
    public function index()
    {
        $data = array(
                        'judul' => 'Dosen',
                        'subjudul' => '',
                        'page' => 'dosen/v_dosen', //file page di folder view
                     );
        $this->load->view('v_template', $data, false); //buat template
     }
}
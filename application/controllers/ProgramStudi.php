<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProgramStudi extends CI_Controller 
{
    public function index()
    {
        $data = array(
                        'judul' => 'ProgramStudi',
                        'subjudul' => '',
                        'page' => 'programstudi/v_programstudi', //file page di folder view
                     );
        $this->load->view('v_template', $data, false); //buat template
     }
}
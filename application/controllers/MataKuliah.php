<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MataKuliah extends CI_Controller 
{
    public function index()
    {
        $data = array(
                        'judul' => 'MataKuliah',
                        'subjudul' => '',
                        'page' => 'matakuliah/v_matakuliah', //file page di folder view
                     );
        $this->load->view('v_template', $data, false); //buat template
     }
}
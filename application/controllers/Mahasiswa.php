<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller 
{
    public function index()
    {
        $data = array(
                        'judul' => 'Mahasiswa',
                        'subjudul' => '',
                        'page' => 'mahasiswa/v_mahasiswa', //file page di folder view
                     );
        $this->load->view('v_template', $data, false); //buat template
     }
}
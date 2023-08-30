<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {
    public function index()
    {
        $data['nama']='Annisa Mukhri';
        $data['nim']='181401104';
        $data['kom']='B';
        $this->load->view('mahasiswa_view',$data);
    }
}
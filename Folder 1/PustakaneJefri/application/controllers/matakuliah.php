<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {
    	$data = [
    	'kode' => $this->inpit->post('kode'),
    	'nama' => $this->inpit->post('nama'),
    	'sks' => $this->inpit->post('sks')
    	];

    	$this->load->view('view-data-matakuliah', $data);
    }
}
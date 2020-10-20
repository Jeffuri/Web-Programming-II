<?php
class latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Welcome to programming Class..";
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('model1'); //memanggil model1
        $hasil = $this->model1->jumlah($n1,$n2); //memanggil hasil dari fungsi jumlah yang ada di model1
        echo "Hasil dari penjumlahan dari ".$n1."+".$n2."=".$hasil;
    }
}
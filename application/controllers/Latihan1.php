<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "<h1>Selamat Datang.. selamat belajar web programming</h1>";
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan1');
        $hasil = $this->Model_latihan1->jumlah($n1, $n2);
        echo "Hasil Penjumlan Dari " . $n1 . " + " . $n2 . " = " . $hasil;
    }

    public function penjumlahan2($n1, $n2)
    {
        $this->load->model('Model_latihan1');

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil']  = $this->Model_latihan1->jumlah($n1, $n2);

        $this->load->view('view-latihan1', $data);
    }
}

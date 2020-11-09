<?php

class Beranda extends Controller {

    public function __construct()
    {
        if(!isset($_SESSION['id_admin']))
        {
            header('Location: ' . BASE_URL .'login');
        }
    }

    public function index()
    {
        $data = array(
            'header1' => "Selamat Datang, Admin !",
            'header2' => "kelola perpustakaan dengan mudah menggunakan website ini.",

            'getBuku' => $this->model('MBeranda')->getBuku(),
            'getPeminjam' => $this->model('MBeranda')->getPeminjam(),
            'getKategori' => $this->model('MBeranda')->getKategori(),
        );
        $this->view('templates/header', $data);
        $this->view('beranda/Vberanda', $data);
        $this->view('templates/footer');
    }
}
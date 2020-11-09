<?php

class Buku extends Controller {

    public function __construct()
    {
        if(!isset($_SESSION['id_admin']))
        {
            header('Location: ' . BASE_URL .'login');
        }
    }

    public function index()
    {
        // pagination
        $jumlahDataPerHalaman = 12;
        $jumlahData    = $this->model('MBuku')->hitungBuku();
        $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
        $halamanAktif = (HALAMAN_AKTIF != "") ? HALAMAN_AKTIF : 1;
        $awalData = ( $jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

        $sebelum = $halamanAktif - 1;
        $sesudah = $halamanAktif + 1;

        $halamanSebelum = ($halamanAktif > 1) ? '<a href="'.BASE_URL.'buku/'. $sebelum .'" class="btn btn-light">< sebelum</a>' : '';
        $halamanSesudah = ($halamanAktif < $jumlahHalaman) ? '<a href="'.BASE_URL.'buku/'. $sesudah .'" class="btn btn-light">sesudah ></a>' : '';

        // echo $halamanAktif + 1;
        $data = array(
            'header1' => "Buku",
            'header2' => "kelola buku perpustakaan di halaman ini.",

            'bukuAll' => $this->model('MBuku')->getBukuAll($awalData, $jumlahDataPerHalaman),
            'kategori' => $this->model('MBuku')->getKategori(),
            'jumlahHalaman' => $jumlahHalaman,
            'halamanSebelum'   => $halamanSebelum,  
            'halamanSesudah'   => $halamanSesudah,  
            'halamanAktif'   => $halamanAktif,
        );
        $this->view('templates/header',$data);
        $this->view('buku/Vbuku', $data);
        $this->view('templates/footer');
    }

    public function tambahData()
    {
        $tambah = $this->model('MBuku')->tambahData($_POST);
        
        if ($tambah > 0) {
            Flasher::setFlash("Berhasil", "Menambahkan Buku", "success");

            header('Location: '. BASE_URL . 'buku');
            exit;
        }else{
            Flasher::setFlash("Gagal", $tambah, "danger");

            header('Location: '. BASE_URL . 'buku');
            exit;
        }

        
    }

    public function editData()
    {
        $edit = $this->model('MBuku')->editData($_POST);
        
        if ($edit > 0) {
            Flasher::setFlash("Berhasil", "Menambahkan Buku", "success");

            header('Location: '. BASE_URL . 'buku');
            exit;
        }else{
            Flasher::setFlash("Gagal", $edit, "danger");

            header('Location: '. BASE_URL . 'buku');
            exit;
        }
    }

    public function hapusData()
    {
        $hapus = $this->model('MBuku')->hapusData($_POST);
        echo $hapus."Aa";
        if ($hapus > 0) {
            Flasher::setFlash("Berhasil", "Menghapus Buku", "success");

            header('Location: '. BASE_URL . 'buku');
            exit;
        }else{
            Flasher::setFlash("Gagal", "Menghapus Buku", "danger");

            header('Location: '. BASE_URL . 'buku');
            exit;
        }
    }

    public function cari()
    {
        $data = array(
            'header1' => "Buku",
            'header2' => "kelola buku perpustakaan di halaman ini.",

            'bukuAll' => $this->model('MBuku')->getBuku($_POST),
            'kategori' => $this->model('MBuku')->getKategori(),
            'jumlahHalaman' => '',
            'halamanSebelum'   => '',  
            'halamanSesudah'   => '',  
            'halamanAktif'   => '',
        );
        $this->view('templates/header',$data);
        $this->view('buku/Vbuku', $data);
        $this->view('templates/footer');
    }
}
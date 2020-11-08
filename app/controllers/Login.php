<?php

class Login extends controller {

    public function __construct()
    {
        if(!session_id())
        {
            header('Location: ' . BASE_URL .'beranda');
        }
    }

    public function index()
    {
        $this->view('login/Vlogin');
    }

    public function masuk()
    {
        $masuk = $this->model('MLogin')->getAdmin($_POST);


        if(!empty($masuk))
        {
            Session::startSession($masuk[0]['id']);
            header('Location: ' . BASE_URL .'beranda');
        }else{
            Flasher::setFlash('Gagal','Username atau Password Salah !','danger');
            header('Location: ' . BASE_URL .'login');
        }
    }

    public function keluar()
    {
        Session::destroySession();
        header('Location: ' . BASE_URL .'login');
    }
}
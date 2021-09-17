<?php
class Registrasi extends Controller{
    public function index(){
        $this->view('Registrasi/index');
    }
    public function petugas(){
        $this->view('Registrasi/Petugas');
    }
    public function prosesRegisMasyarakat(){
        if($this->model('Masyarakat_model')->getdata($_POST) == null){
            if ($this->model('Masyarakat_model')->registrasi($_POST) != null){
                header("location:".BASEURL);
            }
        }
        else{
            $_SESSION['gagalregistrasi'] = true;
            header('Location:'.BASEURL.'/Registrasi');
           
        }
    }
    public function prosesRegisPetugas(){
        if($this->model('Masyarakat_model')->getdata($_POST) == null){
            if($this->model('Petugas_model')->getdata($_POST) == null){
                if ($this->model('Petugas_model')->registrasi($_POST) != null){
                    header("location:".BASEURL.'/Admin/dataoperator');
                }
            }
            else {
                $_SESSION['gagalregistrasi'] = true;
                header('Location:'.BASEURL.'/Registrasi/petugas');
            } 
        }
        else{
            $_SESSION['gagalregistrasi'] = true;
            header('Location:'.BASEURL.'/Registrasi/petugas');
        }
    }
}
?>
<?php
class Pengaduan extends Controller{
    public function index(){
        $this->view('Pengaduan/index');
    }
    public function prosestambahPengaduan(){
        if($this->model('Pengaduan_model')->buatpengaduan($_POST) != null){
            header('location:'.BASEURL.'/Home');
        }
        if(isset($_SESSION['gagalukuran'])){
            unset($_SESSION['gagalukuran']);
            $_SESSION['gagaluploadukuran'] =  true;
            header('Location:'.BASEURL.'/Pengaduan');

        }else if(isset($_SESSION['gagalekstensi'])){
            unset($_SESSION['gagalukuran']);
            $_SESSION['gagaluploadekstensi'] = true;
            header('Location:'.BASEURL.'/Pengaduan');
        }
}
}
?>
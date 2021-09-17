<?php
class Petugas extends Controller{
    public function index(){
        $this->view('Petugas/index');
    }
    public function logout(){
        unset($_SESSION['petugas']);
        header('Location:'.BASEURL);
    }
    public function laporan(){
        $data['pengaduan'] = $this->model("Pengaduan_model")->ambilpengaduan();
        $this->view('Petugas/laporan',$data);
    }
    public function cetak(){
        $data['pilihan'] = $this->model("Pengaduan_model")->ambilpengaduanbybulan($_POST);
        $this->view('Petugas/cetak',$data);
    }
    public function pilihan(){
        $data['pengaduan'] = $this->model("Pengaduan_model")->ambilpengaduanbybulan($_POST);
        $this->view('Petugas/laporan',$data);
    }
}
?>
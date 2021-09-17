<?php
class Admin extends Controller{
    public function index(){
        $this->view('Admin/index');
    }
    public function dataaduan(){
        $data['pengaduan'] = $this->model("Pengaduan_model")->ambilpengaduan();
        $this->view('Admin/Aduan',$data);
    }
    public function laporan(){
        $data['pengaduan'] = $this->model("Pengaduan_model")->ambilpengaduan();
        $this->view('Admin/laporan',$data);
    }
    public function cetak(){
        $data['pilihan'] = $this->model("Pengaduan_model")->ambilpengaduanbybulan($_POST);
        $this->view('Admin/cetak',$data);
    }
    public function pilihan(){
        $data['pengaduan'] = $this->model("Pengaduan_model")->ambilpengaduanbybulan($_POST);
        $this->view('Admin/laporan',$data);
    }
    public function detailAduan($id_pengaduan){
        $data['pengaduan'] = $this->model("Pengaduan_model")->ambilpengaduanbyId($id_pengaduan);
        $data['tanggapan'] = $this->model("Tanggapan_model")->ambiltanggapanbyid($id_pengaduan);
        $this->view('Admin/detailaduan',$data);
    }
    public function dataoperator(){
        $data['petugas'] = $this->model('Petugas_model')->getalldata();
        $this->view('Admin/Petugas',$data);
    }
    public function EditOperator($id_petugas){
        $data['petugas'] = $this->model('Petugas_model')->getpetugasbyid($id_petugas);
        $this->view('Admin/EditPetugas',$data);
    }
    public function proseseditOperator(){
        if($this->model('Petugas_model')->editpetugas($_POST) != null){
            header('Location:'.BASEURL.'/Admin/dataoperator');
        }
    }
    public function datamasyarakat(){
        $data['masyarakat']=$this->model('Masyarakat_model')->getdataAll();
        $this->view('Admin/Masyarakat',$data);
    }
    public function HapusPetugas($id_petugas){
        if($this->model('Petugas_model')->hapuspetugas($id_petugas) != null){
        header('Location:'.BASEURL.'/Admin/dataoperator');
        }
    }
}
?>
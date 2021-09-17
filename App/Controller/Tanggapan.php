<?php
class Tanggapan extends Controller{
    public function index(){
        $data['pengaduan'] = $this->model("Pengaduan_model")->ambilpengaduan();
        $this->view('Tanggapan/index',$data);
    }
    public function ambilpengaduan($id_pengaduan){
        $data['pengaduan'] = $this->model("Pengaduan_model")->ambilpengaduanbyId($id_pengaduan);
        $this->view('Tanggapan/tambahtanggapan',$data);
    }
    public function detail($id_pengaduan){
        $data['pengaduan'] = $this->model("Pengaduan_model")->ambilpengaduanbyId($id_pengaduan);
        $data['tanggapan'] = $this->model("Tanggapan_model")->ambiltanggapanbyid($id_pengaduan);
        $this->view('Tanggapan/detail',$data);
    }
    public function verifikasiselesai($id_pengaduan){
        $data['statuspengaduan'] = $this->model("Pengaduan_model")->updatestatus($id_pengaduan);
        $data['pengaduan'] = $this->model("Pengaduan_model")->ambilpengaduan(); 
        if($data['statuspengaduan'] != null){
            header('location:'.BASEURL.'/Tanggapan');
        }
    }
    public function prosestambahTanggapan(){
        if($this->model('Tanggapan_model')->buattanggapan($_POST) != null){
            header('location:'.BASEURL.'/Tanggapan');
        }
    }
}    
?>
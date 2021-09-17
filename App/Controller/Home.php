<?php
class Home extends Controller{
    public function index()
    {
        $data['pengaduan'] = $this->model("Pengaduan_model")->ambilpengaduan();
        $this->view('Home/index',$data);
    }
    public function editmasyarakat(){
        $this->view('Home/Edit');
    }
    public function detailAduan($id_pengaduan){
        $data['pengaduan'] = $this->model("Pengaduan_model")->ambilpengaduanbyId($id_pengaduan);
        $data['tanggapan'] = $this->model("Tanggapan_model")->ambiltanggapanbyid($id_pengaduan);
        $this->view('Home/detailaduan',$data);
    }
    public function proseseditMasyarakat(){
        if($this->model('Masyarakat_model')->editmasyarakat($_POST) !=null){
            header('location:'.BASEURL.'/Home');
        }
    }
    public function CekPengaduan(){
        $data['pengaduan'] = $this->model('Pengaduan_model')->getPengaduanbyNik();
        $data['selesai'] = $this->model('Pengaduan_model')->pengaduan_selesai();
        $this->view('Home/pengaduan',$data);
    }
    public function logout(){
        unset($_SESSION['data']);
        header('Location:'.BASEURL);
    }
}
?>
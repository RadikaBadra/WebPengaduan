<?php
class Pengaduan_model{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function ambilpengaduan(){
        $this->db->query("call `ambil_pengaduan`()");
        return $this->db->ResultSet();
    }
    public function getPengaduanbyNik(){
        $this->db->query("SELECT * FROM pengaduan WHERE nik = :nik");
        $this->db->bind('nik',$_SESSION['data']['nik']);
        return $this->db->ResultSet();
    }
    public function ambilpengaduanbyId($id_pengaduan){
        $this->db->query("SELECT * FROM pengaduan WHERE id_pengaduan = :id_pengaduan");
        $this->db->bind('id_pengaduan',$id_pengaduan);
        return $this->db->single();
    }
    public function updatestatus($id_pengaduan){
        $this->db->query("UPDATE pengaduan SET status =:status WHERE id_pengaduan = :id_pengaduan");
        $this->db->bind('id_pengaduan',$id_pengaduan);
        $this->db->bind('status','selesai');
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ambilpengaduanbybulan($data){
        $tanggal = $data['bulan'];
        $bulan = date('m', strtotime($tanggal));
        $tahun = date('Y', strtotime($tanggal));
        $this->db->query('SELECT * FROM pengaduan WHERE MONTH(tgl_pengaduan) = :bulan AND YEAR(tgl_pengaduan) = :tahun ');
        $this->db->bind('bulan',$bulan);
        $this->db->bind('tahun',$tahun);
        return $this->db->ResultSet();
    }
    public function pengaduan_selesai(){
        $this->db->query('call `hitung_selesai`()');
        return $this->db->Single();

    }
    public function buatpengaduan($data){
        $nama_file = $_FILES['foto']['name'];
        $ukuran = $_FILES['foto']['size'];
        $x = explode('.',$nama_file);
        $ekstensi = strtolower(end($x));
        $ekstensi_valid = ['jpg','jpeg','png'];
        $tmp_name = $_FILES['foto']['tmp_name'];
        if(in_array($ekstensi,$ekstensi_valid) === true){
            if($ukuran < 1044070){
                move_uploaded_file($tmp_name,'../Public/Asset/image/'.$nama_file);
                $this->db->query("INSERT INTO pengaduan VALUES(:id_pengaduan,:tgl_pengaduan,:nik,:subjek,:isi_laporan,:foto,:status)");
                $this->db->bind('id_pengaduan',rand());
                $this->db->bind('tgl_pengaduan',date('Y-m-d'));
                $this->db->bind('nik',$_SESSION['data']['nik']);
                $this->db->bind('subjek',$data['subjek']);
                $this->db->bind('isi_laporan',$data['isi_laporan']);
                $this->db->bind('foto',$nama_file);
                $this->db->bind('status','0');
                $this->db->execute();
                return $this->db->RowCount();
            }else{
                $_SESSION["gagalukuran"] = true;
            }
        }else{
            $_SESSION["gagalekstensi"] = true;
        }
    }
      
    }

?>
<?php
class Tanggapan_model{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function buattanggapan($data){
       $this->db->query("INSERT INTO tanggapan VALUE (:id_tanggapan,:id_pengaduan,:tgl_tanggapan,:tanggapan,:id_petugas,:nama_petugas)");
       $this->db->bind('id_tanggapan',rand());
       $this->db->bind('id_pengaduan',$data['id_pengaduan']);
       $this->db->bind('tgl_tanggapan',date('Y-m-d'));
       $this->db->bind('tanggapan',$data['tanggapan']);
       $this->db->bind('id_petugas',$_SESSION['petugas']['id_petugas']);
       $this->db->bind('nama_petugas',$_SESSION['petugas']['nama_petugas']);
       $this->db->execute();
       return $this->db->rowCount();
    }
    public function ambiltanggapanbyid($id_pengaduan){
        $this->db->query("SELECT * FROM tanggapan  WHERE id_pengaduan = :id_pengaduan");
        $this->db->bind('id_pengaduan',$id_pengaduan);
        return $this->db->ResultSet();
    }
}
?>
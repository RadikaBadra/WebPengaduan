<?php
class Masyarakat_model{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function getdataAll(){
        $this->db->query("SELECT * FROM masyarakat ");
        return $this->db->ResultSet();
    }
    public function getdata($data){
        $this->db->query("SELECT * FROM masyarakat WHERE username = :username");
        $this->db->bind('username',$data['username']);
        return $this->db->single();
    }
    public function editmasyarakat($data){
        $this->db->query("UPDATE masyarakat SET nama=:nama, username = :username, telepon = :telepon WHERE nik = :nik");
        $this->db->bind('nik',$_SESSION['data']['nik']);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('username',$data['username']);
        $this->db->bind('telepon',$data['telepon']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function registrasi($data){
        $this->db->query("INSERT INTO masyarakat VALUES(:nik,:nama,:username,:password,:telepon)");
        $this->db->bind('nik',$data['nik']);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('username',$data['username']);
        $this->db->bind('password',MD5($data['password']));
        $this->db->bind('telepon',$data['telepon']);
        $this->db->execute();
        return $this->db->rowCount();

    }
}
?>

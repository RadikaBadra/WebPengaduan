<?php
class Petugas_model{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function getalldata(){
        $this->db->query("SELECT * FROM petugas");
        return $this->db->ResultSet();
    }

    public function getdata($data){
        $this->db->query("SELECT * FROM petugas WHERE username = :username");
        $this->db->bind('username',$data['username']);
        return $this->db->single();

    }
    public function getpetugasbyid($id_petugas){
        $this->db->query("SELECT * FROM petugas  WHERE id_petugas = :id_petugas");
        $this->db->bind('id_petugas',$id_petugas);
        return $this->db->single();
    }
    public function registrasi($data){
        $this->db->query("INSERT INTO petugas VALUES('',:nama_petugas,:username,:password,:telepon,:level)");
        $this->db->bind('nama_petugas',$data['nama_petugas']);
        $this->db->bind('username',$data['username']);
        $this->db->bind('password',MD5($data['password']));
        $this->db->bind('telepon',$data['telepon']);
        $this->db->bind('level','petugas');
        $this->db->execute();
        return $this->db->rowcount();
    }
    public function editpetugas($data){
        $isipetugas = $this->getpetugasbyid($data['id_petugas']);
        $pass = $data['password'];
        if($isipetugas['password'] != $pass){
            $pass = MD5($data['password']);
        }
        $this->db->query("UPDATE petugas SET nama_petugas=:nama_petugas, username = :username, password= :password , telp = :telepon WHERE id_petugas = :id_petugas");
        $this->db->bind('id_petugas',$data['id_petugas']);
        $this->db->bind('nama_petugas',$data['nama_petugas']);
        $this->db->bind('username',$data['username']);
        $this->db->bind('password',$pass);
        $this->db->bind('telepon',$data['telepon']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapuspetugas($id_petugas){
        $this->db->query("DELETE FROM petugas WHERE id_petugas = :id_petugas");
        $this->db->bind('id_petugas',$id_petugas);
        $this->db->execute();
        return $this->db->rowcount();
    }
}
?>
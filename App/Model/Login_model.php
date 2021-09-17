<?php
class Login_model{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function loginmasyarakat($data){
        $this->db->query("SELECT * FROM masyarakat WHERE username = :username AND password = :password");
        $this->db->bind('username',$data['username']);
        $this->db->bind('password',MD5($data['password']));
        return $this->db->single();

    }
    public function loginpetugas($data){
        $this->db->query("SELECT * FROM petugas WHERE username = :username AND password = :password");
        $this->db->bind('username',$data['username']);
        $this->db->bind('password',MD5($data['password']));
        return $this->db->single();

    }
    
}
?>
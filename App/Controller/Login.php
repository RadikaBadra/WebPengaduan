<?php
class Login extends Controller{
    public function index(){
        $this->view('Login/index');
    }
    public function prosesLogin(){
        if($this->model('Login_model')->loginmasyarakat($_POST) != null){
            $data['masyarakat'] = $this->model('Login_model')->loginmasyarakat($_POST);
            $_SESSION['data'] = $data['masyarakat'];
            header('location:'.BASEURL.'/Home');
        }
        else if($this->model('Login_model')->loginpetugas($_POST) != null){
            $data['petugas'] = $this->model('Login_model')->loginpetugas($_POST);
            $_SESSION['petugas'] = $data['petugas'];
            if($data['petugas']['level'] == "admin"){
                header('location:'.BASEURL.'/Admin');

            }
            else if($data['petugas']['level'] == "petugas"){
                header('location:'.BASEURL.'/Petugas');
            }
        }
        else {
                $_SESSION['gagallogin'] = true;
                header('location:'.BASEURL);
            }
        
    }
}
?>
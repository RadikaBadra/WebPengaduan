<?php
class Controller{
    public function view($view,$data = []){
        require_once '../App/View/'.$view.'.php';
    }
    public function model($model){
        require_once '../App/Model/'.$model.'.php';
        return new $model;
    }
}
?>
<?php
require_once "Models/HomeModel.php";
class Home extends Controllers{
    public function __construct(){
        parent::__construct();
    }
    public function index($params){
        $params=$this->model->index();
        $this->views->getView($this,"index",$params);
    }
    public function about(){
        echo "Home about method";
    }
    public function datos($params){
        echo $this->model->mensaje($params);
    }
}
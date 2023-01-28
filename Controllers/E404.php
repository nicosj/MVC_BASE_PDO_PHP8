<?php

class E404 extends Controllers{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->views->getView($this,"404");
    }

}
$E404 = new E404();
$E404->index();
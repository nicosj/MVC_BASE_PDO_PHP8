<?php

class HomeModel extends Mysql
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $datos = [
            'name' => "loco",
            'age' => 20,
            'email' => "loco@loco.com",
        ];
        return $datos;
    }
    public function mensaje($params = "loco")
    {
        return "<br> hola desde el metodo Mensaje".$params;
    }

}
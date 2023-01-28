<?php
class Conexion{
    private $pdo;
    public function __construct(){
        if(CONNECTION){
            try{
                $link="mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME;DB_NAME.";charset=".DB_CHARSET;
                $this->pdo=new PDO($link,DB_USER,DB_PASS);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                die("Error de conexion".$e->getMessage());
            }
        }
    }
    public function pdo(){
        return $this->pdo;
    }

    /*public function select($sql,$data=array(),$fetchMode=PDO::FETCH_ASSOC){
        $query=$this->pdo->prepare($sql);
        foreach($data as $key=>$value){
            $query->bindValue($key,$value);
        }
        $query->execute();
        return $query->fetchAll($fetchMode);
    }*/

}
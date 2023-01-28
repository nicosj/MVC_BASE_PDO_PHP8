<?php

class MySql extends Conexion{
    private $conexion;
    private $strquery;
    private $arrValues;

    function __construct(){
        $this->conexion=new Conexion();
        $this->conexion=$this->conexion->pdo();
    }

    //Insertar registros
    public function insert(string $query, array $arrValues){

        $this->strquery=$query;
        $this->arrValues=$arrValues;
        $insert=$this->conexion->prepare($this->strquery);
        $resInsert=$insert->execute($this->arrValues);
        $insert->closeCursor();
        if($resInsert){
            $lastInsert=$this->conexion->lastInsertId();
        }else{
            $lastInsert=0;
        }
        return $lastInsert;
    }

    //Seleccionar un registro
    public function select(string $query, array $arrValues){
        $this->strquery=$query;
        $this->arrValues=$arrValues;
        $result=$this->conexion->prepare($this->strquery);
        $result->execute($this->arrValues);
        $data=$result->fetch(PDO::FETCH_ASSOC);
        $result->closeCursor();
        return $data;
    }
    //selectccionar todos los registros
    public function select_all(string $query){
        try{
        $this->strquery=$query;
        $result=$this->conexion->prepare($this->strquery);
        $data=$result->fetchall(PDO::FETCH_ASSOC);
        $result->closeCursor();
        return $data;
        }catch(PDOException $e){
            return "Error de conexion".$e->getMessage();
        }
    }

    //Actualizar registros
    public function update(string $query, array $arrValues){
        $this->strquery=$query;
        $this->arrValues=$arrValues;
        $update=$this->conexion->prepare($this->strquery);
        $resExecute=$update->execute($this->arrValues);
        $update->closeCursor();
        return $resExecute;
    }

    //Eliminar registros
    public function delete(string $query, array $arrValues){
        $this->strquery=$query;
        $this->arrValues=$arrValues;
        $result=$this->conexion->prepare($this->strquery);
        $del=$result->execute($this->arrValues);
        return $del;
    }
}

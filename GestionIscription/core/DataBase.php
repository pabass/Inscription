<?php
namespace App\Core;
class DataBase{
    private  $pdo=null;

    public function openConnexion(){

    }
    public function closeConnexion(){
        $this->pdo=null ;
        die("ok");
    }
    public function executeSelect(){

    }
    public function executeUpdate(){

    }
}
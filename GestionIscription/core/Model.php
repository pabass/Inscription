<?php
namespace App\Core;
abstract class Model implements IModel{
    protected $table;
    public function insert(){

    }
    public function update(){

    }
    public static function delete(int $id){
        $sql="delete  from ".self::$table." where id=$id";

    }
    public static function selectAll(){
        $sql="select *  from ".self::$table;

    }
    public static function selectBy(int $id){
        $sql="select *  from ".self::$table." where id=$id";

    }
    public static function selectWhere(string $sql,array $data=[],$single=false){

    }

}
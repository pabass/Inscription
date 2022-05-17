<?php
namespace App\Core;
interface IModel{
    public function insert();
    public function update();
    public static function delete(int $id);
    public static function selectAll();
    public static function selectBy(int $id);
    public static function selectWhere(string $sql,array $data=[],$single=false);
    //methodes d'instaces =>s'applique sur un objet et utilise l'etat de l'objet

    //methodes statiques s'applique sur une classe 




}
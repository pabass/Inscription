<?php
namespace App\Model;
abstract class RP extends User implements IAffiche{
    public function __construct()
    {
        $this->role="ROLE_RP";
    }
    //redefinition=>evolution
        //1-heritage de methode
        //redefinir=>changer le comportement de la methode
       
     /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    } 

}
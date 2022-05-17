<?php
namespace App\Model;
class Cours{
    private $id;
    private $heureDebut;
    private $heureFin;
    private $dateCours;
    //plusieurs cours associe a une classe
    public function classe():Classe{
        return new classe();
    }
    //many to one =>module
    public function module():Module{
        $sql="select m.* from cours c, 
                  module m where c.module_id=m.id and c.id={$this->id}";
        return new module();
    }
    //un cours est dirige par un professuer 
    public function professeur():Professeur{
        $sql="select u.* from cours c, 
                  user u where c.professeur_id=u.id and c.id={$this->id} 
                  and role like 'ROLE_PROFESSEUR ";
        return new professeur();
    }
    //un etudiant assiste a plusieurs cours
    public function etudiants():array{
        return [];
    }





    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of heureDebut
     */ 
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set the value of heureDebut
     *
     * @return  self
     */ 
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get the value of heureFin
     */ 
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Set the value of heureFin
     *
     * @return  self
     */ 
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    /**
     * Get the value of dateCours
     */ 
    public function getDateCours()
    {
        return $this->dateCours;
    }

    /**
     * Set the value of dateCours
     *
     * @return  self
     */ 
    public function setDateCours($dateCours)
    {
        $this->dateCours = $dateCours;

        return $this;
    }
}
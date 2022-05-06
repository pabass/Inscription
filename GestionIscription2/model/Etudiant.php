<?php
class Etudiant extends User{
    private $nomComplet;
    private $tuteur;

    public function __construct()
    {
        $this->role="ROLE_ETUDIANT";
    }
    //un etudiant assiste plusieurs cours
    public function cours():array{
        return[];
    }
    //un etudiant->une classe
    public function classe():Classe{
        return new classe();
    }
    public function inscription():Inscription{
        return new inscription();
    }
    /**
     * Get the value of nomComplet
     */ 
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set the value of nomComplet
     *
     * @return  self
     */ 
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    /**
     * Get the value of tuteur
     */ 
    public function getTuteur()
    {
        return $this->tuteur;
    }

    /**
     * Set the value of tuteur
     *
     * @return  self
     */ 
    public function setTuteur($tuteur)
    {
        $this->tuteur = $tuteur;

        return $this;
    }
}

<?php
class Professeur{
    private $grade;
    public function __construct()
    {
        $this->role="ROLE_PROFESSEUR";
    }
    public function cours():array{
        return[];
    }
  
  
    public function adresse():Adresse{
        return new adresse();
    }





    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }
}
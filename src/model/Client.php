<?php 
namespace App\Model;

class Client {
    
    private $id;
    private $firstname;
    private $lastname;
    private $entryDate;
    private $depatureDate;
    //private $room


    

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
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of entryDate
     */ 
    public function getEntryDate()
    {
        return $this->entryDate;
    }

    /**
     * Set the value of entryDate
     *
     * @return  self
     */ 
    public function setEntryDate($entryDate)
    {
        $this->entryDate = $entryDate;

        return $this;
    }

    /**
     * Get the value of depatureDate
     */ 
    public function getDepatureDate()
    {
        return $this->depatureDate;
    }

    /**
     * Set the value of depatureDate
     *
     * @return  self
     */ 
    public function setDepatureDate($depatureDate)
    {
        $this->depatureDate = $depatureDate;

        return $this;
    }
}

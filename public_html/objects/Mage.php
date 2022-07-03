<?php 

class Mage extends Character {
    
    // Attributes
    private $staff;


    // Constructor
    public function __construct($f = 10, $a = 10, $b = 0) {
        parent::__construct($a, $b);
        $this->setStaff($f);
    }
    
    // Getters
    public function getStaff() {
        return $this->staff;
    }

    // Setters
    public function setStaff($staff) {
        // Security
        $this->staff = $staff;
    }
    
    // Methods
    public function hydrate($tab) { 
        $this->setStaff($tab['staff']);
        $this->setLife($tab['life']);
        $this->setDef($tab['def']);
    }
}
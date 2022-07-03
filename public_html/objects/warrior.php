<?php 

class Warrior extends Character {
    
    // Attributes
    private $sword;


    // Constructor
    public function __construct($s = 15, $a = 10, $b = 6) {
        parent::__construct($a, $b);
        $this->setSword($s);
    }
    
    // Getters
    public function getSword() {
        return $this->sword;
    }

    // Setters
    public function setSword($sword) {
        // Security
        $this->sword = $sword;
    }
    
    // Methods
    public function hydrate($tab) { 
        $this->setSword($tab['sword']);
        $this->setLife($tab['life']);
        $this->setDef($tab['def']);
    }
    
}

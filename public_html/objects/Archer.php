<?php 

class Archer extends Character {
    
    // Attributes
    private $bow;


    // Constructor
    public function __construct($o = 12, $a = 10, $b = 3) {
        parent::__construct($a, $b);
        $this->setBow($o);
    }
    
    // Getters
    public function getBow() {
        return $this->bow;
    }

    // Setters
    public function setBow($bow) {
        // Security
        $this->bow = $bow;
    }
    
    // Methods
    public function hydrate($tab) { 
        $this->setBow($tab['bow']);
        $this->setLife($tab['life']);
        $this->setDef($tab['def']);
    }
}
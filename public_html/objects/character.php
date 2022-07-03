<?php

class Character {

    // Attributes
    private $life;
    private $def;

    // Constructor
    public function __construct($a = 10, $b = 0) {
        $this->setLife($a);
        $this->setDef($b);
    }

    // Getters
    public function getLife() {
        return $this->life;
    }
    public function getDef() {
        return $this->def;
    }

    // Setters
    public function setLife($life) {
        // Security
        $this->life = $life;
    }
    public function setDef($def) {
        // Security
        $this->def = $def;
    }

    // Methods
    public function read() {
        echo '<pre>';
        print_r($this);
        echo '</pre>';
        // var_dump($this);
    }

}

?>
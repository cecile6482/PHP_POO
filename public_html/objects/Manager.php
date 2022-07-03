<?php 

class Manager {

    // Attributes
    private $bdd;

    // Constructor
    public function __construct(PDO $db) {
        $this->setBdd($db);
    }

    // Getters

    // Setters
    public function setBdd(PDO $db) {
        $this->bdd = $db;
    }
    

    // Methods
    public function create($perso) {
        
        //if Warrior
        if (get_class($perso) == 'Warrior') {
            //INSERT INTO `warrior` (`id`, `life`, `def`, `sword`) VALUES (NULL, '20', '40', '30')
            $sql = $this -> bdd ->prepare("
            INSERT INTO `warrior` 
            (`life`, `def`, `sword`) 
            VALUES 
            (:life, :def, :sword)");
            // var_dump($sql);

            // Security
            $sql->bindValue(':life', $perso->getLife(), PDO::PARAM_INT);
            $sql->bindValue(':def', $perso->getDef(), PDO::PARAM_INT);
            $sql->bindValue(':sword', $perso->getSword(), PDO::PARAM_INT);
            
            $sql->execute();
        }

        //if Mage
        if ($perso == 'mage') {
            $perso = new Mage();
        }

        //if Archer
        if ($perso == 'archer') {
            $perso = new Archer();
        }

        // else unknown object
        
    
    }

    public function read ($perso) {
       
        echo '<pre>';
        print_r($perso);
        echo '</pre>';
        // var_dump($this);

       // else unknown object
    
    }

    public function update($perso) {
        // if Warrior
        if ($perso instanceof Warrior) {
            $perso->setSword(12);
            $perso->setLife(38);
            $perso->setDef(11);
        }

        // if Mage
        if ($perso instanceof Mage) {
            $perso->setStaff(11);
            $perso->setLife(13);
            $perso->setDef(5);
        }

        // if Archer
        if ($perso instanceof Archer) {
            $perso->setBow(30);
            $perso->setLife(30);
            $perso->setDef(15);
        }

        // else unknown object

    }

    public function delete($perso) {
        //
    }
}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include_once './objects/Character.php';
    include_once './objects/Warrior.php';
    include_once './objects/Mage.php';
    include_once './objects/Archer.php';
    include_once './objects/Manager.php';
    include_once './settings/db.php';
    
if(false){
    //Model View Controller
    // $perso = new Character();
    // $wariorOne->read();

    // $wariorOne->getLife(20);
    // $warriorOne->setLife(6);
    // $wariorOne->read();

    // $wariorOne = new Warrior;
    // $wariorOne->read();

    // $wariorTwo = new Warrior(12, 30, 3000);
    // $wariorTwo->read();

    // method hydrate
    // $tab = [
    //     "sword" => 13,
    //     "life" => 45,
    //     "def" => 4500,
    // ];
    // $warriorThree = new Warrior();
    // $warriorThree->hydrate($tab);
    // $warriorThree->read();

    
    // $mageOne = new Mage;
    // $mageOne->read();

    // $archerOne = new Archer;
    // $archerOne->read();

    // Create a new warrior
    // $tab = [
    //     "sword" => 14,
    //     "life" => 40,
    //     "def" => 13,
    // ];
    // $warrior = new Warrior();
    // $warrior->hydrate($tab);

    // Create a new mage
    // $tab = [
    //     "staff" => 13,
    //     "life" => 15,
    //     "def" => 7,
    // ];
    // $mage = new Mage();
    // $mage->hydrate($tab);

    // Create a new archer
    // $tab = [
    //     "bow" => 20,
    //     "life" => 20,
    //     "def" => 5,
    // ];
    // $archer = new Archer();
    // $archer->hydrate($tab);

    // Create a new manager
    // $manager = new Manager;
    // $manager->read($warrior);
    // $manager->read($mage);
    // $manager->read($archer);

    // update warrior
    // $manager->update($warrior);
    // $manager->read($warrior);

    // update mage
    // $manager->update($mage);
    // $manager->read($mage);

    // update archer
    // $manager->update($archer);
    // $manager->read($archer);
    }
    

$tank = new Warrior(20, 40, 30);


$manager = new Manager($db);
$manager->create($tank);


?>
</body>
</html>
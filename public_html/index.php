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

    include_once './objects/character.php';
    include_once './objects/warrior.php';

    //Model View Controller
    // $perso = new Character();
    // $wariorOne->describe();

    // $wariorOne->getLife(20);
    // $warriorOne->setLife(6);
    // $wariorOne->describe();

    $wariorOne = new Warrior;
    $wariorOne->describe();
    


    ?>
</body>
</html>
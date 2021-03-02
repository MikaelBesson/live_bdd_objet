<?php
require './classes/user.php';
require './classes/Computer.php';

$user = new User('John Doe','password trés fort');

$computerOne = new Computer('Apple','Intel','1Go','Linux','Vert Matthias');
$computerOne->setMousse('true');
$computerOne->setKeyboard('true');
$computerOne->start();
$computerOne->sleep();
$computerOne->shutdown();
echo "memory: " . $computerOne->getMemory() . "<br>";
$computerOne->setOwner($user);



$computerTwo = new Computer('Huawei','Integrated','AMD Ryzen 3','Zindozs','Gris');
$computerTwo->setMousse('true');
$computerTwo->start();
$computerTwo->sleep();
$computerTwo->shutdown();
echo "memory: " . $computerTwo->getMemory() . "<br>";
$computerTwo->setOwner($user);



echo $computerOne->getOwner();
echo $computerTwo->getOwner();

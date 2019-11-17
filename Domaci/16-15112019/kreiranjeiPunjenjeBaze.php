<?php

$db = new PDO("mysql:host=localhost;dbname=itbootcamp", 'root','');
    
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//javlja greske i 
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);//u vezi vracanja iz baze, ali ne razumem bas dobro

$createTable = $db->prepare
(
    "CREATE TABLE IF NOT EXISTS `studenti`
    (
        `ime` VARCHAR(50),
        `prezime` VARCHAR(80),
        `godine` TINYINT,
        `prosecnaocena` DECIMAL 
    )"
);
$createTable->execute();

$fillTable = $db->prepare
(
    "INSERT INTO `studenti` (`ime`, `prezime`, `godine`,`prosecnaocena`)
    VALUES
        ('Djoka', 'Peric', 21, 9),
        ('Mica', 'Micic', 22, 7.80),
        ('Pika', 'Pikic', 24, 8.90);
    "
);
$fillTable->execute();



?>
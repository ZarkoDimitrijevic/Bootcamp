<?php
/*
CREATE DATABASE IF NOT EXISTS `prodavnica` CHARACTER SET utf16 COLLATE utf16_slovenian_ci;
*/

$db = new PDO("mysql:host=localhost;dbname=prodavnica", 'root', '');

$createTable = $db->prepare 
(
    "CREATE TABLE IF NOT EXISTS `proizvodi`
    (
        `proizvod_id` INT AUTO_INCREMENT PRIMARY KEY,
        `proizvod_kod` CHAR(5) NOT NULL DEFAULT 00000,
        `ime` VARCHAR(30) NOT NULL DEFAULT 'proizvod',
        `kolicina` SMALLINT NOT NULL,
        `cena` DECIMAL(9,2)       
    )"

);
$createTable->execute();

$changeTable = $db->prepare
(
    "ALTER TABLE `proizvodi` MODIFY `kolicina` SMALLINT DEFAULT 0;
    ALTER TABLE `proizvodi` MODIFY `cena` DECIMAL(7,2) NOT NULL DEFAULT 0;
    ALTER TABLE `proizvodi` ADD COLUMN `opis` TEXT;"
);
$changeTable->execute();

$fillinthetable=$db->prepare
(
    "INSERT INTO `proizvodi`(`proizvod_kod`, `ime`, `kolicina`, `cena`)
    VALUES(12345, 'labelo', 200, 200),
          (21645, 'maramice', 40, 1000),
          (34597, 'zvake', 50, 10000),
          (65497, 'cokolada', 100, 300),
          (54986, 'novine', 50, 100),
          (69423, 'obrazac', 10, 300),
          (66942, 'lisnato testo', 50, 200),
          (65641, 'nesto sa l', 10, 10)"
);
$fillinthetable->execute();

$query1 = $db->prepare
(
    "SELECT DISTINCT `ime` FROM `proizvodi` ORDER BY `ime` DESC"
);

$query2 = $db->prepare
(
    "SELECT * FROM `proizvodi` WHERE `ime` LIKE '%L%' ORDER BY `cena` DESC LIMIT 3"
);

$query1->execute();
$a=$query1->fetchall();
var_dump($a);

$query2->execute();
$b=$query2->fetchall();
var_dump($b);

?>
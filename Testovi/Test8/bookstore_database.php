<?php

//konekcija
$server = 'localhost';
$username = 'root';
$password = '';

$konekcija = new mysqli($server, $username, $password);

if(!$konekcija)
{
    die('Neuspela konekcija' . $konekcija->connect_error);
}

//kreiranje baze
$sql = 
("CREATE DATABASE IF NOT EXISTS `bookstore` CHARACTER SET 'utf16' COLLATE 'utf16_slovenian_ci'");
$result = $konekcija->query($sql);

if($result)
{
    echo '<p>Bravo uspeo kveri kreiranja baze!</p>';
}
else
{
    echo '<p>Decko, negde si pogresio' . $konekcija->error . '</p>';
}

//kreiranje tabele `orders`
$sql = 
("CREATE TABLE IF NOT EXISTS `bookstore`.`orders`
(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(90) NOT NULL,
    address VARCHAR(255) NOT NULL,
    city VARCHAR(100) NOT NULL,
    country VARCHAR(100) NOT NULL,
    delivery_option CHAR(18) NOT NULL,
    order_time DATETIME NOT NULL
)");
$result = $konekcija->query($sql);
if($result)
{
    echo '<p>Bravo uspeo kveri kreiranja tabele!</p>';
}
else
{
    echo '<p>Decko, negde si pogresio' . $konekcija->error . '</p>';
}

?>
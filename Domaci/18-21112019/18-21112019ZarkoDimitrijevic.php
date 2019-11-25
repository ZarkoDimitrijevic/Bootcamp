<!DOCTYPE html>
<html>
    <head>
        <title>Domaci</title>
        <style>
            body{width:100%;}
            h1{text-align: center;}
            .slike{text-align:center;
                    width:40%;
                    float: left;
                    margin:5%;}
            img{width:100%;}
        </style>
    </head>
    <body>
        
            <div class="slike">
                <h1>Relacioni dijagram baze slikarstvo - domaci</h1>
                <img src="slikarstvo.jpg">
            </div>
            <div class="slike">
                <h1>Relacioni dijagram baze slikarstvo - logicno</h1>
                <img src="logicnoslikarstvo.jpg">
            </div>
            <div>

        <?php
            //CREATE DATABASE IF NOT EXISTS "slikarstvo" CHARACTER SET utf16 COLLATE utf16_slovenian_ci;
            $db = new PDO("mysql:host=localhost;dbname=slikarstvo", 'root', '');

            $createTables = $db->prepare
            (
                "CREATE TABLE IF NOT EXISTS `periodi`
                (
                    `id_perioda` INT AUTO_INCREMENT PRIMARY KEY,
                    `naziv` VARCHAR(30),
                    `opis` VARCHAR(255)
                );

                CREATE TABLE IF NOT EXISTS `umetnici`
                (
                    `id_umetnika` INT AUTO_INCREMENT PRIMARY KEY,
                    `ime` VARCHAR(30),
                    `prezime` VARCHAR(30),
                    `biografija` VARCHAR(30)
                );  
                
                CREATE TABLE IF NOT EXISTS `slike`
                (
                    `id_slike` INT AUTO_INCREMENT PRIMARY KEY,
                    `naziv` VARCHAR(30),
                    `dimenzije` VARCHAR(30),
                    `visina` TINYINT,
                    `sirina` TINYINT,
                    `id_perioda` INT,
                    `id_umetnika` INT,
                    FOREIGN KEY (`id_perioda`) REFERENCES `periodi`(`id_perioda`),
                    FOREIGN KEY (`id_umetnika`) REFERENCES `umetnici`(`id_umetnika`)
                );
                
                

                CREATE TABLE IF NOT EXISTS `tehnike`
                (
                    `id_tehnike` INT AUTO_INCREMENT PRIMARY KEY,
                    `naziv` VARCHAR(30),
                    `opis` VARCHAR(255)
                );

                CREATE TABLE IF NOT EXISTS `slike_tehnike`
                (
                    `id` INT AUTO_INCREMENT PRIMARY KEY,
                    `id_tehnike` INT,
                    `id_slike` INT,
                    FOREIGN KEY (`id_tehnike`) REFERENCES `tehnike`(`id_tehnike`),
                    FOREIGN KEY (`id_slike`) REFERENCES `slike`(`id_slike`)
                );"
            );

            $createTables->execute();

            $query1 = $db->prepare
            (
                "SELECT *
                FROM `umetnici`
                INNER JOIN `periodi`
                ON `umetnici`.`id_perioda` = `periodi`.`id_perioda`
                INNER JOIN `slike`
                ON `periodi`.`id_perioda` = `slike`.`id_perioda`
                INNER JOIN `slike_tehnike`
                ON `slike`.`id_slike` = `slike_tehnike`.`id_slike`
                INNER JOIN `tehnike`
                ON `tehnike`.`id_tehnike` = `slike_tehnike`.`id_tehnike`"
            );
            echo "Rezultati upita:";
            $query1->execute();
            $a=$query1->fetchall();
            var_dump($a);
        ?>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>

    </head>

    <body>
        
    </body>

<?php 
/*Jedan butik ima radno vreme od 9h do 20h radnim danima, a vikendom od 10h do 18h. 
Preuzeti dan i vreme sa računara i ispitati da li je butik trenutno otvoren. */

date_default_timezone_set('Europe/Belgrade');
$dan = date('N');//dan, numericka vrednost 1-7
$vreme = date('G');//vreme 00-24

echo "$dan";
echo "$vreme";

if($dan<=5 && $vreme>=9 && $vreme<20) {echo "Butik je otvoren";}
elseif($dan>5 && $vreme>=10 && $vreme<18) {echo "Butik je otvoren";}
else {echo "Butik trenutno nije otvoren.";}
?>


</html>
<!DOCTYPE html>
<html>
    <head>

    </head>

    <body>
        
  

<?php 
//Prvi zadatak
echo "Za tri uneta broja upisi koji je najmanji, srednji najveci:<br>";
$a=1;
$b=2;
$c=3;
$i=0;
echo "Uneti brojevi su:<br> \$a je $a;<br>
                        \$b je $b;<br>
                        \$c je $c;<br>";

while ($a>$b && $a>$c && $i<1) {
    echo "$a je najveci broj<br>";
    if($b>$c) {
        echo "$b je srednji broj<br>";
        echo "$c je najmanji broj<br>";
        //die;
    }
    else {
        echo "$c je srednji broj<br>";
        echo "$b je najmanji broj<br>";
        //die;
    }
    $i++;
}

while ($b>$a && $b>$c && $i<1) {
    echo "$b je najveci broj<br>";
    if($a>$c) {
        echo "$a je srednji broj<br>";
        echo "$c je najmanji broj<br>";
        //die;
    }
    else {
        echo "$c je srednji broj<br>";
        echo "$a je najmanji broj<br>";
        //die;
        $i++;
    }
}

while ($c>$a && $c>$b && $i<1) {
    echo "$c je najveci broj<br>";
    if($a>$b) {
        echo "$a je srednji broj<br>";
        echo "$b je najmanji broj<br>";
        //die;
    }
    else {
        echo "$b je srednji broj<br>";
        echo "$a je najmanji broj<br>";
        //die;
    }
    $i++;
}



//drugi zadatak
echo "<br>Ispitati da li je preuzeta godina prestupna.
Godina je prestupna ako je deljiva sa 4, i ako nije deljiva sa 100 a jeste sa 400<br>";
date_default_timezone_set('Europe/Belgrade');
$godina = date('o');

if($godina%4==0 || ($godina%100>0 && $godina%400==0)) 
{echo "Godina je prestupna<br>.";}
else {echo "Godina nije prestupna.<br>";}

//treci zadatak
echo "<br>Jedan butik ima radno vreme od 9h do 20h radnim danima, a vikendom od 10h do 18h. 
Preuzeti dan i vreme sa računara i ispitati da li je butik trenutno otvoren.<br> ";

$dan = date('N');//dan, numericka vrednost 1-7
$vreme = date('G');//vreme 00-24

/*echo "$dan";
echo "$vreme";*/

if($dan<=5 && $vreme>=9 && $vreme<20) {echo "Butik je otvoren";}
elseif($dan>5 && $vreme>=10 && $vreme<18) {echo "Butik je otvoren";}
else {echo "Butik trenutno nije otvoren.";}
?>

</body>
</html>
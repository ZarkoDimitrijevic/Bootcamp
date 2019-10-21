<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body>
    <?php 
//zadatak1:
    echo "ZADATAK 1. <br>Odrediti proizvod brojeva od 1 do 20, a potom od njega oduzeti zbir brojeva od 1 do 30, koristeći while petlju.<br>";
    $n=1;
    $m=20;
    $g=30;
    $i=$n;
    $proizvod=1;
    $zbir=0;
    $rezultat=0;
    $resenje;
    while($m>=$i) {
        $proizvod = $proizvod * $i;
        $i++;    
    }
    $proizvodsredjen = number_format($proizvod, 2, ",", ".");
    echo "<br>Proizvod brojeva od 1 do 20 je: $proizvodsredjen<br>";
    

    while($g>=$i) {
        $zbir = $zbir + $i;
        $i++;
    }
    $zbirsredjen = number_format($zbir, 2, ",", ".");
    echo "<br><br>Zbir brojeva od 1 do 30 je: $zbirsredjen<br>";
    
    
    $resenje = $proizvod-$zbir;
    $resenjesredjen = number_format($resenje, 2, ",", ".");
    echo "<br>Resenje zadatka je: $resenjesredjen<br>";

//zadatak2:
    echo "<br>ZADATAK 2.<br>
    Odrediti zbir kubova brojeva od n do m.<br>";
    $n=1;
    $m=2;
    $i=$n;
    $zbirkubova=0;

    while($m>=$i) {
        $zbirkubova = $zbirkubova + ($i*$i*$i);
        $i++;
    }

    $zbirkubovasredjen = number_format($zbirkubova, 0, ",", ".");
    echo "Zbir kubova brojeva od $n do $m je: $zbirkubovasredjen";

    ?>


    </body>
</html>
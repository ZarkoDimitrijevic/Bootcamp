<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
<?php
//ZADATAK 1 
echo "<strong>Ispisati brojeve od 1 do 20</strong><br>";
for($i=1; $i<=20; $i++) {
    echo "$i, ";
}
echo "<br>";

//ZADATAK 2
echo "<strong>Ispisati brojeve od 20 do 1</strong><br>";
for($i=20; $i>=1; $i--) {
    echo "$i, ";
}
echo "<br>";

//ZADATAK 3
echo "<strong>Ispisati parne brojeve od 1 do 20</strong><br>";
for($i=1; $i<=20; $i++) {
    if($i%2==0) {echo "$i, ";}
}
echo "<br>";

//ZADATAK 4
echo "<strong>Ispisati dvostruku vrednost brojeva od 5 do 15</strong><br>";
for($i=5; $i<=15; $i++) {
    echo $i*2 . ", ";
}
echo "<br>";

//ZADATAK 5
echo "<strong>Odrediti sumu brojeva od 1 do 100</strong><br>";
$zbir=0;
$i=1;
for($i=1; $i<=100; $i++) {
    $zbir = $zbir+$i;
}
echo "Zbir brojeva od 1 do 100 je $zbir." . "<br>";

//ZADATAK 6
echo "<strong>Odrediti sumu brojeva od 1 do n</strong><br>";
$zbir=0;
$i=1;
$n=20;
for($i=1; $i<=$n; $i++) {
    $zbir = $zbir+$i;
}
echo "Zbir brojeva od 1 do $n je $zbir." . "<br>";

//ZADATAK 7
echo "<strong>Odrediti sumu brojeva od n do m</strong><br>";
$zbir=0;
$i=1;
$n=20;
$m=50;
for($i=$n; $i<=$m; $i++) {
    $zbir = $zbir+$i;
}
echo "Zbir brojeva od $n do $m je $zbir." . "<br>";

//ZADATAK 8
echo "<strong>Odrediti proizvod brojeva od n do m</strong><br>";
$proizvod=1;
$i=1;
$n=1;
$m=3;
for($i=$n; $i<=$m; $i++) {
    $proizvod = $proizvod*$i;
}
echo "Proizvod brojeva od $n do $m je $proizvod." . "<br>";

//ZADATAK 9
echo "<strong>Odrediti sumu kvadrata brojeva od n do m</strong><br>";
$sumakvadrata=0;
$i=1;
$n=1;
$m=3;
for($i=$n; $i<=$m; $i++) {
    $sumakvadrata = $sumakvadrata+($i*$i);
}
echo "Suma kvadrata brojeva od $n do $m je $sumakvadrata." . "<br>";

//ZADATAK 10 
echo "<strong>Preuzeti sa interneta tri slike i imenovati ih 1, 2 i 3. 
For petljom u HTML-u ispisati svaku od sličica uz pomoć brojača (iteratora).</strong><br>";
$i=1;
for($i=1; $i<=3; $i++) {
    echo "<img src='$i.png'>";
}
echo "<br>";

//ZADATAK 11
echo "<strong>Ispisati dvostruku vrednost brojeva od 5 do 15</strong><br>";
$i=1;
for($i=5; $i<=15; $i++) {
    echo $i*$i . ", ";
}
echo "<br>";

//ZADATAK 16
echo "<strong>Sabrati sve brojeve deljive sa 9 u intervalu od 1 do 30.</strong><br>";
$zbir=0;
for($i=1; $i<=30; $i++) {
    if($i%9==0) {
        $zbir = $zbir + $i;
    }
}
echo "Zbir brojeva deljivih sa 9 u intervalu 1 do 30 je $zbir.<br>";

//ZADATAK 17
echo "<strong>Odrediti proizvod svih brojeva deljivih sa 11 u intervalu od 20 do 100.</strong><br>";
$proizvod = 1;
$i=20;
for($i=20; $i<=100; $i++) {
    if($i%11==00){
        $proizvod = $proizvod*$i;
    }
}
echo "Proizvod brojeva deljivih sa 11 u intervalu 20 do 100 je " . number_format($proizvod, 0, ',', '.') . ".<br>";

//ZADATAK 18
echo "<strong>Prebrojati koliko ima brojeva deljivih sa 13 u intervalu od 5 do 150.</strong><br>";
$i=5;
$brBrojeva=0;
for($i=5; $i<=150; $i++) {
    if($i%13==0) {
        $brBrojeva++;
    }
}
echo "U intervalu 5 do 150 ima ukupno $brBrojeva brojeva deljivih sa 13.<br>";

//ZADATAK 19
echo "<strong>Ispisati aritmetičku sredinu brojeva od n do m.</strong><br>";
$i=1;
$n=5;
$m=6;
$brBrojeva=0;
$suma=0;
for($i=$n; $i<=$m; $i++) {
    $suma = $suma + $i;
    $brBrojeva++;
}
echo "Aritmeticka sredina od broja $n do broja $m je " . $aritmeticka = $suma/$brBrojeva . "<br>"; 

//ZADATAK 20
echo "<strong>Prebrojati koliko brojeva od n do m je pozitivno, a koliko njih je negativno.</strong><br>";
$n=-1;
$m=1;
$negativni=0;
$pozitivni=0;
for($i=$n; $i<=$m; $i++) {
    if($i>0) {$pozitivni++;} 
    else {$negativni++;}
}
echo "Broj negativnih brojeva, racunajuci 0 u rasponu od $n do $m je $negativni a broj pozitivnih brojeva je $pozitivni <br>";

//ZADATAK 21

echo "<strong>Prebrojati koliko je brojeva od 5 do 50 koji su deljivi sa 3 ili sa 5.</strong><br>";
$brBrojeva=0;
for($i=5; $i<=50; $i++) {
    if($i%3==0 || $i%5==0) {
        $brBrojeva++;
    }
}
echo "Broj brojeva deljivih sa 3 ili sa 5 je $brBrojeva <br>";

//ZADATAK 22
echo "Prebrojati i izračunati sumu brojeva od n do m kojima je poslednja cifra 4 i parni su.<br>";
$suma=0;
$n=1;
$m=10;
$brBrojeva=0;
for($i=$n; $i<=$m; $i++) {
    if($i%10==4 && $i%2==0) {
        $suma = $suma + $i;
        $brBrojeva++;
    }
}
echo "Broj brojeva od $n do $m kojima je poslednja cifra 4 i parni su je $brBrojeva.<br>";

//ZADATAK 23
echo "<strong>Ispisati brojeve od n do m, koji su deljivi sa a.</strong><br>";
$n=1;
$m=10;
$a=2;
for($i=$n; $i<=$m; $i++) {
    if($i%$a==0) {echo $i . ", ";}
}
echo "<br>";
/*
24)Ispisati brojeve od n do m koji nisu deljivi sa a
25)Odrediti sumu brojeva od n do m koji su nisu deljivi brojem a
26)Odrediti proizvod brojeva od n do m koji su deljivi brojem a*/


?>

    </body>
</html>
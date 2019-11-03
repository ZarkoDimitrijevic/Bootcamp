<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
        <?php
//ZADATAK 1
echo "<br>ZADATAK 1<br>Odrediti koliko elemenata u nizu celih brojeva ima maksimalnu vrednost.<br>";
//$niz=array(-5,-4,-3,-2,0,1,2,3,4,5,6,7,8,9,5,10,-5,-8,10,-4,10);
//$niz = array(21,2,21,10,4);
$niz=array(1,1,2,2,3,4,5,6,6);
$najveci = $niz[0];
$brojac = 0;
foreach($niz as $element) {
    if($najveci<$element) {
        $najveci = $element;
    } 
}

foreach($niz as $element) {
    if($najveci == $element) {
        $brojac++;
    }
}
echo "U nizu '\$niz' ima ukupno " . count($niz) . " elemenata, od kojih je $brojac sa najvecom vrednoscu $najveci.<br>";

//ZADATAK 2 
echo "<br>ZADATAK 2<br>Odrediti indeks i vrednost prvog člana niza realnih brojeva
koji je najbliži srednjoj vrednosti ovog niza.<br>";
$niz=array(-5,-4,-3,-2,0,1,2,3,4,5,6,7,8,9,5,10,-5,-8,10,-4,10);
sort($niz);//prvo smo sortirali niz
$zbir=0;
$brojac=0;
foreach($niz as $element) {
    $zbir = $zbir + $element;
    $brojac++;
}
$srednjaVrednost=$zbir/$brojac;//odredili smo srednju vrednost

for($i=0; $i<count($niz); $i++) {
    $niz[$i] = $niz[$i];
    if($niz[$i]<$srednjaVrednost) {
        $trazeniElement=$niz[$i];
        $trazeniIndeks=$i;
    }
}

echo "Srednja vrednost niza '\$niz' je $srednjaVrednost. Prvi clan niza realnih brojeva 
koji je najblizi srednjoj vrednosti je element niza sa indeksom $trazeniIndeks,
a vrednost tog elementa je $trazeniElement.<br>";


//ZADATAK 3
echo "<br>ZADATAK 3<br>Odrediti razliku proizvoda parnih brojeva sa neparnim indeksima i 
neparnih brojeva sa parnim indeksima.<br>";
$niz=array(-5,-4,-3,-2,0,1,2,3,4,5,6,7,8,9,5,10,-5,-8,10,-4,10);
//$niz = array(0,0); probano i sa ovakvim nizom
$proizvodParnih=1;
$proizvodNeparnih=1;
for($i=0; $i<count($niz); $i++) {
    if($niz[$i]%2==0 && $i%2!=0 && $niz[$i]!=0) {//moramo da iskljucimo 0
        $proizvodParnih = $proizvodParnih * $niz[$i];
    } elseif($niz[$i]%2!=0 && $i%2==0 && $niz[$i]!=0) {
        $proizvodNeparnih = $proizvodNeparnih * $niz[$i];
    }
}
$razlika = $proizvodParnih - $proizvodNeparnih;
echo "Razlika proizvoda parnih sa neparnim indeksom i 
    proizvoda neparnih sa parnim indeskom je $razlika.";

        ?>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scaling=1.0">
        <title>Zarko Dimitrijevic</title>
    </head>

    <body>
        <h1>04-Test 25.10.2019.</h1>
    <?php 
    //ZADATAK 1
    echo "<strong>ZADATAK 1 <br> Odrediti sumu i broj brojeva u intervalu od n do m koji su deljivi sa 7 i neparni su.
    Na ekranu u istom paragrafu, ali u posebnim redovima ispisati 
    u prvom redu sumu
    u drugom broj brojeva
    u trecem proizvod sume i broja brojeva</strong>
    <br>";?>

        <p>
            <?php
                $n=1;
                $m=15;
                $suma=0;
                $proizvod=1;
                $brBrojeva=0;
            
                for($i=$n; $i<=$m; $i++) {
                    if($i%7==0 && $i%2!=0) {
                    $suma = $suma + $i;
                    $brBrojeva++;}
                }
                echo "Suma brojeva u intervalu od $n do $m koji su deljivi sa 7 i neparni su je $suma.<br>" . 
                    "Broj brojeva u intervalu od $n do $m koji su deljivi sa 7 i neparni su je $brBrojeva.<br>" .
                    "Proizvod sume i broja brojeva je: " . $suma*$brBrojeva . ".<br>";

            ?>
        </p>

    <?php
    //ZADATAK 2
    echo "<strong>ZADATAK 2 <br> Napraviti funkciju indeksTelesneMase kojoj se prosledjuju tezina i visina i izracunati BMI 
    i na osnovu rezultata ispisati
    Pothranjenost, indeks je manji ili jednak 18.5,
    Normalna tezina od 18.5 do 24.9 ne ukljucujuci ove vrednosti
    Povisena tezina od 24.9 do 30 ukljucujuci i ove vrednosti
    Gojaznost veci od 30.
    Funkcija treba da pise u okviru tagova za paragraf. 
    BMI je = tezina/(visina na kvadrat) </strong>";

    function indeksTelesneMase($tezina, $visina) {
        $bmi = $tezina/($visina/100*$visina/100);
        $bmi = number_format($bmi, 1, ',', '.');
        if($bmi<=18.5) {echo "<p>Sa indeksom $bmi osoba je u grupi: Potrahnjenost</p>";}
        elseif($bmi>18.5 && $bmi<24.9) {echo "<p>Sa indeksom $bmi osoba je u grupi: Normalna tezina</p>";}
        elseif($bmi>=24.9 && $bmi<=30) {echo "<p>Sa indeksom $bmi osoba je u grupi: Povisena tezina</p>";}
        else {echo "<p>Sa indeksom $bmi osoba je u grupi: Gojaznost</p>";}
    }
    indeksTelesneMase(83, 180);

    //ZADATAK 3
    echo "<strong>ZADATAK 3 <br> Napisati funkciju godine kojoj se prosledjuje parametar godina rodjenja. Funkcija treba da vrati
    koliko godina ima ta osoba, jer godinu preuzimamo sa racunara. Ako je osoba punoletna, broj godina plavom bojom
    u suprotnom, zutom bojom</strong><br>";

    function godine($godRodj) {
        return $brGodina = date('o') - $godRodj;
    }
    $broj = godine(1980);
    if($broj>=18) {echo "<p style = color:blue>Osoba koja ima $broj god. je punoletna!</p>";}
    else {echo "<p style = color:yellow>Osoba koja ima $broj god. je maloletna!</p>";}

    ?>            


    </body>
</html>
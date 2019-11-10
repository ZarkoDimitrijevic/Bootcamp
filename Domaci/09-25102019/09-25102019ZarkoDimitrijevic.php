<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scaling=1.0">
        <title>Zarko Dimitrijevic</title>
        <style>
            .yellow {color:yellow;
                    font-size:20px;}
            .orange {color:orange;
                font-size:20px;}
            .blue {color:lightblue;
                font-size:20px;}
            .special {font-size:20px;}
            .black {background-color:black;
                    color:white;}

        </style>

    </head>

    <body>
        <?php
        //ZADATAK 1
        echo "<br>ZADATAK 1<br>
        <strong>Napisati funkciju digitron koja prima tri parametra: 
        Prva dva parametra su brojevi, 
        a treći je karakter koji predstavlja aritmetičku operaciju (‘+’, ‘-’, ‘*’ ili ‘/’). 
        Potrebno je da funkcija izvrši odgovarajuću aritmetičku operaciju nad zadatim brojevima 
        i na ekranu ispiše prvi broj, operaciju, drugi broj, jednako, rezultat.
        Na primer:
        digitron(5, 8, ‘*’) kao rezultat na ekranu ispisuje 5 * 8 = 40.
        digitron(2, 2, “+”) kao rezultat na ekranu ispisuje 2 + 2 = 4</strong>";

        function digitron($a, $b, $o) {
            if($o == "+") {echo "<p>Zbir brojeva $a i $b je $a $o $b = " . $a+$b . "</p>";}
            elseif($o == "-") {echo "<p>Razlika brojeva $a i $b je $a $o $b = " . $a-$b . "</p>";}
            elseif($o == "*") {echo "<p>Proizvod brojeva $a i $b je $a $o $b = " . $a*$b . "</p>";}
            elseif($o == "/") {echo "<p>Kolicnik brojeva $a i $b je $a $o $b = " . $a/$b . "</p>";}
            else {echo "<p>Pogresan unos</p>";}
        }
        digitron(1, 2, "*");

        //ZADATAK 2
        echo "<br>ZADATAK 2<br>
        <strong>Odrediti srednju vrednost neparnih elemenata celobrojnog niza</strong>";
        $niz = array(-5,-4,-3,-2,-1,0,1,25,31,43,51);
        $zbir=0;
        $brojac=0;
        for($i=0; $i<count($niz); $i++) {
            if($niz[$i]%2!=0){
                $zbir = $zbir+$niz[$i];
                $brojac++;
            }
        }

        function stampajNiz($brojevi){
            for($i=0; $i<count($brojevi); $i++) {
                echo $brojevi[$i] . ",";
            }
        }
        ?>
        <p>Srednja vrednost neparnih brojeva elemenata celobrojnog niza $niz
        sa elementima: <?php stampajNiz($niz) ?> je: <?php echo $zbir/$brojac ?> </p>

        
        <p><H1>NAPOMENA ZA PREDAVACA</H1></p>
        <p class="black">Prvi put sam zapisao gornji paragraf u phpu kroz echo<br>
        <span class="yellow">echo</span> <span class="orange">"Srednja vrednost neparnih brojeva elemenata celobrnoj niza \$niz sa elementima: "</span> <span class="blue"> . </span>
        <span class="yellow">stampajNiz(</span><span class="blue">$niz</span><span class="yellow">)</span><span class="blue"> .</span> <span class="orange"> "je: "</span><span class="blue"> . $zbir/$brojac</span><span class="special">;</span> <br>
        sto je dovodilo do toga da se niz ispise pre paragrafa. Kada sam zapisao na nacin kao u kodu, to se ne desava, moze neko pojasnjenje?
        </p>

        <?php
        

        ?>

    </body>
</html>
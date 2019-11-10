<!DOCTYPE html>
<html>
    <head>
        <title>Zarko Dimitrijevic</title>
        <style>
        
        </style>

    </head>

    <body>
    
        <?php
        //Uvod
        $visine=array(204, 191, 199, 188, 194, 199, 205, 210);
        echo "<p> Za dati niz: ";
        function ispisNiz($n) {
            foreach($n as $element) {
                echo $element , ", ";
            }
        }
        ispisNiz($visine);
        echo "slede resenja zadataka:</p>";

        //Prvi zadatak
        echo "<p>PRVI ZADATAK</p>";
        $visine=array(204, 191, 199, 188, 194, 199, 205, 210);
        function prosecnaVisina($n) {
            $zbir=0;
            $brojac=0;
            foreach($n as $pojedinacno) {
                $zbir=$zbir+$pojedinacno;
                $brojac++;
            }
            return $zbir/$brojac;
        }

        echo "<p>Funkcija vraca prosecnu visinu sportista koja iznosi: " . prosecnaVisina($visine) . " centimetara.</p>";

        //Drugi zadatak
        echo "<p>DRUGI ZADATAK</p>";
        $visine=array(204, 191, 199, 188, 194, 199, 205, 210);
        $boja1 = "red";
        $boja2 = "blue";
        function natprosecnoVisoki($n, $boja1, $boja2) {
            foreach($n as $pojedinacno) {
                if($pojedinacno > prosecnaVisina($n)) {
                    echo "<p style=color:$boja1>$pojedinacno</p>";
                }else {echo "<p style = color:$boja2>$pojedinacno</p>";}
            }
        }

        natprosecnoVisoki($visine, $boja1, $boja2);

        //Treci zadatak
        echo "<p>TRECI ZADATAK</p>";
        $visine=array(204, 191, 199, 188, 194, 199, 205, 210);
        function brojac($n) {
            $brojac=0;
            foreach($n as $pojedinacno) {
                $brojac++;
            }
            return $brojac;
        }
        $brojElemenata = brojac($visine);
        
        $a=array();
        for($i=0; $i<$brojElemenata-1; $i++) {
            echo $a[]=$visine[$i]+$visine[$i+1] . ", ";
        }
        
        //Cetvrti zadatak
        echo "<p>CETVRTI ZADATAK</p>";
        $visine=array(204, 191, 199, 188, 194, 199, 205, 210);
        
        function trenerVidi($n) {
            $brojac=1;//jer uvek vidi prvog
            $naredna_visina=0;
            $prva_visina=$n[0];
            foreach($n as $visine) {
                if($visine>$prva_visina && $visine>$naredna_visina) {
                    $brojac++;
                    $naredna_visina=$visine;
                }
                
            }
            return $brojac;
        }
        echo "<p>Broj sportista koje trener moze da vidi je: " . trenerVidi($visine) . "</p>";

        
        
    ?>
    </body>
</html>
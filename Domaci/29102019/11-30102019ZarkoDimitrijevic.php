<!DOCTYPE html>
<html>
    <head>
        <title>Zarko Dimitrijevic</title>
    </head>
    <body>
    <h1>Domaci 30.10.2019.</h1>
        <?php
        $pio = array(
            "Matematika"=>4,
            "Likovno"=>5,
            "Muzicko"=>5,
            "Hemija"=>4,
            "Fizika"=>3,
            "Srpski"=>4,
            "Biologija"=>4,
            "Fizicko"=>5
        );

        function ispisiPredmeteiOcene($niz){
            foreach($niz as $predmet=>$ocena) {
                echo "<p>Iz predmeta: '$predmet' ucenik ima ocenu: $ocena.</p>";
            }
        }

        function najocena($niz) {
            $najocena=1;
            foreach($niz as $predmet=>$ocena) {
                if($ocena>$najocena) {
                    $najocena = $ocena;
                }
            }

            echo "Ucenik ima najvisu ocenu iz sledecih predmeta: ";
            foreach($niz as $predmet=>$ocena) {
                if($najocena==$ocena) {
                    echo $predmet . ", ";
                }
            }
        }

        function prosecna($niz) {
            $zbir=0;
            foreach($niz as $predmet=>$ocena) {
                $zbir = $zbir+$ocena;
            }
            $prosecnaOcena = $zbir/count($niz);

            echo "<p>Ucenik ima vecu ocenu od prosecne iz sledecih predmeta: ";
            foreach($niz as $predmet=>$ocena) {
                if($ocena>$prosecnaOcena) {
                    echo $predmet . ", ";
                }
            }
            echo "</p>";
        }

        ispisiPredmeteiOcene($pio);
        najocena($pio);
        prosecna($pio);

        ?>
    </body>
</html>
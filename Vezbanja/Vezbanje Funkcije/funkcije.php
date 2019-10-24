<html>
    <head>
        <link type="text/css" 
            rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php echo "<h1>Zadaci sa funkcijama</h1>"; ?>
        <?php
            function mojaFunkcija()
            {
                echo "<p>Zdravo svete! :)</p>";
            }
        ?>
        <h3>Poziv funkcije mojaFunkcija:</h3>
        <?php
            mojaFunkcija(); //poziv funkcije
        ?>
        <a href="http://www.google.com">Google</a>
        <?php
            mojaFunkcija(); //poziv funkcije
            mojaFunkcija(); //poziv funkcije
            mojaFunkcija(); //poziv funkcije

            function drugaFunkcija($par)
            {
                echo "<p>$par</p>";
            }

            function korisnik($ime, $god)
            {
                if(($god % 10 == 1) && ($god != 11))
                {
                    echo "<p>$ime ima $god godinu.</p>";
                }
                elseif(($god % 10 >= 2) && ($god % 10 <= 4) 
                    && ($god != 12) && ($god != 13) && ($god != 14))
                {
                    echo "<p>$ime ima $god godine.</p>";
                }
                else
                {
                    echo "<p>$ime ima $god godina.</p>";
                }
            }

            drugaFunkcija("Danas je cetvrtak.");
            drugaFunkcija(5);
            drugaFunkcija("Jesen je, a k'o prolece da je :)");
            $a = "Danas je 24.10.2019.";
            drugaFunkcija($a);

            korisnik("Pera", 22);
            korisnik("Lana", 13);
            korisnik("Bojan", 21);

            date('m');

            function zbir($a, $b)
            {
                //korisnik("Pera", 8);
                //echo "Danas je" . date('d');
                $rez = $a + $b;
                return $rez;
            }
            $z = 5;
            $x = $z;
            $y = 17;
            $rezultat = zbir($x, $y);
            echo "<p>Zbir je $rezultat</p>";

            $c = zbir(1, 5);
            $d = zbir(-5, 9);
            //echo "<p>Zbir je: zbir($c, $d)</p>"; // NE MOZE!
            echo "<p>Zbir je: " . zbir($c, $d) . "</p>";
            $f = zbir($c, $d);
            echo "<p>Suma je: $f</p>";
            echo "<p>Zdravo</p>";

            function neparan($n)
            {
                if($n % 2 == 1)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }

            $m = 88;
            if(neparan($m) == true)
            {
                echo "<p>Broj $m je neparan</p>";
            }
            else
            {
                echo "<p>Broj $m je paran</p>";
            }

            function slika($img)
            {
                echo "<img src='$img'>";
            }

            slika('images/ruze.jpg');

            function font($broj)
            {
                echo "<p style='font-size: " . $broj . "px'>Some text</p>";
            }

            font(40);
            font(50);


            function font2($broj, $text)
            {
                echo "<p style='font-size: " . $broj . "px'>$text</p>";
            }

            font2(40, "Tekst tekst");
            font2(50, "Tekst tekst tekst");

        ?>
    </body>
</html>
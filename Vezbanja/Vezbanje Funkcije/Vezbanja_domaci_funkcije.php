<!DOCTYPE html>
<html>
    <head>
    </head>
    
    <body>
    <h1>Funkcije - Zadaci za vežbu</h1> 
<?php
//ZADATAK 1
echo "<strong>Napisati funkciju pozdrav kojoj se prosleđuje ime i prezime, a funkcija ispisuje pozdrav. 
Na primer za uneto ime Jelena i prezime Matejić, funkcija ispisuje Zdravo Jelena Matejić.</strong>"; 

function zdravo($ime, $prezime) {
    echo "<p>Zdravo $ime $prezime</p>";
}
zdravo('Jelena', 'Matejic');

//ZADATAK 2
echo "<strong>Napisati funkciju zbir koja računa zbir dva realna broja.
Šta bi trebalo izmeniti da bi se dobila razlika, proizvod ili količnik dva broja.</strong>";
function zbir($a, $b) {
    $zbir = $a+$b;
    return $zbir;
}
echo "<p>Zbir brojeva je" . zbir(5,2) . "shvatili smo</p>";

//ZADATAK 3
echo "<strong>Napisati funkciju neparan koja za uneti ceo broj n vraća tačno ukoliko je paran 
ili netačno ukoliko nije neparan.</strong>";
function neparan($n) {
    if($n%2==0) {
        echo "<p>Broj $n je paran.</p>";
    } else {echo "<p>Broj " . number_format($n, 0, ',', '.') . " je neparan.</p>";}
}
neparan(4565423);

//ZADATAK 4
echo "<strong>Napisati funkciju maks2 koja vraća veći od dva prosleđena realna broja. 
Zatim napisati funkciju maks4 koja vraća najveći od četiri prosleđena realna broja.</strong>";
function maks2($a, $b) {
    if($a>$b) {return $a;}
    else {return $b;}
}

function maks4($a, $b, $c, $d) {
    $v = maks2($a, $b);
    $m = maks2($c, $d);
    return maks2($v, $m);
}
maks4(1,2,3,4);

//ZADATAK 5
echo "<strong>Napraviti funkciju koja prikazuje sliku za prosledjenu adresu slike.</strong>";
function slika($a) {
    echo "<p><img src=$a></p>";
}
slika('cvece.jpg');

//ZADATAK 6
echo "Napraviti funkciju koja za unetu boju na engleskom jeziku boji tekst paragrafa u tu boju.";
function boja($boja) {
    echo "<p style = color:$boja>Ovo je funkcija koja boji tekst u zadatu boju.</p>";
}
boja('red');

//ZADATAK 7
echo "Napraviti funkciju kojoj se prosleđuje ceo broj a ona ispisuje tekst koji ima prosleđenu veličinu fonta.";
function font($a) {
    echo "<p style = font-size:" . $a . "px>Ovo je funkcija koja stavlja velicinu fonta</p>";
}
font(20);

//ZADATAK 8
echo "Napraviti funkciju koja pet puta ispisuje istu rečenicu, a veličina fonta rečenice treba 
da bude jednaka vrednosti iteratora.";
function ispisuj() {
    for($i=1; $i<=5; $i++) {
        echo "<p style = font-size:$i" . "0px>Ovo su recenice.</p>";
    }
}
ispisuj();

//ZADATAK 9
echo "<strong>Napisati program koji sadrži funkciju sedmiDan koja za uneti broj n ispisuje n-ti dan u nedelji (npr. 
za 1 se ispisuje „Ponedjeljak“, za 7 ispisuje “Nedelja”, a za 8 opet “Ponedeljak”). 
Pitanje: Kako bismo realizovali ovaj zadatak da se tražio n-ti mesec u godini?</strong>";
function sedmiDan($n) {
    if($n<=7){
        if($n==1) {echo "<p>Ponedeljak</p>";}
        elseif($n==2) {echo "<p>Utorak</p>";}
        elseif($n==3) {echo "<p>Sreda</p>";}
        elseif($n==4) {echo "<p>Cetvrtak</p>";}
        elseif($n==5) {echo "<p>Petak</p>";}
        elseif($n==6) {echo "<p>Subota</p>";}
        else{echo "<p>Nedelja</p>";}    
    }else{
        $ost=$n%7;
        if($ost==1) {echo "<p>Ponedeljak</p>";}
        elseif($ost==2) {echo "<p>Utorak</p>";}
        elseif($ost==3) {echo "<p>Sreda</p>";}
        elseif($ost==4) {echo "<p>Cetvrtak</p>";}
        elseif($ost==5) {echo "<p>Petak</p>";}
        elseif($ost==6) {echo "<p>Subota</p>";}
        else{echo "<p>Nedelja</p>";}
        }
}
sedmiDan(10);

function mesecUGodini($n) {
    if($n<=12){
        if($n==1) {echo "<p>Januar</p>";}
        elseif($n==2) {echo "<p>Februar</p>";}
        elseif($n==3) {echo "<p>Mart</p>";}
        elseif($n==4) {echo "<p>April</p>";}
        elseif($n==5) {echo "<p>Maj</p>";}
        elseif($n==6) {echo "<p>Jun</p>";}
        elseif($n==7) {echo "<p>Jul</p>";}
        elseif($n==8) {echo "<p>Avgust</p>";}
        elseif($n==9) {echo "<p>Septembar</p>";}
        elseif($n==10) {echo "<p>Oktobar</p>";}
        elseif($n==11) {echo "<p>Novembar</p>";}
        else {echo "<p>Decembar</p>";}
    } else {
        if($n%12==1) {echo "<p>Januar</p>";}
        elseif($n%12==2) {echo "<p>Februar</p>";}
        elseif($n%12==3) {echo "<p>Mart</p>";}
        elseif($n%12==4) {echo "<p>April</p>";}
        elseif($n%12==5) {echo "<p>Maj</p>";}
        elseif($n%12==6) {echo "<p>Jun</p>";}
        elseif($n%12==7) {echo "<p>Jul</p>";}
        elseif($n%12==8) {echo "<p>Avgust</p>";}
        elseif($n%12==9) {echo "<p>Septembar</p>";}
        elseif($n%12==10) {echo "<p>Oktobar</p>";}
        elseif($n%12==11) {echo "<p>Novembar</p>";}
        else {echo "<p>Decembar</p>";}
    } 
}
mesecUGodini(24);
//ZADATAK 10
echo "<strong>Napraviti funkciju deljivSaTri koja se koristi u ispisivanju brojeva koji su deljivi sa tri 
u intervalu od n do m. Prebrojati koliko ima ovakvih brojeva od n do m.</strong>";
function deljivSaTri($n, $m) {
    $br=0;
    for($i=$n; $i<=$m; $i++) {
        if($i%3==0) {
            echo "<p>Broj $i je deljiv sa 3.</p>";
            $br++;
        }
    }
    echo "Ukupan broj brojeva koji su deljivi sa 3 u rasponu $n do $m je $br";
}
deljivSaTri(1, 10);
?>

    </body>
</html>
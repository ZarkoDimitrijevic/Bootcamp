<?php
require_once '06-Test12112019Zarko.php';


class ZbirkaZadataka extends knjiga
{
    private $naslov;
    private $autor;
    private $brojStrana;
    private $cena;
    private $brojZadataka;

    public function __construct($naslov, $autor, $brojStrana, $cena, $brojZadataka)
    {
        parent::__construct($naslov, $autor, $brojStrana, $cena);
        $this->setBrojZadataka($brojZadataka);
    }

    public function setBrojZadataka($brojZadataka)
    {
        $this->brojZadataka = $brojZadataka;
    }

    public function getBrojZadataka()
    {
        return $this->brojZadataka;
    }

    public function ispisZbirke()
    {
        echo "<p>Naziv zbirke je " . 
            $this->getNaslov() . ", autora " . 
            $this->getAutor() . ", koja ima " . 
            $this->getBrojStrana() . " stranica, i koja kosta: " . 
            $this->getCena() . " dinara, a ima ukupno: " .
            $this->getBrojZadataka() . " zadataka.</p>";
    }
}

$z1 = new ZbirkaZadataka('Mladi matematicari', 'Jelena Matejic i Stefan Stanimirovic', 285, 25000, 1000);
echo "Naslov zbirke: " . $z1->getNaslov() . "<br>";
echo "Autor zbirke: " . $z1->getAutor() . "<br>";
echo "Broj strana: " . $z1->getBrojStrana() . "<br>";
echo "Cena: " . $z1->getCena() . "<br>";
echo "Broj zadataka: " . $z1->getBrojZadataka() . "<br>";
$z1->stampa();
if($z1->skupaKnjiga())
{
    echo "<p>Zbirka je skupa</p>";
}
else
{
    echo "<p>Zbirka nije skupa</p>";
};
$z1->dugoIme();
$z1->ispisZbirke();

//funkcija i njeno testiranje
function prosecanBrojZadataka($zbirka)
{
    return $prosecanBrojZadataka = $zbirka->getBrojZadataka()/$zbirka->getBrojStrana();
}

echo "<p>Prosecan broj zadataka u zbirci $\z1 je: " . prosecanBrojZadataka($z1) . "</p>";

//niz zbirki i ostalo
$z2 = new ZbirkaZadataka('Mladi filozofi', 'Bojan Kitanovic', 300, 17000, 800);
$z3 = new ZbirkaZadataka('Mladi istoricari', 'Palio Pimitarevic', 285, 16000, 500);

$nizZbirki = array($z1, $z2, $z3);

function pisiSkupe($niz, $k)
{
    foreach($niz as $zbirka)
    {
        if($zbirka->skupaKnjiga()===true && prosecanBrojZadataka($zbirka)>$k)
        {
            $zbirka->ispisZbirke();
        }
    }
}

pisiSkupe($nizZbirki, 1);

?>
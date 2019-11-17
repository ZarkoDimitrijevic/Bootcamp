<?php

require_once 'klasaZbirka.php';

class Knjiga
{
    private $naslov;
    private $autor;
    private $brojStrana;
    private $cena=2500;

    public function __construct($naslov, $autor, $brojStrana, $cena)
    {
        $this->setNaslov($naslov);
        $this->setAutor($autor);
        $this->setBrojStrana($brojStrana);
        $this->setCena($cena);
    }

    public function setNaslov($naslov)
    {
        $this->naslov = $naslov;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function setBrojStrana($brojStrana)
    {
        $this->brojStrana = $brojStrana;
    }

    public function setCena($cena)
    {
        $this->cena = $cena;   
    }

    public function getNaslov()
    {
        return $this->naslov;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function getBrojStrana()
    {
        return $this->brojStrana;
    }

    public function getCena()
    {
        return $this->cena;
    }

    public function stampa()
    {
        echo "<p>Naziv knjige " . 
            $this->getNaslov() . ", autora " . 
            $this->getAutor() . ", koja ima " . 
            $this->getBrojStrana() . " stranica, i koja kosta: " . 
            $this->getCena() . " dinara.</p>";
    }

    public function skupaKnjiga()
    {
        if($this->cena>4000)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function dugoIme()
    {
        if(strlen($this->getAutor())>18)
        {
            echo "<p style='color:red'>" . $this->getAutor() . "</p>";
        }
    }
}

//Formiramo objekat i pozivamo metode
$k1=new Knjiga('Jako i tako', 'Miljenko Miljenkijevic', 255, 5000);
echo "Naslov knjige: " . $k1->getNaslov() . "<br>";
echo "Autor knjige: " . $k1->getAutor() . "<br>";
echo "Broj strana: " . $k1->getBrojStrana() . "<br>";
echo "Cena: " . $k1->getCena() . "<br>";
$k1->stampa();
if($k1->skupaKnjiga())
{
    echo "<p>Knjiga je skupa</p>";
}
else
{
    echo "<p>Knjiga nije skupa</p>";
};
$k1->dugoIme();

//Formiramo jos objekata
$k2 = new Knjiga('Idemo dalje' , 'Gavrilo Gavrijevic', 302, 3050);
$k3 = new Knjiga('Nego sta', 'Miki Mikic Mile', 351, 4075);
$k4 = new Knjiga('Da vidimo sad', 'Neko Nekic', 700, 10000);
$k5 = new Knjiga('Eto vidis', 'Cile Cikic', 800, 11000);

//Formiramo niz
$knjige = array($k1, $k2, $k3, $k4, $k5);

//Funkcija i njen poziv
function natprosecnaKnjiga($niz)
{
    $zbirCena = 0;
    $zbirStrana = 0;
    $brojac = 0;
    foreach($niz as $knjiga)
    {
        $zbirCena = $zbirCena + $knjiga->getCena();
        $zbirStrana = $zbirStrana + $knjiga->getBrojStrana();
        $brojac++;
    } 

    $prosecnaCena = $zbirCena/$brojac;
    $prosecanBrojStrana = $zbirStrana/$brojac;
    
    foreach($niz as $knjiga)
    {
        if($knjiga->getBrojStrana() > $prosecanBrojStrana && $knjiga->getCena()>$prosecnaCena)
        {
            $knjiga->stampa();
        }
    }
}

natprosecnaKnjiga($knjige);

/*ukljucili smo gore drugu stranu, 
ali smo ukljcili i ovu stranu drugoj ako neko zeli da poziva samo II stranu :)*/








?>
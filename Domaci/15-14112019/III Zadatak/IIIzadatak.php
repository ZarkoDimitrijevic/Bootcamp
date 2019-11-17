<?php

class Artikal
{
    protected $naziv;
    protected $cena;
    public $id;
    public $url;

    public function __construct($naziv, $cena, $url, $id)
    {
        $this->naziv = $naziv;
        $this->cena = $cena;
        $this->url = $url;
        $this->id = $id;
    }

    public function showDescription() 
    {
        echo "<p>Naziv je $this->naziv a cena je $this->cena</p>";
    }
    
    
    public function getPrice()
    {
        return $this->cena;
    }

    public function getName()
    {
        return $this->naziv;
    }
}

class Laptop extends Artikal
{
    public $opis;
    public $stanje;

    public function __construct($naziv, $cena, $url, $id, $opis)
    {
        parent::__construct($naziv, $cena, $url, $id);
        $this->opis = $opis;
    }

    public function showDescription()
    {
        echo "<p>Naziv je $this->naziv, cena je $this->cena, a sledi opis proizvoda: $this->opis</p>";
    }

    public function turnOn()
    {
        $this->stanje = 'ukljucen';
        echo '<p>Podesili ste vrednost na ukljucen!</p>';
    }

    public function turnOff()
    {
        $this->stanje = 'iskljucen';
        echo '<p>Podesili ste vrednost na iskljucen!</p>';
    }
}

class Torba extends Artikal
{
    public $sadrzaj;

    public function __construct($artikal)
    {
        $this->put($artikal);
    }

    public function showDescription()
    {
        echo '<p>Torba za laptop racunar</p>';
        Torba::showDescription();
    }

    public function put($artikal)
    {
        if($artikal!==false)
        {
            $this->sadrzaj = new Artikal($artikal->getName(), $artikal->getPrice(), $artikal->url, $artikal->id);
            echo "Proizvod ubacen";
        }
        else
        {
                echo "<p>Proizvod je vec u korpi!</p>";
        }
    }

    public function remove()
    {
        unset($this->sadrzaj);
    }

}

$a1 = new Artikal('Punjac', 1000, 'asdfadfa', 1);
$a1->showDescription();
$a1->getPrice();

echo "<hr>";

$l1 = new Laptop('Laptop GR 2000', 25000, 'sfdsfsdf', 2, 'Mnogo dobar lap top, neverovatno, ima 3 graficke kartice');
$l1->showDescription();
$l1->getPrice();
$l1->turnOn();
$l1->turnOff();


$t1 = new Torba($l1);
$t2 = new Torba($l1);
var_dump($t2);






    


?>
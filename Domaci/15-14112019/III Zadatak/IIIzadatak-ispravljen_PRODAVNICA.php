<?php

class Artikal
{
    protected $naziv;
    protected $cena;
    private $id;
    private $url;

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
    private $opis;
    private $stanje;

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
    private $sadrzaj = NULL;

    public function __construct($naziv, $cena, $url, $id, $artikal)
    {
		parent::__construct($naziv, $cena, $url, $id);
        $this->put($artikal);
    }

    public function showDescription()
    {
        echo '<p>Torba za laptop racunar</p>';
        $this->sadrzaj->showDescription();
    }

    public function put($artikal)
    {
		if($this->sadrzaj === NULL)
		{
			$this->sadrzaj = $artikal;
			echo "<p>Artikal je smesten u torbu</p>";
		}
		else
		{
			echo "<p>Troba je vec puna :(</p>";
		}
    }

    public function remove()
    {
        $this->sadrzaj = NULL;
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

echo "<hr>";

$t1 = new Torba('Torba', 400, 'asasasa', 3, $l1);
$t1->showDescription();
$t1->put($a1);
$t1->remove();
$t1->put($a1);
$t1->showDescription();

echo "<hr>";

$t2 = new Torba('Velika Torba', 600, 'qwqwqwq', 4, $t1);
$t2->showDescription();



echo "<hr>";


    


?>
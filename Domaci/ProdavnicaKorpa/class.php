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
    public $sadrzaj=array();

    /*public function __construct($a)
        $this->sadrzaj = new Artical($a); //ovo ce sada verovatno da radi*/

    public function showDescription()
    {
        echo '<p>Torba za laptop racunar</p>';
        Torba::showDescription();
    }

    public function put($id)
    {
        foreach($sadrzaj as $identifikator)
        {
            if($identifikator!=$id)
            {
                $sadrzaj[]=$id;
            }
            else
            {
                echo "<p>Proizvod je vec u korpi!</p>";
            }
        }
    }

    public function remove($id)
    {
        foreach($sadrzaj as $identifikator)
        {
            if($identifikator==$id)
            {
                unset($identifikator);
            }
        } 
    }

}







    


?>
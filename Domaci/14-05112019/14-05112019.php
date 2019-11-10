<?php
class Pacijent {
    private $ime;
    private $visina;
    private $tezina;
    private $indeks;

    public function __construct($i=null, $v=null, $t=null) 
    {
        $this->setIme($i);
        $this->setVisina($v);
        $this->setTezina($t);
        $this->setIndeks();
    }

    private function setIndeks()
    {
        $this->indeks = uniqid();
    }

    public function getIndeks()
    {
        return $this->indeks;
    }

    public function setIme($n) 
    {
        $this->ime = $n;
    }

    public function setVisina($n) 
    {
        $this->visina = $n;
    }

    public function setTezina($n) 
    {
        $this->tezina = $n;
    }

    public function getIme() 
    {
        return $this->ime;
    }

    public function getVisina()
    {
        return $this->visina;
    }

    public function getTezina()
    {
        return $this->tezina;
    }

    public function izracunajBmi()
    {
        $bmi=$this->getTezina()/(($this->getVisina()/100)*($this->getVisina()/100));
        return $bmi;
    }
}


function napraviObjekat($i, $v, $t)
{
    if($i===null || $v===null || $t===null || $i===0 || $v===0 || $t===0)
    {
        echo "Dogodila se greska. Morate uneti vrednost Ime tipa string, 
            vrednost Visinu tipa ceo broj u centimetrima, i 
            vrednost Tezinu tipa ceo broj u kilogramima!";
    }
    else
    {
        $osoba = new Pacijent($i, $v, $t);
        return $osoba;
    }

}


$pacijenti=array();
$pacijenti[] = napraviObjekat('Zika', 180, 50);
$pacijenti[] = napraviObjekat('Mika', 190, 100);
$pacijenti[] = napraviObjekat('Kika', 175, 90);

foreach($pacijenti as $pacijent)
{   
    $najveciBmi=0;
    if($pacijent->izracunajBmi()>$najveciBmi)
    {
        $pacijentBmi = $pacijent;
        $najveciBmi = $pacijent->izracunajBmi();
    }
}

echo "<p>Pacijent: " . $pacijentBmi->getIme() . " ima najveci BMI vrednosti: " . $pacijentBmi->izracunajBmi() . "</p>";
echo "<p>Njegova visina je " . $pacijentBmi->getVisina() . " centimetara, a tezak je: " . $pacijentBmi->getTezina() . " kilograma.</p>"





?>
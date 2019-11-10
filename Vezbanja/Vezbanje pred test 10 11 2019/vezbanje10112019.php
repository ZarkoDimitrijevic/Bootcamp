<?php
    class Osoba
    {
        private $ime;
        private $prezime;
        private $godinaRodjenja;

        public function __construct($i, $p, $gr)
        {
            $this->setIme($i);
            $this->setPrezime($p);
            $this->setGodinaRodjenja($gr);
        }

        public function setIme($n)
        {
            $this->ime = $n;
        }

        public function setPrezime($n)
        {
            $this->prezime = $n;
        }

        public function setGodinaRodjenja($n)
        {
            $this->godinaRodjenja = $n;
        }

        public function getIme()
        {
            return $this->ime;
        }

        public function getPrezime()
        {
            return $this->prezime;
        }

        public function getGodinaRodjenja()
        {
            return $this->godinaRodjenja;
        }
    }

    class Kosarkas extends Osoba
    {
        public $gradRodjenja;
        public $visina;
        public $tezina;
        public $brNaDresu;
        public $ukupanBrPoena;
        public $ukupanBrOdigranihUtakmica;
        public $pozicija;
        public $reprezentacija;

        public function __construct($i, $p, $gr, $gradRodj, $v, $t, $brNaDr, $ukupBP, $uBOU, $poz, $repre)
        {
            parent::__construct($i, $p, $gr);
            $this->gradRodjenja = $gradRodj;
            $this->visina = $v;
            $this->tezina =  $t;
            $this->brNaDresu = $brNaDr;
            $this->ukupanBrPoena = $ukupBP;
            $this->ukupanBrOdigranihUtakmica = $uBOU;
            $this->pozicija = $poz;
            $this->reprezentacija = $repre;
        }
    }

    $k1 = new Kosarkas('Mika', 'Mikic', 1990, 'Nis', 201, 110, 12, 50, 2, 'bek', 'Srbija');
    $k2 = new Kosarkas('Pika', 'Pikic', 1991, 'Beograd', 210, 120, 5, 70, 4, 'centar', 'Srbija');
    $k3 = new Kosarkas('Brka', 'Brkkic', 1995, 'Novi Sad', 205, 115, 3, 54, 3, 'playmaker', 'Srbija');

    var_dump($k1);
    var_dump($k2);
    var_dump($k3);

    $niz = array($k1, $k2, $k3);

    function prosecanBrP($n)
    {
        $poeni = $n->ukupanBrPoena;
        $utakmice = $n->ukupanBrOdigranihUtakmica;
        return $prosecanBr = $poeni/$utakmice;
    }

    foreach($niz as $igrac)
    {
        echo "Prosecan broj poena igraca " . $igrac->getIme() . " " .  $igrac->getPrezime() . " je " . prosecanBrP($igrac) . "<br>";
    }


    function ispisi($n)
    {
        foreach($n as $igrac)
        {
            if($igrac->pozicija == 5 && $igrac->visina > 210 && $igrac->tezina > 110) 
            {
                echo $igrac->getIme() . " je teski centar!";
            }
            else
            {
                echo $igrac->getIme() . " " . $igrac->getPrezime() . " nije teski centar!<br>";
            }
        }
    }

    ispisi($niz);

?>
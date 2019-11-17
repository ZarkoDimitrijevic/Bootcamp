<?php

/*Kreirati klasu student - 8. zadatak iz Zbirke*/
class Student
{
    private $jmbg;
    private $ime;
    private $prezime;
    private $nizOcena;
    private $prosecnaOcena;

    public function __construct($jmbg, $ime, $prezime, $nizOcena)
    {
        $this->setJMBG($jmbg);
        $this->setIme($ime);
        $this->setPrezime($prezime);
        $this->setNizOcena($nizOcena);
        $this->setProsecnaOcena($nizOcena);
    }

    public function setJMBG($jmbg)
    {
        if(settype($jmbg, 'string')===true && strlen($jmbg)===13)
        {
            $this->jmbg = $jmbg;
        }
        else
        {
            echo "<p>Doslo je do greske, JMBG mora biti string od 13 cifara</p>";
            die;
        }
        
    }

    public function setIme($ime)
    {
        $this->ime = $ime;
    }

    public function setPrezime($prezime)
    {
        $this->prezime = $prezime;
    }

    public function setNizOcena($nizOcena)
    {
        foreach($nizOcena as $ocena)
        {
            if($ocena>=6 && $ocena<=10)
            {
                $this->nizOcena = $nizOcena;
            }
            else
            {
                echo "<p>U nizu ocena mogu se naci ocene koje su 
                vece ili jednake broju 6 i manje ili jednake broju 10.
                Unesite ponovo</p>";
                die;
            }
        }
        
    }

    public function setProsecnaOcena($nizOcena)
    {
        $zbir=0;
        foreach($nizOcena as $ocena)
        {
            $zbir = $zbir + $ocena;
        }
        $this->prosecnaOcena = $zbir/count($nizOcena);
    }

    public function getJMBG()
    {
        return $this->jmbg;
    }
    
    public function getIme()
    {
        return $this->ime;
    }

    public function getPrezime()
    {
        return $this->prezime;
    }

    public function getNizOcena()
    {
        return $this->nizOcena;
    }

    public function getProsecnaOcena()
    {
        return $this->prosecnaOcena;
    }

    public function ispisiOcene($nizOcena)
    {
        $nova = "";
        foreach($nizOcena as $ocena)
        {
            $nova = $nova.$ocena.", "; 
        }
        return $nova;
    }

    public function ispis()
    {
        echo "<p>".
            $this->getIme() . " " . 
            $this->getPrezime() . " sa maticnim brojem " . 
            $this->getJMBG() . " ima ocene: " . 
            $this->ispisiOcene($this->getNizOcena()) . " a prosecna ocena mu je " . 
            $this->getProsecnaOcena()."</p>";
    }
}

function imePrezime($nizStudenata, $ime, $prezime)
{
    $brojac=0;
    foreach($nizStudenata as $student)
    {
        if($student->getIme()===$ime && $student->getPrezime()===$prezime)
        {
            $brojac++;
        }
    }
    return $brojac;
}

function srednjaOcena($niz)
{
    $zbir=0;
    foreach($niz as $student)
    {
        $zbir=$zbir+$student->getProsecnaOcena();
    }
    $srednjaOcena=$zbir/count($niz);
    echo "<p>Prosecna ocena svih studenata je: " . $srednjaOcena . "</p>";
}

function osrednji($niz)
{
    $zbir=0;
    foreach($niz as $student)
    {
        $zbir=$zbir+$student->getProsecnaOcena();
    }
    $srednjaOcena=$zbir/count($niz);

    $najblizi=100;
    $najbliziStudent=$niz[0];
    foreach($niz as $student)
    {
        if($najblizi > abs($student->getProsecnaOcena()-$srednjaOcena))
        {
            $najblizi = abs($student->getProsecnaOcena()-$srednjaOcena);
            $najbliziStudent = $student;
        }
    }
    $najbliziStudent->ispis();
}

function najmanjaOcenaNajboljeg($niz)
{   
    
    foreach($niz as $student)
    {
        $najveceRastojanje=4;
        if(10-$student->getProsecnaOcena()<$najveceRastojanje)
        {
            $najveceRastojanje=10-$student->getProsecnaOcena();
            $najboljiStudent=$student;
        }
    }
    
    $ocene = $najboljiStudent->getNizOcena();
    sort($ocene);
    
    echo "Najbolji student " . 
        $najboljiStudent->getIme() . " " .
        $najboljiStudent->getPrezime() . " ima najmanju ocenu " . $ocene[0];
}

function najmanjaOcena($niz)
{
    $najmanjaOcena=10;
    foreach($niz as $student)
    {
        foreach($student->getNizOcena() as $ocena)
        {
            if($ocena<$najmanjaOcena)
            {
                $najmanjaOcena = $ocena;
            }
        }
    }
    return $najmanjaOcena;
}

function najcescaOcena($niz)
{
    $brojac6=0;
    $brojac7=0;
    $brojac8=0;
    $brojac9=0;
    $brojac10=0;
    foreach($niz as $student)
    {
        foreach($student->getNizOcena() as $ocena)
        {
            if($ocena===6)
            {
                $brojac6++;
            }
            elseif($ocena===7)
            {
                $brojac7++;
            }
            elseif($ocena===8)
            {
                $brojac8++;
            }
            elseif($ocena===9)
            {
                $brojac9++;
            }
            else
            {
                $brojac10++;
            }
        }
    }
    $brojaci=array($brojac6, $brojac7, $brojac8, $brojac9, $brojac10);
    
    $najcesci=0;
    for($i=0; $i<count($brojaci); $i++)
    {
        if($brojaci[$i]>$najcesci){
            $najcesci=$brojaci[$i];
            $indeks=$i;
        }
    }

    if($indeks===0)
    {
        return 6;
    }
    elseif($indeks===1)
    {
        return 7;
    }
    elseif($indeks===2)
    {
        return 8;
    }
    elseif($indeks===3)
    {
        return 9;
    }
    else
    {
        return 10;
    }   
}

function rodjeniGodine($godina, $nizStudenata)
{
    $find = substr($godina,1,3);
    foreach($nizStudenata as $student)
    {
        if(strpos($student->getJMBG(), $find, 4)===4)
        {
            echo "<p>" . $student->getIme() . " " . 
                $student->getPrezime() ." rodjen je " . $godina . ".</p>";
        }
    }
}

$s1 = new Student('1111019730051', 'Djoka', 'Peric', [6,7,8,9,10]);
$s2 = new Student('1011018710141', 'Mika', 'Mikic', [8,8,9,10,10]);
$s3 = new Student('0911017720343', 'Pika', 'Pikic', [9,10,10,10,10]);

$s1->ispis();
$s2->ispis();
$s3->ispis();

$studenti=array($s1, $s2, $s3);

echo "<p>Broj studenata u datom nizu sa trazenim imenom i prezimenom je: " . 
    imePrezime($studenti, 'Pika', 'Pikic') . "</p>";
srednjaOcena($studenti);
osrednji($studenti);
najmanjaOcenaNajboljeg($studenti);
echo "<p>Najmanja ocena koju su studenti dobijali je: " . 
    najmanjaOcena($studenti) . "</p>";
echo "<p>Najcesca ocena koju su studenti dobijali je: " . 
    najcescaOcena($studenti) , "</p>";
rodjeniGodine(2019, $studenti);




?>
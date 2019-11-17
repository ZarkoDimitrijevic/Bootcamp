<?php
echo "<h3>Malo je cudno da za sve studente dajemo funkciji broj prijavljenih ESPB
    a ona to uopste ne koristi - za budzetske studente. Probao sam bez toga, ali javlja gresku.</h3>";

//kreiramo klasu Student
abstract class Student
{
    private $name;
    private $numScoredESPB;
    private $averageScore;

    public function __construct($name, $numScoredESPB, $averageScore)
    {
        $this->name = $name;
        $this->numScoredESPB = $numScoredESPB;
        $this->averageScore = $averageScore;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNumScoredESPB()
    {
        return $this->numScoredESPB;
    }

    public function getAverageScore()
    {
        return $this->averageScore;
    }

    public function writeData()
    {
        echo "Ime Studenta je " . $this->name . "<br>";
        echo "Broj osvojenih poena " . $this->numScoredESPB . "<br>";
        echo "Prosecna ocena studenta je " .  $this->averageScore . "<br>";
    }

    abstract public function calculateTuitionFee($numPushedESPB);
    abstract public function calculateExamFee();
}

//kreiramo klasu SamofinansirajuciStudent
class SamofinansirajuciStudent extends Student
{
    public function calculateTuitionFee($numPushedESPB)
    {
        if($this->getAverageScore()<8)
        {
            return "Skolarina je " . 1900*$numPushedESPB . "dinara.<br>";
        }
        else
        {
            return "Skolarina je " . 1600*$numPushedESPB . "dinara.<br>";
        }
    }

    public function calculateExamFee()
    {
        return "Naknada za ispit je " . 400 . " dinara<br><br>";
    }

    public function writeData()
    {
        echo "Ime Studenta je " . $this->getName() . "<br>";
        echo "Broj osvojenih poena " . $this->getNumScoredESPB() . "<br>";
        echo "Prosecna ocena studenta je " .  $this->getAverageScore() . ",<br>";
        echo "a on je Samofinansirajuci student.<br>";
    }

}

//kreiramo klasu BudzetskiStudent
class BudzetskiStudent extends Student
{
    public function calculateTuitionFee($numPushedESPB)
    {
        return "Skolarina je: " . (300-$this->getNumScoredESPB())*2000 . "<br>";
    }
    public function calculateExamFee()
    {
        return "Naknada za ispit je " . 100 . " dinara<br><br>";
    }
    public function writeData()
    {
        echo "Ime Studenta je " . $this->getName() . "<br>";
        echo "Broj osvojenih poena " . $this->getNumScoredESPB() . "<br>";
        echo "Prosecna ocena studenta je " .  $this->getAverageScore() . ",<br>";
        echo "a on je Budzetski student.<br>";
    }
}

$sb1 = new BudzetskiStudent('Nina Ninic', 170, 9.80);
$sb2 = new BudzetskiStudent('Djoka Peric', 120, 8.51);
$ss1 = new SamofinansirajuciStudent('Mika Mikic', 130, 9);
$ss2 = new SamofinansirajuciStudent('Mira Miric', 180, 7);

$studenti = array($sb1, $sb2, $ss1, $ss2);

foreach($studenti as $student)
{
    $student->writeData();
    echo $student->calculateTuitionFee(120);
    echo $student->calculateExamFee();
}



?>
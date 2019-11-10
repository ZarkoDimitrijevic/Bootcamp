<?php

class Brojevi {
    private $prviBroj;
    private $drugiBroj;

    public function __construct($prviBroj=null, $drugiBroj=null){
            $this->setPrviBroj($prviBroj);
            $this->setDrugiBroj($drugiBroj);
            if($prviBroj === null || $drugiBroj === null){
                throw new Exception;
            }
        }
    
    public function setPrviBroj($n) {
        $this->prviBroj = $n;
    }

    public function setDrugiBroj($n) {
        $this->drugiBroj = $n;
    }

    public function getPrviBroj() {
        return $this->prviBroj;
    }

    public function getDrugiBroj() {
        return $this->drugiBroj;
    }

    public function saberi() {
        return $zbir = $this->getPrviBroj()+$this->getDrugiBroj();
    }

    public function oduzmi() {
        return $razlika = $this->getPrviBroj()-$this->getDrugiBroj();
    }

    public function pomnozi() {
        return $proizvod = $this->getPrviBroj()*$this->getDrugiBroj();
    }

    public function podeli() {
            return $kolicnik = $this->getPrviBroj()/$this->getDrugiBroj();
    }

}

try{$brojevi = new Brojevi(1,2);}
catch(Exception $e){echo "Morate uneti dva broja pri kreiranju novog objekta.";}

echo "Zbir dva uneta broja je: " . $brojevi->saberi() . "</p>";
echo "Razlika dva uneta broja je: " . $brojevi->oduzmi() . "</p>";
echo "Proizvod dva uneta broja je: " . $brojevi->pomnozi() . "</p>";
echo "Kolicnik dva uneta broja je: " . $brojevi->podeli() . "</p>";

?>
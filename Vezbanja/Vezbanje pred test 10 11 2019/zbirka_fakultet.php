<?php
class KoncertnaDvorana
{
    private const KAPACITET=300;
    public static $nizSedista;
    public static $zauzeta=[];

    public function __construct()
    {
        $this->initializeArray();
        $this->setSlobodna();
    }

    public function initializeArray()
    {
        self::$nizSedista=array();
        for($i=1; $i<=self::KAPACITET; $i++)
        {
            self::$nizSedista[]="S".$i;
        }

        foreach(self::$nizSedista as $sediste)
        {
            foreach(self::$zauzeta as $zauzetoSediste)
            {
                if($sediste===$zauzetoSediste)
                {
                    unset($sediste);
                }
            }
        }
    }

    public function getNizSedista()
        {
            return self::$nizSedista;
        }

    public function setSlobodna()
    {   
        self::$nizSedista=array_fill_keys(self::$nizSedista, true);
    }

    public function getSlobodna()
        {
            return self::$nizSedista;
        }
    
    public function uvediGledaoca($brojSedista)
    {
        $slobodnaSedista = $this->getSlobodna();
        $indeks = 'S'.$brojSedista;
        if($brojSedista>=1 && $brojSedista<=300)
        {
            if($slobodnaSedista[$indeks]===true)
            {
                self::$zauzeta[] = self::$nizSedista[$indeks];
                echo "Bravo, gledalac je uveden!";
            }
            else
            {
                echo "Zao nam je, sediste je zauzeto, pokusajte sa nekim drugim sedistem!";
            }
        }
        else
        {
            echo "Morate uneti broj sedista u rasponu 1-300!";
        }

    }

}

$a=new KoncertnaDvorana;
$a->uvediGledaoca(22);
//$a->uvediGledaoca(22);
$b= new KoncertnaDvorana;
$b->uvediGledaoca(22);
//var_dump($a->getSlobodna());
var_dump(KoncertnaDvorana::$nizSedista['S1']);





?>
<!DOCTYPE html>
<html>
    <head>
    </head>
        <title>Zarko Dimitrijevic</title>
        <style>
            .uvuceno{width:80%;
                    margin-left:auto;
                    margin-right:auto;}
        </style>
    <body>
        <?php
        
        class Kompozicija {
            var $nazivKompozicije;
            var $imeKompozitora;
            var $godinaIzlaska;

            function stampaj() {
                echo "<p>Naziv kompozicije je '$this->nazivKompozicije',
                ime kompozitora je: $this->imeKompozitora, 
                objavljena je $this->godinaIzlaska,
                i njen stil ";
                if($this->barokna()===true){echo "je barokni.</p>";}
                else{echo "nije barokni.</p>";}
                if($this->proveraimena()===true){echo "<div class='uvuceno'>
                    Ludvig van Betoven je bio nemački kompozitor i pijanista. Presudna figura u prelazu između klasične 
                    i romantične ere u klasičnoj muzici; on ostaje jedan od najpoznatijih i najuticajnijih muzičara ovog perioda, 
                     a smatra se jednim od najvećih kompozitora svih vremena.
                    </div>";}
            }

            function barokna() {
                if($this->godinaIzlaska>=1600 && $this->godinaIzlaska<=1750) {
                    return true;
                }else {return false;}
            }

            function proveraimena() {
                if(strpos($this->imeKompozitora, 'Betoven')>0){
                    return true;
                }else{return false;}
            }
        }

        $a = new Kompozicija;
        $a->nazivKompozicije = "Za Elizu";
        $a->imeKompozitora = "Ludvig van Betoven";
        $a->godinaIzlaska = "1865";

        $b = new Kompozicija;
        $b->nazivKompozicije = "Cetiri godisnja doba";
        $b->imeKompozitora = "Antonio Vivaldi";
        $b->godinaIzlaska = "1725";

        $c = new Kompozicija;
        $c->nazivKompozicije = "Turski mars";
        $c->imeKompozitora = "Volfgang Amadeus Mozart";
        $c->godinaIzlaska = "1784";

        $a->stampaj();
        $b->stampaj();
        $c->stampaj();
        

        ?>
    </body>
</html>
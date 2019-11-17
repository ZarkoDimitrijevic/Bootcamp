<?php 
require_once 'class.php';
$l1 = new Laptop('Laptop1', 25000, './images/laptop1.jpg', 1, 'Mnogo lep');
$l2 = new Laptop('Laptop2', 25000, './images/laptop2.jpg', 2, 'Mnogo dobar');
$l3 = new Laptop('Laptop3', 25000, './images/laptop3.jpg', 3, 'Nije skup');
$l4 = new Laptop('Laptop4', 25000, './images/laptop4.jpg', 4, 'Dobra ponuda');
$l5 = new Laptop('Laptop5', 25000, './images/laptop5.jpg', 5, 'Dobitnik medalje');

$nizlap = array($l1, $l2, $l3, $l4, $l5);
$nizkorpa=array();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Prodavnica</title>
        <link rel="stylesheet" type="text/css" href="./CSS/style.css">
    </head>
    <body>
        
        
        <section class="artikli">
            <p><h1>Artikli</h1></p>
            <div >
            <?php
            //prikazujemo slike iz niza
                echo "<form action='' method='POST'>";
                echo "<ul>";
                for($i=0; $i<count($nizlap); $i++)
                {
                    echo "<li class='slike'><img src= '" . $nizlap[$i]->url . "'>
                            <button name='Dodaj" . $i . "'>Dodaj</button>
                          </li>";
                }
                echo "</ul>";
                echo "</form>";

            //ispitujemo dugme i dodajemo u korpu
                for($i=0; $i<count($nizlap); $i++)
                {
                    if(isset($_POST['Dodaj'.$i]))
                    {
                        $nizkorpa[]=$nizlap[$i]; 
                    }
                }

                
                
            ?>
            </div>
        
        </section>
        <aside class="korpa">
            <p><h1>Korpa</h1></p>
            <div >
                <?php
                    echo "<form action='' method='POST'>";
                    echo "<ul>";
                    for($i=0; $i<count($nizkorpa); $i++)
                    {
                        echo "<li class='slike'><img src='" . $nizkorpa[$i]->url . "'>
                                <button name='Izvadi" . $i. "'>Izvadi</button>
                              </li>";
                    }
                    echo "</ul>";
                    echo "</form>";
                

                    //ispitujemo dugme i brisemo iz korpe
                for($i=0; $i<count($nizkorpa); $i++)
                {
                    if(isset($_POST['Izvadi'.$i]))
                    {
                        unset($nizkorpa[$i]); 
                    }
                }

                ?>
            </div>
        </aside>

    </body>

</html>





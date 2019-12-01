<!DOCTYPE html>
<html>
    <head>
        <style>
            table
                {margin-left:auto;
                margin-right:auto;
                text-align:center;}
        
        </style>
    </head>
    <body>

<?php
//evo konekcije
$servername = 'localhost';
$username = 'root';
$password = '';

$konekcija = new mysqli($servername, $username, $password);

if($konekcija->connect_error)
{
    die("Nesto nije u redu sa konekcijom " . $konekcija->connect_error);
}
else
{
    echo "Bravo, uspesan log!";
}
$konekcija->set_charset('utf8');

//prvi zadatak
echo "<h1>Prvi zadatak</h1>";
$niz = array("SELECT * FROM `ambulanta`.`pacijenti` ORDER BY `visina` DESC;", 
"SELECT * FROM `ambulanta`.`pacijenti` ORDER BY `tezina` DESC;", 
"SELECT * FROM `ambulanta`.`pacijenti` ORDER BY `datum_rodjenja` DESC");

echo "<hr>";
foreach($niz as $element)
{
    $selectAmbulanta = $element;
    $result = $konekcija->query($selectAmbulanta);
    if($result===false)
    {
        echo "Dogodila se greska: " . $konekcija->error;
    }
    else
    {
        if($result->num_rows>0)
        {
            echo "<table>";
            echo "<tr> <th>Ime</th> <th>Prezime</th> <th>Broj kartona</th> <th>Datum i godina rodjenja</th> <th>Visina</th> <th>Tezina</th> <th>Pol</th> </tr>";
            while($row = $result->fetch_assoc())
            {
                echo "<tr>";
                echo "<td>" . $row['ime'] . "</td>";
                echo "<td>" . $row['prezime'] . "</td>";
                echo "<td>" . $row['broj_kartona'] . "</td>";
                echo "<td>" . $row['datum_rodjenja'] . "</td>";
                echo "<td>" . $row['visina'] . "</td>";
                echo "<td>" . $row['tezina'] . "</td>";
                echo "<td>" . $row['pol'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<hr>";
        }
        else
        {
            echo "Po zadatom upitu nema rezultata!";
        }
        
    }    
}

//drugi zadatak
echo "<h1>Drugi zadatak</h1>";
$select21vek = 
(
    "SELECT * FROM `ambulanta`.`pacijenti` WHERE `datum_rodjenja` > '2000-01-01'"
);

$rezultat = $konekcija->query($select21vek);
while($row1 = $rezultat->fetch_assoc())
{
    echo "<p>Pacijent: " . $row1['ime'] . " " . $row1['prezime'] . "</p>";
    echo "<p>Broj kartona: " . $row1['broj_kartona'] . "</p>";
    echo "<p>Datum rodjenja " . $row1['datum_rodjenja'] . "</p>";
    echo "<p>Visina " . $row1['visina'] . "</p>";
    echo "<p>Tezina " . $row1['tezina'] . "</p>";
    if($row1['pol']==1)
    {
        echo "<p>Pol: muski</p> <br><br>";    
    }
    elseif($row1['pol']==2)
    {
        echo "<p>Pol: zenski</p> <br><br>";
    }
    else
    {
        echo "<p>Pol: drugo</p> <br><br>";
    }
    
}

//treci zadatak
echo "<h1>Treci zadatak</h1>";
$selectpoimenu = 
(
    "SELECT * FROM `ambulanta`.`pacijenti` ORDER BY `ime` ASC"
);

$novirezultat = $konekcija->query($selectpoimenu);
while($row2 = $novirezultat->fetch_assoc())
{
    echo "<p>Pacijent: " . $row2['ime'] . " " . substr($row2['prezime'],0,1) . ".</p>";
    echo "<p>Broj kartona: " . $row2['broj_kartona'] . "</p>";
    echo "<p>Datum rodjenja " . $row2['datum_rodjenja'] . "</p>";
    echo "<p>Visina " . $row2['visina'] . "</p>";
    echo "<p>Tezina " . $row2['tezina'] . "</p>";
    if($row2['pol']==1)
    {
        echo "<p>Pol: muski</p> <br><br>";    
    }
    elseif($row2['pol']==2)
    {
        echo "<p>Pol: zenski</p> <br><br>";
    }
    else
    {
        echo "<p>Pol: drugo</p> <br><br>";
    }
}

//Moj zadatak
//Napravi imenik iz tabele pacijenti
echo "<h1>Moj zadatak - imenik</h1>";
$selectpoprezimenu = 
(
    "SELECT * FROM `ambulanta`.`pacijenti` ORDER BY `prezime` ASC"
);
$imenik = $konekcija->query($selectpoprezimenu);

$slovo='';
function pol($pol)
{
    if($pol==1)
        {
            echo "<p>Pol: muski</p> <br><br>";    
        }
        elseif($pol==2)
        {
            echo "<p>Pol: zenski</p> <br><br>";
        }
        else
        {
            echo "<p>Pol: drugo</p> <br><br>";
        }
}

while($row3 = $imenik->fetch_assoc())
{
    if($slovo=='')
    {
        echo "<p style='font-weight:bold'><h2>" . substr($row3['prezime'],0,1) . "</h2></p>";
        $slovo = substr($row3['prezime'],0,1);
        echo "<p>Pacijent: " . $row3['ime'] . " " . substr($row3['prezime'],0,1) . ".</p>";
        echo "<p>Broj kartona: " . $row3['broj_kartona'] . "</p>";
        echo "<p>Datum rodjenja " . $row3['datum_rodjenja'] . "</p>";
        echo "<p>Visina " . $row3['visina'] . "</p>";
        echo "<p>Tezina " . $row3['tezina'] . "</p>";
        pol($row3['prezime']);
    }
    elseif($slovo == substr($row3['prezime'],0,1))
    {
        echo "<p>Pacijent: " . $row3['ime'] . " " . substr($row3['prezime'],0,1) . ".</p>";
        echo "<p>Broj kartona: " . $row3['broj_kartona'] . "</p>";
        echo "<p>Datum rodjenja " . $row3['datum_rodjenja'] . "</p>";
        echo "<p>Visina " . $row3['visina'] . "</p>";
        echo "<p>Tezina " . $row3['tezina'] . "</p>";
        pol($row3['prezime']);
    }
    else
    {
        $slovo = substr($row3['prezime'],0,1);
        echo "<p style='font-weight:bold'><h2>" . substr($row3['prezime'],0,1) . "</h2></p>";
        echo "<p>Pacijent: " . $row3['ime'] . " " . substr($row3['prezime'],0,1) . ".</p>";
        echo "<p>Broj kartona: " . $row3['broj_kartona'] . "</p>";
        echo "<p>Datum rodjenja " . $row3['datum_rodjenja'] . "</p>";
        echo "<p>Visina " . $row3['visina'] . "</p>";
        echo "<p>Tezina " . $row3['tezina'] . "</p>";
        pol($row3['prezime']);

    }
    
    
}





?>

    </body>
</html>


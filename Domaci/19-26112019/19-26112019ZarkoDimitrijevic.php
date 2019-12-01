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



?>

    </body>
</html>


<?php
$a=array(1,2,3,4,5,6);

    for($i=0; $i<count($a)/2; $i++) {
        $d[]=$a[$i]+$a[(count($a)/2)+$i];
        var_dump($d);
    }
?>
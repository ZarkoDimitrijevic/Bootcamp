<?php
$techstack = 'Ajax, PHP, Javascript, CSS, HTML';
if(strpos($techstack,","))
{
    $check=explode(",", $techstack);
    var_dump($check);
    foreach($check as $techstack)
    {
        $techstack=str_replace(' ', '', $techstack);
        //$query->where('candidates.techstack','LIKE', "%{$techstack}%");
        var_dump($techstack);

        echo "<br>";
    }
};


?>
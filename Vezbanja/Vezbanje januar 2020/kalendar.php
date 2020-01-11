<!DOCTYPE html>
<html>

<?php


if(isset($_POST['prev']))
{
    $month = $_POST['month'];
    $year = $_POST['year'];
    if($month-1>0)
    {
        $month = $month-1;
    }
    else
    {
        $month = 12;
        $year = $_POST['year']-1;
    }
    
}
elseif(isset($_POST['next']))
{
    $month = $_POST['month'];
    $year = $_POST['year'];
    if($month+1>12)
    {
        $month = 1;
        $year = $_POST['year']+1;
    }
    else
    {
        $month = $_POST['month']+1;
        $year = $_POST['year'];
    } 

}
else
{
    $year = date('Y');
    $month = date('m');
}


?>
<form action="" method="POST">
    <input type="submit" name="prev" value='<'>
        <?php echo $year . '/' . $month ?>
    <input type="submit" name="next" value='>'>

    <input type="hidden" name="year" value="<?php echo $year?>">
    <input type="hidden" name="month" value="<?php echo $month?>">
</form>

<table>
    <tr>
    <th>Pon</th>
    <th>Uto</th>
    <th>Sre</th>
    <th>Cet</th>
    <th>Pet</th>
    <th>Sub</th>
    <th>Ned</th>
    </tr>
    <?php
    
    $daynumber = cal_days_in_month(CAL_GREGORIAN, $month, $year);//number of days in a month
    $firstday = date('N', mktime(0,0,0,$month, 1, $year));//first day of a month in a week numeric value
    $restdays = $daynumber;
    
    //last day in previous month
    $lastmonth = $month-1;
    if($lastmonth==0)
    {
        $lastmonth=1;
    }

    $lastdayprevious = cal_days_in_month(CAL_GREGORIAN, ($lastmonth), $year);
    var_dump($lastdayprevious);


    var_dump($daynumber);
    var_dump($firstday);
    $br=0;
    
    if($firstday == 1 && $daynumber == 28)
    {
        while($daynumber>0)
        {
            echo "<tr>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
            echo "</tr>";
            $daynumber = $daynumber-7;
        }
    }
    else
    {
        //First week
        echo "<tr>";
        if($firstday==1)
        {
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
        }
        elseif($firstday==2)
        {
            echo "<td>".$lastdayprevious."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";    
        }
        elseif($firstday==3)
        {
            echo "<td>".($lastdayprevious-1)."</td>";
            echo "<td>".$lastdayprevious."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
        }
        elseif($firstday==4)
        {
            echo "<td>".($lastdayprevious-2)."</td>";
            echo "<td>".($lastdayprevious-1)."</td>";
            echo "<td>".$lastdayprevious."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
        }
        elseif($firstday==5)
        {
            echo "<td>".($lastdayprevious-3)."</td>";
            echo "<td>".($lastdayprevious-2)."</td>";
            echo "<td>".($lastdayprevious-1)."</td>";
            echo "<td>".$lastdayprevious."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
        }
        elseif($firstday==6)
        {
            echo "<td>".($lastdayprevious-4)."</td>";
            echo "<td>".($lastdayprevious-3)."</td>";
            echo "<td>".($lastdayprevious-2)."</td>";
            echo "<td>".($lastdayprevious-1)."</td>";
            echo "<td>".$lastdayprevious."</td>";
            echo "<td>".++$br."</td>";
            echo "<td>".++$br."</td>";
        }elseif($firstday==7)
        {
            echo "<td>".($lastdayprevious-5)."</td>";
            echo "<td>".($lastdayprevious-4)."</td>";
            echo "<td>".($lastdayprevious-3)."</td>";
            echo "<td>".($lastdayprevious-2)."</td>";
            echo "<td>".($lastdayprevious-1)."</td>";
            echo "<td>".$lastdayprevious."</td>";
            echo "<td>".++$br."</td>";
        }

        //Weeks in the middle of the month
        $a=1;
        while($daynumber-7>0)
        {
            echo "<tr>";
            if($br<$restdays){echo "<td>".++$br."</td>";}else {echo"<td>".$a."</td>"; $a++;}
            if($br<$restdays){echo "<td>".++$br."</td>";}else {echo"<td>".$a."</td>"; $a++;}
            if($br<$restdays){echo "<td>".++$br."</td>";}else {echo"<td>".$a."</td>"; $a++;}
            if($br<$restdays){echo "<td>".++$br."</td>";}else {echo"<td>".$a."</td>"; $a++;}
            if($br<$restdays){echo "<td>".++$br."</td>";}else {echo"<td>".$a."</td>"; $a++;}
            if($br<$restdays){echo "<td>".++$br."</td>";}else {echo"<td>".$a."</td>"; $a++;}
            if($br<$restdays){echo "<td>".++$br."</td>";}else {echo"<td>".$a."</td>"; $a++;}
            echo "</tr>";
            $daynumber = $daynumber-7;
        }

        //Last week for large months
        if($br<$restdays)
        {
            echo "<tr>";
            if($br<$restdays){echo "<td>".++$br."</td>";}else {echo"<td>".$a."</td>"; $a++;}
            if($br<$restdays){echo "<td>".++$br."</td>";}else {echo"<td>".$a."</td>"; $a++;}
            if($br<$restdays){echo "<td>".++$br."</td>";}else {echo"<td>".$a."</td>"; $a++;}
            if($br<$restdays){echo "<td>".++$br."</td>";}else {echo"<td>".$a."</td>"; $a++;}
            if($br<$restdays){echo "<td>".++$br."</td>";}else {echo"<td>".$a."</td>"; $a++;}
            if($br<$restdays){echo "<td>".++$br."</td>";}else {echo"<td>".$a."</td>"; $a++;}
            if($br<$restdays){echo "<td>".++$br."</td>";}else {echo"<td>".$a."</td>"; $a++;}
            echo "</tr>";
        }


        
    }
    


    ?>
</table>

</html>
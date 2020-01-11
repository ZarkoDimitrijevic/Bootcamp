<html>
	

	<div id="tbl">
	<table>

		<?php
			if (isset($_POST['next'])) 
			{
				$month = $_POST['month'] + 1; 
				$year = $_POST['year'];
				if ($month > 12)        
				{
					$month = 1;
					$year++;  
				}
			}
			else if (isset($_POST['prev']))
			{    
				$month = $_POST['month'] - 1;
				$year = $_POST['year'];
				if ($month < 1)  
				{
					$month = 12;  
					$year--;
				}
			}
			else            
			{    
				$month = date("m");  //current month    Numeric representation of a month, with leading zeros:	01 through 12
				$year = date("Y");   //current year  	A full numeric representation of a year, 4 digits	Examples: 1999 or 2003
			}

			$date = time();
			$today = getdate();

			$thismonth = date('m', $date);                          //Get current month
			$thisyear = date('Y', $date);                           //Get current year
			$days_in_month = cal_days_in_month(0, $month, $year);   //How many days have each month


			$first_day = mktime(0,0,0,$month, 1, $year);

			$title = date('F', $first_day);         //A full textual representation of a month, such as January or March: January through December

			$day_of_week = date('D', $first_day);   //A textual representation of a day, three letters:	Mon through Sun

			switch($day_of_week)    //If the first day of a month is Sunday we need 0 blank box. If its Monday we need 1 blank box and if its Saturday we need 6 blank boxes
			{                       
				case "Mon": $blank = 0; break;
				case "Tue": $blank = 1; break;
				case "Wed": $blank = 2; break;
				case "Thu": $blank = 3; break;
				case "Fri": $blank = 4; break;
				case "Sat": $blank = 5; break;
				case "Sun": $blank = 6; break;
			}

			echo "<tr> <th colspan=60 > $title $year </th> </tr>";  //Print the current month-year (table's title)
			echo "<tr> 
					<td><center><b>Ponedeljak</b></center></td> 
					<td><center><b>Utorak</b></center></td>
					<td><center><b>Sreda</b></center></td>
					<td><center><b>Četvrtak</b></center></td>
					<td><center><b>Petak</b></center></td>
					<td><center><b>Subota</b></center></td>
					<td><center><b>Nedelja</b></center></td> 
				 </tr>";  

			$day_count = 1;     

			while( $blank > 0 )         //Print the blank boxes before the first day of each month
			{
				echo "<td> </td>";
				$blank = $blank - 1;
				$day_count++;
			}

			$day_num = 1;     

			while( $day_num <= $days_in_month )   
			{
				if ($day_num == $today['mday'] && $thismonth == $month && $thisyear == $year) //if day_num is the current day (and month-year)
				{
					$class = ' class = "day_num" ';  //Mark this day - we need to fill this box with red color (using CSS)
				} 
				else 
				{
					$class = '';  //or not
				}
				
				echo "<td $class><center> $day_num </center></td>";  //Print day's nummer
				
				$day_num++;                     
				$day_count++;
				
				if ($day_count > 7)         //Change row
				{
					echo "<tr> </tr>";
					$day_count = 1;         
				}
			}

			while( $day_count > 1  &&  $day_count <= 7 )    
			{   
					echo "<td> </td>";
					$day_count++;
			}

			if ($day_count == 1)
			{
				echo "<td> </td>";
				echo "<tr> </tr>";
			}
		?>

	</table>
	</div>

	<center>
		<form name="nav_form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
			<div id="inps">
				<input type="Submit" name="prev" value="<- Previous" class="buttons" />
				<input type="Submit" name="next" value="Next ->" class="buttons" />
			</div>

			<input type="hidden" name="month" value="<?php echo $month ?>"/>
				<input type="hidden" name="year" value="<?php echo $year ?>"/>
			</form>
	</center>


	</body>
</html>

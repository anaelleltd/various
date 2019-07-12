<!DOCTYPE html>
			 <html lang="en">
			 <head>
			 <meta charset="utf-8">
			 <title>Times tables to 12</title>
			 </head>
			 <body> 
			 	<h1>Multiplication tables with PHP</h1>
			 	<h2>Multiplication table using a while loop. </h2>
			 	<table width="100%" border="1" align="center">
			 		<caption fontsize="14">Multiplication tables of 1 to 12 with a "while loop".</caption>
			 		<tr style="background-color:lightblue">
			 			<th>Timetable of 1</th>
			 			<th>Timetable of 2</th>
			 			<th>Timetable of 3</th>
			 			<th>Timetable of 4</th>
			 			<th>Timetable of 5</th>
			 			<th>Timetable of 6</th>
			 			<th>Timetable of 7</th>
			 			<th>Timetable of 8</th>
			 			<th>Timetable of 9</th>
			 			<th>Timetable of 10</th>
			 			<th>Timetable of 11</th>
			 			<th>Timetable of 12</th>
			 		</tr>
			 	<?php 
			 	#Declare a function with 2 arguments
					function times ($x, $y) {
						#Inside the function, multiply the 2 numbers 
						$tables = $x * $y;
						#and return the result
						return $tables;
					}

					#In the main PHP script, create a variable for the first number
						$x = 1;
						$tables = "";
						#While the first number is less than 13, repeat the following loop
						while ($x < 13) {
							#Create another variable for the second number
							$y = 1;
							#Set the background for each alternating row
							$bg_color = $x % 2 === 0 ? "lightgrey" : "lightpink";
							#Open a table row
							echo "<tr style='background-color: ". $bg_color .";'>";
							#While the second number is less than 13, repeat the following loop
							while ($y < 13) {
								#Call the function
								$tables = times ($x, $y);
								#Test values for square numbers and print special background
								if ($tables ? $x%$y == 0 && $x==$y: $x%$y !== 0) {
									$bg_color = "yellow";
									echo "<td style='background-color: ". $bg_color .";'><b>$x X $y is:$tables</b></td>";
								}else {
									#Return remaining numbers
									echo "<td> $x X $y is: $tables </td>";}
								#Increment the value of the second variable
							 	$y++; 
							}
							#Increment the value of the first variable
							$x++;
							#Close the table row
							echo "</tr>";
							}	
				?>
			</table>

				<h2>Multiplication table using a for loop. </h2>
				<table width="100%" border="1" align="center">
			 		<caption>Multiplication tables of 1 to 12 with a "for loop".</caption>
			 		<tr style="background-color:lightblue">
			 			<th>Timetable of 1</th>
			 			<th>Timetable of 2</th>
			 			<th>Timetable of 3</th>
			 			<th>Timetable of 4</th>
			 			<th>Timetable of 5</th>
			 			<th>Timetable of 6</th>
			 			<th>Timetable of 7</th>
			 			<th>Timetable of 8</th>
			 			<th>Timetable of 9</th>
			 			<th>Timetable of 10</th>
			 			<th>Timetable of 11</th>
			 			<th>Timetable of 12</th>
			 		</tr>
				<?php
				$result = "";
			 		#For each value of i below 13, repeat the following loop
					for ($i = 1; $i < 13 ; $i++) {
						#Set the bakcground for each alternating row
						$bg_color = $i % 2 === 0 ? "lightgrey" : "lightpink";
						#Open a table row
						echo "<tr style='background-color: ". $bg_color .";'>";
						#For each value of n up to 13, repeat the operation and print the results
						for ($n = 1; $n < 13 ; $n++) {
							$result = $i * $n;
							#Test results for square numbers and print special background
							if ($result ? $i%$n == 0 && $i==$n: $i%$n !== 0) {
							$bg_color = "yellow";
							echo "<td style='background-color: ". $bg_color .";'><b>$result</b></td>";
						 }else {
						 	#Return remaining numbers
							echo "<td> $result </td>";}
						}
						#Close the table row
						echo "</tr>";
					}	  
				?>
			</table>
		  </body>
			  </html>

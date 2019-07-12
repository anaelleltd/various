<!DOCTYPE html>
			 <html lang="en">
			 <head>
			 <meta charset="utf-8">
			 <title>Days of the week in French</title>
			 </head>
			 <body> 
			 	<h1> Days of the week in English and French: </h1>
			 	<br/>
			 	<?php 
				# save variables in array
				$days = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');

				#print each value of the English array
				echo "<h2>The days of the week in English are: $days[0], $days[1], $days[2], $days[3], $days[4] , $days[5], $days[6].</h2>";

				$days = array('dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi');

					# print each value of the French array
					echo "<h3> The days of the week in French are: $days[0], $days[1], $days[2], $days[3], $days[4] , $days[5], $days[6].</h3>";
					?>

				<br/>
				<h1> Summary of vocabulary:</h1>
				<br/>
					<?php

				$days = array('Sunday' => 'dimanche', 'Monday' => 'lundi', 'Tuesday' => 'mardi', 'Wednesday' => 'mercredi', 'Thursday' => 'jeudi', 'Friday' => 'vendredi', 'Saturday' => 'samedi');

				foreach ($days as $EnglishDays => $FrenchDays) {
					# print each keys and values in a table
					while ( $element = each($days) ) {
						echo "<dt>$element[0]</dt>";
						echo "<dd>$element[1]</dd>";
					}
				}
				?> 

		  </body>
			  </html>

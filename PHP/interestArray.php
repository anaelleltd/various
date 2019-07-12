<!DOCTYPE html>
			 <html lang="en">
			 <head>
			 <meta charset="utf-8">
			 <title>Interest array</title>
			 </head>
			 <body> 
			 	<?php 
			 	$name = "Anaelle";
				$today = getdate();
				// your name 
				echo "<p> Hello my name is : $name <br></p>";
				// todays date
				echo "<p> The date is : $today[weekday] $today[mday] $today[month]  $today[year].</p>";
				// save variables in array
				$arrRates = array('InterestRate1' => 0.0725, 'InterestRate2' => 0.0750, 'InterestRate3' => 0.0775, 'InterestRate4' => 0.0800, 'InterestRate5' => 0.0825, 'InterestRate6' => 0.0850, 'InterestRate7' => 0.0875);

				foreach ($arrRates as $interest => $amount) {
					# print each value of the array
					echo "<p> The amount for $interest is $amount.<br></p>";
				}

				?> 

		  </body>
			  </html>

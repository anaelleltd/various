<!DOCTYPE html>
			 <html lang="en">
			 <head>
			 <meta charset="utf-8">
			 <title>Extra exercise: Factorials</title>
			 </head>
			 <body> 
			 <?php
			 //Declare a variable n.
			 	$n = 0;

			 //Create the factorial function taking the variable $n as argument
			 	function factorials ($n){
			 		if ($n < 2) {
			 			return 1;
			 		} else { 
			 			return ($n * factorials($n-1)); 
			 		} 
			 	}


			 // Create the loop for each value of n under 10
			 	while ($n < 11){
			 		$factorials = factorials ($n);
			 		//Print the results
			 		echo "<h2> The factorial of $n is: </h2>";
			 		echo "<p>$factorials</p>";
			 		$n++;
			 	}

			 	
			 ?>

		  </body>
			  </html>

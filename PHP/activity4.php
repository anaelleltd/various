<!DOCTYPE html>
			 <html lang="en">
			 <head>
			 <meta charset="utf-8">
			 <title>Activity 4</title>
			 </head>
			 <body> 
			 <?php 
			 # Declare a function with 2 arguments
					function sum ($x, $y) {
						#Inside the function, add the 2 numbers 
						$z = $x + $y;
						#and return the result
						return $z;
					}

					#In the man PHP script, create 2 variables and assign values 3 and 4
						$x = 3;
						$y = 4;

						#While the first variable is less than 6, repeat the following loop
						while ($x < 6) {
							# Call the function using the 2 variables as arguments
							$z = sum ($x, $y);
								#Capture the value returned from the function and print the result
							echo "<p> Total is: $z. </p>";
								#Increment the value of the first variable
								$x++;
							
						}
				?>
		  </body>
			  </html>

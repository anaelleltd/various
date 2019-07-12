<!DOCTYPE html>
			 <html lang="en">
			 <head>
			 <meta charset="utf-8">
			 <title>Activity 3</title>
			 </head>
			 <body> 
			 <?php 
					$printercartridges = 33.00;
					$purchase = $printercartridges * 3;
					function tenpercent ($purchase) {
						return $purchase * 0.1;
					}
					$invoice = $purchase - tenpercent($purchase);

					echo "<p> For your order, you need to pay $$invoice. </p>";

				?>
		  </body>
			  </html>

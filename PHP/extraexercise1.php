<!DOCTYPE html>
			 <html lang="en">
			 <head>
			 <meta charset="utf-8">
			 <title>Extra exercise: Definition list</title>
			 </head>
			 <body> 
			 <?php
			 /*Declare an array variable to store the definitions.*/
			 	$definitions = array('Maman' => "Mum", 'Papa' => "Dad", 'Bambins' => "Kids", 'Tonton' => "Uncle", 'Tata' => "Aunty");
			 	//Open the definition list
			 	echo "<h2>Glossary</h2>";

			 	/*Create a function that sets the keys as terms and values as definitions*/
			 	foreach ($definitions as $key => $value) {
			 		echo '<dl>';
			 		echo "<dt>Term: $key</dt>";
			 		echo "<dd>Definition: $value</dd>";

			 	//Close the definition list
			 	echo '</dl>';
			 		
			 }

			 ?>

		  </body>
			  </html>

<!DOCTYPE html>
			 <html lang="en">
			 <head>
			 <meta charset="utf-8">
			 <title>Activity 5: Shopping cart enhancement</title>
			 </head>
			 <body> 
			 <?php
			 class Cart {
			 	/*Declare an array variable to store the items that the customer wants to purchase.*/
			 	var $shoppinglist; 

			 	function Cart() {
			 		/*this is a constructor to initialize the cart so all items start with an initial 
			 		value of zero.  */
			 		$numproducts = 3;  
			 		//set this variable to the number of products possible
			 		$this->shoppinglist = array();
			 		$this->shoppinglist = array_pad($this->shoppinglist, $numproducts, 0);
			 		//check array contents
			 		echo '<h2>Initial Cart:</h2><pre>';
			 		print_r($this->shoppinglist);
			 		echo '</pre>';
			 		
			 	} 
			 	//include functions that relate to this type or class of object
			 	function additems ($productid, $numitems) {
			 		//insert code to add $numitems of $productid to cart
			 		$this->shoppinglist[$productid] += $numitems;
			 	}

			 	function removeitems ($productid, $numitems) {
			 		//insert code to remove $numitems of $productid from list
			 		if ($this->shoppinglist[$productid] > $numitems)
			 		{$this->shoppinglist[$productid] -= $numitems;}
			 	}
			 	}

			 	$cart = new Cart;
			 	/*Add the product (food hamper or product id 0) to the list.
			 	Specify the number (2) of food hampers and (3) of glass sets to be added*/
			 	$cart->additems("0", 2);
			 	$cart->additems("2", 3);
			 	/*Print the cart with the added items*/
			 	echo '<h2>Cart with added items:</h2><pre>';
			 	print_r ($cart);
			 	echo '</pre>';

			 	/*Remove the product (food hamper or product id 0) from the list.
			 	Specify the number (1) of food hampers to be removed*/
			 	$cart->removeitems("0", 1);
			 	/*Print the cart with the removed items*/
			 	echo '<h2>Cart with removed items:</h2><pre>';
			 	print_r ($cart);
			 	echo '</pre>';


			 ?>

		  </body>
			  </html>

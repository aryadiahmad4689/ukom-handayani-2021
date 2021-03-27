<?php

use BelajarNative\Connect;

session_start();

require 'item.php';
require 'BarangController.php';
require 'Connect.php';


$barang = new \BelajarNative\BarangController(new \BelajarNative\Connect());
$conect = new Connect();

?>

<!DOCTYPE html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<?php 
// Start the session

if(isset($_GET['id']) && !isset($_POST['update']))  { 
	$sql = "SELECT * FROM barang WHERE id=".$_GET['id'];

	$result = mysqli_query($conect->conn(), $sql);
	$product = mysqli_fetch_object($result); 

	$item = new Item();
	$item->id = $product->id;
	$item->name = $product->nama_barang;
	$item->price = $product->harga;
  	$iteminstock = $product->stock;
	$item->quantity = 1;
	// Check product is existing in cart
	$index = -1;
  
	$cart = unserialize(serialize($_SESSION['cart'])); // set $cart as an array, unserialize() converts a string into array
	for($i=0; $i<count($cart);$i++)
		if ($cart[$i]->id == $_GET['id']){
			$index = $i;
			break;
		}
		if($index == -1) 
			$_SESSION['cart'][] = $item; // $_SESSION['cart']: set $cart as session variable
		else {
			
			if (($cart[$index]->quantity) < $iteminstock)
				 $cart[$index]->quantity ++;
			     $_SESSION['cart'] = $cart;
		}
}
// Delete product in cart
if(isset($_GET['index']) && !isset($_POST['update'])) {
	$cart = unserialize(serialize($_SESSION['cart']));
	unset($cart[$_GET['index']]);
	$cart = array_values($cart);
	$_SESSION['cart'] = $cart;
}
// Update quantity in cart
if(isset($_POST['update'])) {
  $arrQuantity = $_POST['quantity'];
  $cart = unserialize(serialize($_SESSION['cart']));
  for($i=0; $i<count($cart);$i++) {
     $cart[$i]->quantity = $arrQuantity[$i];
  }
  $_SESSION['cart'] = $cart;
}
?>
<div class="container">
<h2> Items in your cart: </h2> 
<form method="POST">
<table id="t01" class="table">
<tr>
	<th>Option</th>
	<th>Id</th>
	<th>Name</th>
	<th>Price</th>
	<th>Quantity</th>
	 
	<th>Total</th>
</tr>
<?php 
     $cart = unserialize(serialize($_SESSION['cart']));
 	 $s = 0;
 	 $index = 0;
 	for($i=0; $i<count($cart); $i++){
 		$s += $cart[$i]->price * $cart[$i]->quantity;
 ?>	
   <tr>
    	<td><a href="cart.php?index=<?php echo $index; ?>" onclick="return confirm('Are you sure?')" >Delete</a> </td>
   		<td> <?php echo $cart[$i]->id; ?> </td>
   		<td> <?php echo $cart[$i]->name; ?> </td>
   		<td>Rp. <?php echo $cart[$i]->price; ?> </td>
        <td> <input type="number" min="1" value="<?php echo $cart[$i]->quantity; ?>" name="quantity[]"> </td>  
        <td> Rp.<?php echo $cart[$i]->price * $cart[$i]->quantity; ?> </td> 
   </tr>
 	<?php 
	 	$index++;
 	} ?>
 	<tr>
 		<td colspan="5" style="text-align:right; font-weight:bold">Sum 
         <!-- <input id="saveimg" type="image" src="images/save.png" name="update" alt="Save Button"> -->
         <button class="btn btn-success">Save</button>
         <input type="hidden" name="update">
 		</td>
 		<td> Rp.<?php echo $s; ?> </td>
 	</tr>
</table>
</form>
<br>
<a class="btn btn-success btn-sm" href="index.php">Continue Shopping</a> | <a class="btn btn-primary btn-sm" href="checkout.php">Checkout</a>
<?php 
if(isset($_GET["id"]) || isset($_GET["index"])){
 header('Location: cart.php');
} 
?>
</div>
</body>
 </html>

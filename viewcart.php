<?php
   session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" type="text/css">
<title>Add to cart</title>
</head>
<body>

<div class="container">
<h1>Shopping Site</h1>
<center>
<a href="index.php" class="btn btn-warning col-lg-2">Home</a>
<a href="viewcart.php" class="btn btn-warning col-lg-2">Cart</a>
</center>
<br>
<br>
<h2 align="center">Your Cart Products</h2>
<table class="table" border="1px solid black">
  <thead>
    <tr>
    <th>Sno</th>
    <th>Name</th>
    <th>Price</th>
    <th>Quantity</th>	
	<th>Total Price</th>
    <th>Update</th>
    <th>Delete</th>	
    </tr>
   </thead>
   <tbody>
   <?php
   $bill = 0;
   $sno = 1;
    foreach($_SESSION as $products){
		$p = 0;
		$q = 0;
		echo "<tr>";
		  echo "<td>".($sno++)."</td>";
		  echo "<form action='editcart.php' method='post'>";
		  foreach($products as $key => $value){
			  if($key == 2){
				  echo "<td><input type='text' name='name$key' class='form-control' value='".$value."'</td>";
				  $q = $value;
		  }else if($key == 1){
			  echo "<input type='hidden' name='name$key' value='".$value."'>";
			  echo "<td>".$value."</td>";
			  $p = $value;
		  }else if($key==0){
			  echo"<input type='hidden' name='name$key' value='".$value."'>";
			  echo "<td>".$value."</td>";
		  }
		}	
		
		$bill =($q * $p);
		echo "<td>".($bill)."</td>";
		echo "<td><input type='submit' name='event' value='Update' class='btn btn-warning'></td>";
		echo "<td><input type='submit' name='event' value='Delete' class='btn btn-danger'></td>";
        echo "</form>";		
		 echo "</tr>";
	}
   
   ?>
   </tbody>
</table>
</body>
</html>

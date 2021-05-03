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

<table class="table" border="1px solid black">

 <thead>
   <tr>
    <th>Name</th>
    <th>Image</th>
    <th>Price</th>
   </tr>
 </thead>
<form action="insertcart.php" method="post">


   <tbody>
    <tr>
     <td>OPPO1</td> 
	 <td><img src="op3.png" alt="" width="20%"></td>
	 <td>12000</td>
    </tr>
	
	<tr>
	<td>Quantity</td>
	<td><input type="text" name="qty" class="form-control col-lg-6"></td>
	<input type="hidden" name="name" value="oppo">
	<input type="hidden" name="price" value="12000">
	<td><input type="submit" value="Add Cart" name="addCart" class="btn btn-primary"></td>
	</tr>
	
	
  </tbody>

  </form>
  
  </table>
  
  
</div>
</body>
</html>
<?php
 session_start();

   $name = $_POST['name0'];
   $price = $_POST['name1'];
   $quantity = $_POST['name2'];
   $event = $_POST['event'];

   $products = array($name,$price,$quantity);
 
  if($event == "Update") {
	  $_SESSION[$name] = $products;
  }
  else if($event == "Delete"){
	  unset($_SESSION[$name]);
	  
  }
  
  header('location:viewcart.php');

?>
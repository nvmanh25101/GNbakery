<?php 
require './database/connect.php';
session_start();
$id = $_GET['id'];
$sql = "select * from products
  where products.id = '$id'";
$result = mysqli_query($connect, $sql);
$each = mysqli_fetch_array($result);

$action =(isset($_GET['action'])) ? $_GET['action'] : "add";

$quantity = (isset($_GET['quantity'])) ? $_GET['quantity'] : 1;
//session_destroy();
//die();


$item = [
  'id' =>$each['id'],
  'name' => $each['name'],
  'image' => $each['image'],
  'size' => $each['size'],
  'price' => $each['price'],
  'quantity' => $quantity

];
//kiem tra
if($action == 'add'){

if(isset($_SESSION['cart'][$id])){
  $_SESSION['cart'][$id]['quantity'] +=1;
}
else {
  $_SESSION['cart'][$id] = $item;
}
}
if($action == 'delete'){
  var_dump("ok ");
  unset($_SESSION['cart'][$id]);
}


header('location:cart.php');
echo "<pre>";
print_r($_SESSION['cart']);
?>
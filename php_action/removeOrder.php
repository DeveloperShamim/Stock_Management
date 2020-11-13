<?php 	

require_once 'core.php';


$valid['success'] = array('success' => false, 'messages' => array());

$orderId = $_POST['orderId'];

if($orderId) { 

 
 $sql = "DELETE FROM orders WHERE order_id=$orderId";

 $orderItem = "DELETE FROM order_item WHERE  order_id = $orderId";

 if($connect->query($sql) === TRUE && $connect->query($orderItem) === TRUE) {
 	$valid['success'] = true;
	$valid['messages'] = "Successfully Removed";		
 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "Error while remove the order";
 }
 
 $connect->close();

 echo json_encode($valid);
 
} // /if $_POST
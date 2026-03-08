<?php
session_start();
require '../database/dbconfig.php';
$client_id=$_GET['client_id'];
$stock_id=$_GET['stock_id'];
$quantity=$_GET['quantity'];
$location_id=$_GET['location_id'];
$merchant_id=$_GET['merchant_id'];
$order_status="1";
$initial_quantity=$_SESSION['initial_quantity'];
$remaining_quantity=$initial_quantity-$quantity;
$price=$_SESSION['pr'];

// time
$hoursseen="0";
$dateseen = date("d-m-Y  H:i:s", strtotime(sprintf("+%d hours", $hoursseen))); //USER SEEN TIME
$seentimestamp= strtotime($dateseen); //USER SEEN TIMESTAMP
$dateseen = new DateTime("@".$seentimestamp);  //SNAP TO UTC
$utctimeseen=$dateseen->format('d-m-Y  H:i:s'); // UTC TIME
$utctimestampseen=strtotime($utctimeseen); // UTC TIMESTAMP
$seen=$utctimestampseen;
$date_posted=$seen;
// time

$insert=mysqli_query($con,"INSERT INTO tbl_orders(client_id,merchant_id,stock_id,quantity,total_price,location_id,order_status,date_posted)
     VALUES('$client_id', '$merchant_id', '$stock_id', '$quantity', '$price', '$location_id', '$order_status', '$date_posted')
	");
if ($insert==true) {

// REDUCE INVENTORY
$reduce=mysqli_query($con,"UPDATE tbl_inventory
	SET quantity='$remaining_quantity'
	WHERE id='$stock_id'");
if ($reduce==true) {
?>
<script type="text/javascript">
window.top.location.href='confirmed.php';
</script>
<?php
}
// REDUCE INVENTORY
}

?>
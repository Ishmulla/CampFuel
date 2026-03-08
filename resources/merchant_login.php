<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];


require '../database/dbconfig.php';

$fetch=mysqli_query($con,"SELECT * FROM tbl_merchants WHERE email='$email'");
if (mysqli_num_rows($fetch)>0) {
while ($row=$fetch->fetch_assoc()) {
$hash=$row['password'];
if (password_verify($password,$hash)) {
// declare sessions
$_SESSION['merchant_first_name']=$row['first_name'];
$_SESSION['merchant_id']=$row['id'];
$_SESSION['merchant_email']=$row['email'];
$_SESSION['merchant_phone']=$row['phone'];
if ($_SESSION['merchant_phone']==true) {
?>
<script type="text/javascript">
	window.top.location.href='../merchant/dashboard.php';
</script>
<?php
}
}else{
?>
<script type="text/javascript">
	window.top.location.href='../index.php?info=wrong&t=d';
</script>
<?php	
}
}
}else{
?>
<script type="text/javascript">
	window.top.location.href='../index.php?info=merchant_not_exist&t=d';
</script>
<?php
}
?>
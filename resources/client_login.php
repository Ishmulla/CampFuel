<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];


require '../database/dbconfig.php';

$fetch=mysqli_query($con,"SELECT * FROM tbl_clients WHERE email='$email'");
if (mysqli_num_rows($fetch)>0) {
while ($row=$fetch->fetch_assoc()) {
$hash=$row['password'];
if (password_verify($password,$hash)) {
// declare sessions
$_SESSION['first_name']=$row['first_name'];
$_SESSION['user_id']=$row['id'];
$_SESSION['email']=$row['email'];
$_SESSION['phone']=$row['phone'];
if ($_SESSION['phone']==true) {
?>
<script type="text/javascript">
	window.top.location.href='dashboard.php';
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
	window.top.location.href='../index.php?info=user_not_exist&t=d';
</script>
<?php
}
?>
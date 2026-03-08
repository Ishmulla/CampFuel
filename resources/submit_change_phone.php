<?php
session_start();
$user_id=$_SESSION["user_id"];
$phone=$_POST['phone_number'];

// connect database
require'../database/dbconfig.php';

$sqlchange=mysqli_query($con,"UPDATE tbl_clients
	SET phone='$phone'
	WHERE id='$user_id'");

if ($sqlchange==true) {
?>
<script type="text/javascript">
	window.top.location.href='profile.php?info=phone_changed&t=s';
</script>
<?php
}

?>
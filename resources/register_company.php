<?php
session_start();
$owner_email=$_SESSION['owner_email'];
$name=$_SESSION['name'];
$description=$_SESSION['description'];
$location=$_SESSION['location'];


// fetch merchant id
// connect db
require '../database/dbconfig.php';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$merch=mysqli_query($con,"SELECT * FROM tbl_merchants WHERE email='$owner_email'");
while ($row=$merch->fetch_assoc()) {
$owner=$row['id'];
}


$insert=mysqli_query($con,"INSERT INTO tbl_companies(name,merchant_id,description,location)
	VALUES('$name', '$owner', '$description', '$location')");
if ($insert==true) {
?>
<script type="text/javascript">
	window.top.location.href='../index.php?info=merchant_registration_successful&t=s';
</script>
<?php
}


?>
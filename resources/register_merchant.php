<?php 
session_start();
$_SESSION['owner_email']=$_POST['email'];
$_SESSION['name']=$_POST['name'];
$_SESSION['description']=$_POST['description'];
$_SESSION['location']=$_POST['location'];
// connect database
require '../database/dbconfig.php';
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$password=password_hash($password, PASSWORD_DEFAULT);

// DATE
$hoursseen="0";
$dateseen = date("d-m-Y  H:i:s", strtotime(sprintf("+%d hours", $hoursseen))); //USER SEEN TIME
$seentimestamp= strtotime($dateseen); //USER SEEN TIMESTAMP
$dateseen = new DateTime("@".$seentimestamp);  //SNAP TO UTC
$utctimeseen=$dateseen->format('d-m-Y  H:i:s'); // UTC TIME
$utctimestampseen=strtotime($utctimeseen); // UTC TIMESTAMP
$seen=$utctimestampseen;
// DATE
$date_registered=$seen;

// check registrationn
$sql3="SELECT * FROM tbl_merchants WHERE email='$email' OR phone='$phone'";
$result3=mysqli_query($con,$sql3);
$count3=mysqli_num_rows($result3);
if ($count3>0) {
?>
<script type="text/javascript">
	window.top.location.href='register.php?info=user_exists&t=w';
</script>
<?php
}else{
// insert into db
$insert=mysqli_query($con,"INSERT INTO tbl_merchants (first_name,last_name,email,phone,password,date_registered)
	VALUES('$first_name','$last_name','$email','$phone','$password','$date_registered')");

if ($insert==true) {
?>
<script type="text/javascript">
	window.location.href='register_company.php';
</script>
<?php
}
}
 ?>
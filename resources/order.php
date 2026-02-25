<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../images/favicon.ico" />
	<title>Order :: CampFuel</title>
	<link rel="stylesheet" type="text/css" href="../css/bulma.css">
	<link rel="stylesheet" type="text/css" href="../css/custom.css">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
     <script src="../js/jquery-3.3.1.min.js"></script>
     <script src="../js/custom.js"></script>
     <script src="../js/bulma.js"></script>
</head>
<body class="is-light">

<!-- HEADER -->
<?php
require 'header_dashboard.php';
?>
<!-- HEADER -->

<!-- ASIDE -->
<div class="custom-aside">
<?php
require 'dashboard_menu.php';
?>
</div>
<!-- ASIDE -->

<!-- MAIN -->
<div class="custom-main">
<!-- MOBILE -->
<?php
require 'mobile_dashboard_menu.php';
?>
<!-- MOBILE -->



<div class="steps">

<?php
require '../database/dbconfig.php';
$check=mysqli_query($con,"SELECT * FROM locations WHERE user_id = '$user_id'");
if (mysqli_num_rows($check)>0) {
// location set
while ($rowcheck=$check->fetch_assoc()) {
$location_id=$rowcheck['id'];
$_SESSION['location_id']=$location_id;
$description=$rowcheck['description'];
?>
<article style="" class="message is-primary">
<div class="message-body">
<h6 class="title is-6 has-text-left">Your location is set to: <b><?php echo $description; ?></b> <a href="location.php">Change</a></h6>
</div>
</article>
<form method="get" action="select_merchant.php">
<div  class="columns">

<div class="column">
<div class="box">
<h4 class="title-is-4 is-bold has-text-primary"><b>CYLINDER SIZE</b></h4> 

<div class="field">
  <div class="control">
    <div class="select is-primary is-fullwidth">
      <select name="cylinder_size" required>
      <?php
      $size=mysqli_query($con,"SELECT * FROM tbl_inventory WHERE id>0 GROUP BY cylinder_size");
      if (mysqli_num_rows($size)>0) {
       ?>
       <option style="display:none" selected="selected" value="">Select size (Kgs)</option>
       <?php
       while ($rowsize=$size->fetch_assoc()) {
       ?>
       <option value="<?php echo $rowsize['cylinder_size']; ?>"><?php echo $rowsize['cylinder_size']; ?></option>
       <?php
       }
      }else{
      ?>
      <option style="display:none" selected="selected" value="">Nothing to display</option>
      <?php
      }
      ?>
      </select>
    </div>
  </div>
</div>

</div>  
</div>

<div class="column">
<div class="box">
<h4 class="title-is-4 is-bold has-text-primary"><b>PROPANE BRAND</b></h4> 

<div class="field">
  <div class="control">
    <div class="select is-primary is-fullwidth">
      <select name="gas_brand" required>
      <?php
      $brand=mysqli_query($con,"SELECT * FROM tbl_inventory WHERE id>0 GROUP BY gas_brand ORDER BY gas_brand asc");
      if (mysqli_num_rows($brand)>0) {
       ?>
       <option style="display:none" selected="selected" value="">Select brand</option>
       <?php
       while ($rowbrand=$brand->fetch_assoc()) {
       ?>
       <option value="<?php echo $rowbrand['gas_brand']; ?>"><?php echo $rowbrand['gas_brand']; ?></option>
       <?php
       }
      }else{
      ?>
      <option style="display:none" selected="selected" value="">Nothing to display</option>
      <?php
      }
      ?>
      </select>
    </div>
  </div>
</div>

</div>  
</div>

<div class="column">
<div class="box">
<h4 class="title-is-4 is-bold has-text-primary"><b>QUANTITY / NUMBER</b></h4> 

<div class="field">
  <div class="control">
    <div class="select is-primary is-fullwidth">
      <select name="quantity" required>
      <option selected="selected" style="display:none;" value="">Quantity</option>
     <?php
     for ($i=1; $i <=10 ; $i++) { 
      ?>
      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
      <?php
     }
     ?>
      </select>
    </div>
  </div>
</div>

</div>  
</div>





</div>  
<button class="button is-primary button-full is-pulled-left">NEXT</button><br><br>
</form> 
<?php
}
// location set
}else{
// location not set
?>
<article style="" class="message is-primary">
<div class="message-body">
<h6 class="title is-6 has-text-left"> <i class="fa fa-exclamation-triangle"></i> Your location is not set. Please <a href="location.php">Set location</a> to proceed.</h6>
</div>
</article>
<?php
// location not set
}
?>

</div>


</div>
<!-- MAIN -->

<!-- FOOTER -->
<?php
// require 'footer_resources.php';
?>
<!-- FOOTER -->

</body>
</html>
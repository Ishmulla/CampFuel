<?php
session_start();
?>
<div style="visibility:hidden">
<?php
if(!$_SESSION["user_id"]){
  ?>
  <script type="text/javascript">
  window.location.href='../index.php?info=lfirst&t=w';
  </script>
  <?php
}else{

$user_id=$_SESSION['user_id'];
$first_name=$_SESSION['first_name'];
$email=$_SESSION['email'];
$phone=$_SESSION['phone'];


}  

?>
</div>
<nav class="navbar has-shadow is-fixed header-dashboard" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="../index.php">
      <img src="../images/cats.png" width="112" height="28">  
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">

    </div>

    <div class="navbar-end">

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-item">
              <figure  class="image is-32x32" style="margin-right:.5em;">
                <img style="border-radius:50%;" src="../images/avatars/avatar.jpg">
              </figure>
       <span style="text-transform:uppercase;"><?php echo $first_name; ?></span> 
        </a>

        <div class="navbar-dropdown">
          <a href="profile.php" class="navbar-item">
           <i class="fa fa-user"></i>&nbsp;Profile
          </a>
          <a href="logout.php" class="navbar-item">
           <i class="fa fa-power-off"></i>&nbsp;Logout
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
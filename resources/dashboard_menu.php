<!-- PHP -->
<?php
$file= basename($_SERVER['PHP_SELF'],'.php');
$link=$file."link";
?>
<!-- PHP -->


<aside class="menu">
<!--   <p class="menu-label">
    Menu
  </p> -->
  <ul class="menu-list">
    <li><a class="dashboardlink" href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
  </ul>
  <p class="menu-label">
    MY Account
  </p>
  <ul class="menu-list">
      <a class="profilelink" href="profile.php"><i class="fa fa-user"></i> Profile</a>
      <ul>
        <li><a class="locationlink" href="location.php" ><i class="fa fa-map-marker"></i> Set location</a></li> 
        <li><a class="orderlink select_merchantlink cartlink" href="order.php" ><i class="fa fa-shopping-cart"></i> Make order</a></li>
        <li><a class="historylink" href="history.php" ><i class="fa fa-history"></i> History</a></li>
        <li><a class="statisticslink" href="statistics.php" ><i class="fa fa-pie-chart"></i> Statistics</a></li>
      </ul>
    </li>
  </ul>
  <p class="menu-label">
    General
  </p>
  <ul class="menu-list">

<!--     <li><a class="depositlink" href="deposit.php" ><i class="fa fa-money"></i> Deposit</a></li> -->
<!--     <li><a class="supportlink" href="support.php" ><i class="fa fa-question-circle"></i> Support</a></li> -->
    <li><a href="logout.php" ><i class="fa fa-power-off"></i> Logout</a></li>
  </ul>
</aside>  

<!-- JS -->
<script type="text/javascript">
var e = document.getElementsByClassName("<?php echo $link; ?>");
$(e).attr('class', 'is-active');
</script>
<!-- JS -->
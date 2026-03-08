<?php
session_start();
if (session_destroy())
{
	?>
	<script type="text/javascript">
window.top.location='../index.php';
	</script>
	<?php
}
?>
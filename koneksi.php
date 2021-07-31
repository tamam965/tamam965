<?php
	ob_start();
	($GLOBALS["___mysqli_ston"] = mysqli_connect("localhost",  "root",  "")) or die (mysqli_error($GLOBALS["___mysqli_ston"]));
	mysqli_select_db($GLOBALS["___mysqli_ston"], "db_sim") or die (mysqli_error($GLOBALS["___mysqli_ston"]));
?>
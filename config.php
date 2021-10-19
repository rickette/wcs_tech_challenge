<?php
$connection = mysqli_connect("emoveo.design:3306","admin","#t!9Kn28Ja*WTY");
$db = mysqli_select_db($connection, 'wcs_tech_challenge');

$query = "SELECT * FROM argonautes";
$query_run = mysqli_query($connection, $query);
?>
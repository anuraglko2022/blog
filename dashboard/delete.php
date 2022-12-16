<?php
$c = $_GET['c'];
// delete function:-to delete file in php
unlink($c);
header("location:managegallery.php");
?>
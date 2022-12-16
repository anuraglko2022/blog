<?php
$id = $_POST['id'];
$v=mysqli_connect('localhost','root','','blog');
mysqli_query($v,"Delete from users where id='$id'");
?>
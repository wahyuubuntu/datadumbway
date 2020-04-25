<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($db,"DELETE FROM role WHERE id='$id'");
header("Location:data_role.php");
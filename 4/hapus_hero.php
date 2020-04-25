<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($db,"DELETE FROM hero WHERE id='$id'");
header("Location:index.php");
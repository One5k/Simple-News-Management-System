<?php
include("header.php");
include("config.php");
$sqldel="delete from news2 where nid=".$_GET["id"];
mysqli_query($conn,$sqldel);
if(mysqli_query($conn,$sqldel)){
echo "<div class='alert alert-success  text-center'> تم الحذف </div> ";
		header("refresh:3;url =show.php");
}

?>
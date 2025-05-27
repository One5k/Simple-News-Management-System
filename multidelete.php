<?php
include("header.php");
include("config.php");
//1 2 4
//تقوم بفصل المصفوفه وعمل تنصيص مابيهم
$imp=implode(",",$_POST['op']);
$sql="delete from news2 where nid in(".$imp.")";
//print_r($_POST['op']);
if(mysqli_query($conn,$sql)){
	
	echo "<div class='alert alert-success  text-center'> تم الحذف </div> ";
		header("refresh:3;url =show.php");

}
?>
</body>
</html>
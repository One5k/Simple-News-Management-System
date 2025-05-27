<?php
//تعرض لك مره واحعه ولاتتكرر
require_once("header.php");
require_once ("config.php");


//$nid=$_POST['nid'];
    $Ntitle=$_POST['Ntitle'];
	$Ndate=$_POST['Ndate'];
	$Ntype=$_POST['Ntype'];
	$Ndetail=$_POST['Ndetail'];

$sqlup="UPDATE `news2` SET 
`ntitle`='".$Ntitle."',
`ntype`='".$Ntype."',
`ndate`='".$Ndate."',
`ndetail`='".$Ndetail."' where nid=".$_POST['nid']."
 ";

if (mysqli_query($conn,$sqlup)){
	echo "<div class='alert alert-success  text-center'> تم التعديل بنجاح </div>";
		header("refresh:3;url =show.php");
	
		
	}
else{
	echo "div class ='alert alert-danger text-center'>لم يتم تعديل البيانات</div>".
		mysqli_error($conn);
	
}
?>
<body>
</body>
</html>
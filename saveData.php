
<?php
include("header.php");
	/*من اجل ان تنفذ استعلام او امر على قاعغدة البيانات نستقدم  Exqitnonqure(لاترد ننيجه اوامر تغير على الدات بيس ) -reder)(تقرا من اكثر من سطر ) exaitiscolor (تقرا قيمه واحد ودوال التجحميع)
	تقابله في my sql  
	*/
//Ntype Ntitle	 Ndate Ndetail
	/*
	ثلاث مصفوفات لارسال القيم 
		من اجل ارسال البيانات لابد من  ان تتاكد انه ارسلت عن طريق البوست او الجيت 
	 هنالك ثلاث طرق من اجل ارسال البيانات وهي عن طريق المصفوفه ولابد ان تكتبها كبتل :
	$_POST
	$_GET 
	$_REQUEST في هذا تستقبل من نوع بوست وجيت 
	*/
	//نقوم بتعريف متغير من اجل ان تمررله قيمة الحقل في المصفوفه 
	 if (isset($_POST['Ntitle'])){
    $Ntitle=$_POST['Ntitle'];
	$Ndate=$_POST['Ndate'];
	$Ntype=$_POST['Ntype'];
	$Ndetail=$_POST['Ndetail'];
	
	/*الان نريد اذافة البيانات الى قاعدة البيانات الخخطوة:
	1-نضمن المكتبه 
	2-نكتب الامر الذي يتخاطب مع الداتا بيس  
	3-ننفذ الامر على الدات بيس والدالة التي تنفذ الامر على قاعدة البيانات (mysqli_query تعمل عمل الدوال الثلاث )
	
	
	*/
	include("config.php");//عندما تكون القيمه نصيه)('".اسما الحقل."') اذا كانت رقميه تعمل )("")فقط
	$sqlinse="INSERT INTO `news2`(`ntitle`, `ntype`, `ndate`, `ndetail`) VALUES ('".$Ntitle."','".$Ntype."','".$Ndate."','".$Ndetail."')";
	
	if(mysqli_query($conn,$sqlinse))
	{
		echo "<div class='alert alert-success text-center'><h2>تم حفظ الخبر</h2> ";
		header("refresh:3; url=addnews.php");// دالة الهيدر لها استخدامين يمكن اسخدامها عن طريق اللوكيشن الدلة الثانيه ريفرش وتحدد له بعد مده زمنيه 
	
	}

	else 
	{echo "لم يتم الحفظ";}
	 }
	/*echo $Ntitle."<br/>";
		echo $Ndate."<br/>";
		echo $Ntype."<br/>";
		echo $Ndetail."<br/>";*/
	
	?>
	

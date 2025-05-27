<?php 
include("header.php");

include("config.php");

$sql="select *from news2 order by nid desc limit 5";
echo'<div class="container ">
<form action="multidelete.php" method="post">
<table class ="table table-bordered table-hover">
<thead>
<th>رقم الخبر  </th>
<th>عنوان الخبر الخبر  </th>
<th>نوع الخبر  الخبر  </th>
<th>تفاصيل الخبر  الخبر  </th>
<th>تاريخ الخبر  </th>
<th>العمليات </th>
</thead>

';

$res=mysqli_query($conn,$sql);//هنا جلب البيانات واريد ان اخزنها بمتغير من اجل استرجعها 
/*  دوال تقوم بترتيب هذا الملف النصي المسترجع ("البيانات غير المرتبه") على شكل مصفوفه */
/*عمل هذا الدوال تحويل البيانات المسترجعه على شكل مصفوفه من اجل ان تسهل الوصول اليها 
mysqli_fetch_row البيانات التي 
	mysqli_fetch_assoc
	mysqli_fetch_array
	mysqli_fetch_object()*/
//طالما وانت تقرا بيانات اطبع الاخبار 
 while($row3=mysqli_fetch_row($res)){
	 echo "<tr>";
	 echo"<td><input type='checkbox'name='op[]' value=". $row3[0].">". $row3[0]."</td>";
	 echo "<td>".$row3[1]."</td>";
	 echo "<td>".$row3[2]."</td>";
	 echo "<td>".$row3[4]."</td>";
	 echo "<td>".$row3[3]."</td>";
	 echo "<td>
	 
	 
	 <a href='delete.php?id=". $row3[0]."'><i class='fa fa-trash'style='color:#f00'; ></i></a>
	  <a href='edit.php?id=". $row3[0]."'><i class='fa fa-edit'style='color:blue'; ></i></a>
	   <a href='details.php?id=". $row3[0]."'><i class='fa fa-eye'style='color:#000'; ></i></a>
	 </td>";
	 echo "</tr>";
	 
	 
 }

//queru string ووتتكون من متغير وقيمه وتكون مضافه بعد الروابط--سلسه نصيه اي بيانت تضيف بعد الرابط 

?>

</table>
<input type="submit" value="حذف كل الاخبار " class="btn btn-danger"/>
</form>
</div>
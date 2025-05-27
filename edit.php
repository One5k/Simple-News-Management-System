<?php

include("header.php");
include ("config.php");
$sql="select *from news2 where nid=".$_GET['id'];
$result=mysqli_query($conn,$sql);
$row3=mysqli_fetch_array($result)

?>
		
<div class="container">
	<form method="post"  action="saveUpdateData.php">
	<div class="row">
	<div class="col col-md-6 -6">
		<div class="form-group">
		<input type="hidden" class="form-control" value="<?=$row3['nid']?>" name="nid">
		
    <label for="email">عنوان الخبر </label>
    <input type="text" class="form-control" value="<?=$row3['ntitle']?>" name="Ntitle">
  </div>
		</div>
		<div class="col col-md-6 ">
			<div class="form-group">
    <label for="pwd">تاريخ الخبر :</label>
    <input type="date" class="form-control"value="<?=$row3['ndate']?>" name="Ndate">
  </div>
		</div>
		
		
		</div>
		<div class="col-md-6">
			<div class="form-group">
    <label for="pwd">نوع الخبر </label>
    <select class="form-control" name="Ntype">
		<option><?=$row3['ntype']?></option>
	<option>رياضي </option>
		<option>سياسي </option>
		<option>عالمي </option>
			</select>
  </div>
		
		</div>
		<div class="form-group">
    <label for="pwd">تفاصيل الخبر  </label>
   <textarea class="form-control" rows="15" name="Ndetail" >
			
			<?=$row3['ndetail']?>
			</textarea>
				
				
	<button type="submit" class="btn btn-danger">تعديل البيانات</button>
  </div>
		
	</div>
	
  
  
		
		
	
			

  
</form>
	</div>
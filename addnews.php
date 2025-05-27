<?php

include("header.php");
?>
		
<div class="container">
	<form method="post"  action="saveData.php">
	<div class="row">
	<div class="col col-md-6 -6">
		<div class="form-group">
    <label for="email">عنوان الخبر </label>
    <input type="text" class="form-control" name="Ntitle">
  </div>
		</div>
		<div class="col col-md-6 ">
			<div class="form-group">
    <label for="pwd">تاريخ الخبر :</label>
    <input type="date" class="form-control" name="Ndate">
  </div>
		</div>
		
		
		</div>
		<div class="col-md-6">
			<div class="form-group">
    <label for="pwd">نوع الخبر </label>
    <select class="form-control" name="Ntype">
	<option>رياضي </option>
		<option>سياسي </option>
		<option>عالمي </option>
			</select>
  </div>
		
		</div>
		<div class="form-group">
    <label for="pwd">تفاصيل الخبر  </label>
   <textarea class="form-control" rows="15" name="Ndetail" ></textarea>
				
				
	<button type="submit" class="btn btn-danger">اضافة خبر </button>
  </div>
		
	</div>
	
  
  
		
		
	
			

  
</form>
	</div>
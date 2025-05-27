// JavaScript Document

   $(document).ready(function(e) {
   $("#estateCity").change(function(e){
		var getTown=$("#estateCity option:selected").index();

		alert(getTown);
	   $.post("php_Ajax.php",{getTown:getTown},
			function(res){
				$("#estateTown").html(res);
				}
			);
   });
      });
// JavaScript Document


$(document).ready(function(e) {

        $(".nav-link span").addClass("fa fa-chevron-circle-down");
   
    $("#color_option").click(function(e) {
        $("#social_media").fadeToggle(200);
    });
	
	$("#but_vita").click(function(e) {
     $(".moreDetails_vita").slideToggle(2000);   
    });
	$("#close_vita").click(function(e) {
     $(".moreDetails_vita").slideUp(2000);   
    });
	
	
	$("#but_food").click(function(e) {
     $(".moreDetails_food").slideToggle(2000);   
    });
	$("#close_food").click(function(e) {
     $(".moreDetails_food").slideUp(2000);   
    });
	
	
});
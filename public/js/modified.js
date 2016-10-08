var screenwidth = ($(window).width()/2)-60;




$(document).ready(function(){

	var width = $(window).width();
	if(width <=930){
	       	  
	  $(".divMaps > iframe").attr("width",width-(0.13*width));
	  $(".divMaps > iframe").attr("height","300");
	}else if(width>930 && width<975){
	  $(".divMaps > iframe").attr("width",width-(0.2*width));
	  $(".divMaps > iframe").attr("height","300");
	}else{
	$(".divMaps > iframe").attr("width",(width/2)-60);
	}
	

	/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
	
});
var width = $(window).width();
$(window).resize(function(){
   if($(this).width() != width){
      width = $(this).width();
       if(width <=930){
       	  
       	  $(".divMaps > iframe").attr("width",width-(0.13*width));
       	  $(".divMaps > iframe").attr("height","300");
       }else if(width>930 && width<975){
       	  $(".divMaps > iframe").attr("width",width-(0.2*width));
       	  $(".divMaps > iframe").attr("height","300");
       }else{
       	$(".divMaps > iframe").attr("width",(width/2)-60);
       }
   }
});

function myFunction() {
	    document.getElementById("myDropdown").classList.toggle("show");
	}

	// Close the dropdown if the user clicks outside of it
	window.onclick = function(event) {
	  if (!event.target.matches('.dropbtn')) {

	    var dropdowns = document.getElementsByClassName("dropdown-content");
	    var i;
	    for (i = 0; i < dropdowns.length; i++) {
	      var openDropdown = dropdowns[i];
	      if (openDropdown.classList.contains('show')) {
	        openDropdown.classList.remove('show');
	      }
	    }
	  }
	}
$(function () {	
	$('#icon-menu').click(function(){	
		if($("#main-nav" ).css('display')=="none"){
			$( "#main-nav" ).slideDown(1000);
		}else{
			$( "#main-nav" ).slideUp(1000);			
		}
	});
	
	$("#main-nav ul li").hover(
		  function() {
		    $( this ).find("ul").addClass( "hover" );
		  }, function() {
		    $( this ).find("ul").removeClass( "hover" );
		  }
	);
	
	$("#main-nav ul li").hover(
			  function() {
			    $( this ).addClass( "hover" );
			    
			    $(this).find("ul")
		        .animate({ opacity: 1 }, 0); // Then, make it semi-transparent

			    
			  }, function() {
			    $( this ).removeClass( "hover" );
			    
			    $(this).find("ul")
			  .animate({ opacity: 0 }, 1000); // Then, make it semi-transparent

			  }
		);
	
	$("#main-nav ul li ul li").hover(
		  function() {
		    $( this ).addClass( "hover" );
		  }, function() {
		    $( this ).removeClass( "hover" );
		  }
	);
	
	$(".standardsButton").hover(
			  function() {
			    $( this ).addClass( "hover" );
			  }, function() {
			    $( this ).removeClass( "hover" );
			  }
		);
	
	$(window).load(function() {
		
		if ( !window.requestAnimationFrame){ //IE<10
				 $("#main-nav ul").addClass( "ie8" );
				 $("#main-nav ul li ul").removeClass( "ie8" );				 
				 $(".standardsButton").addClass( "ie8" );
		}
		
		$("#main-nav ul li ul").animate({ opacity: 0 }, 0); // Then, make it semi-transparent
	});
	
	
});
$(document).ready(function() {   

	$('.carousel').carousel({
	  interval: false
	});


  /* sga-menu at mobile */     
        $(".toggleMenu").on("click", function () {
            $(".hamburger").toggleClass("is-active");
            if ($(this).attr('data-click-state') == 1) {
                $(this).attr('data-click-state', 0);                
                 $('#menu-header-menu li').hide();                     
            } else {
                $(this).attr('data-click-state', 1);              
                 $('#menu-header-menu li').show();                   
            }
        });
       
  /* end of sga-menu at mobile */ 


});
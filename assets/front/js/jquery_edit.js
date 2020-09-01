
$ (document).ready(function(){
	
		  jQuery("body").niceScroll({    //niceScroll
        cursoropacitymin: 0,
        cursoropacitymax: 1,
        cursorwidth: "10px",
        cursorborder: "0px",
        cursorborderradius: "0px",
        zindex: "999999999",
        scrollspeed: 60,
        mousescrollstep: 80,
        touchbehavior: false,
        hwacceleration: true,
        boxzoom: false,
        dblclickzoom: true,
        gesturezoom: true,
        grabcursorenabled: true,
        autohidemode: true,
        cursorcolor: "#6a7efc",
        background: "#2a2f4c"
    });
	
	



	
	
	
	$(".carousel").carousel({
		interval:5000
	});
	
	  
    // الالوان
    $(".gear-check").click(function () {
        $(".color-option").fadeToggle();
        
    });
    //يقوم بفتح كور اوبشن  gear-check  لمن اضغط علي 
    // fedetoggle للتبديل بالاظهار والاخفاء ممكن استخدام show feed in
    
    
       
    var colorLi = $(".color-option ul li");
                                        
    colorLi
      
      
        .eq(0).css("backgroundColor", "#0f2a53").end()
        .eq(1).css("backgroundColor", "blue").end()
        .eq(2).css("backgroundColor", "yellow");
      //* تقوم بتلوين ul li  
    
    
    
    colorLi.click(function () {
          
        $("link[href*='thems']").attr("href", $(this).attr("data-value"))
            
            
       //     console.log( $(this).attr("data-value"))
     });
	
	
	
	// hide #back-top first
	$("#scroll-top").hide();
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#scroll-top').fadeIn();
			} else {
				$('#scroll-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#scroll-top i').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
		});
	});
	
});
$(document).ready(function() { 

   $(".f-boxall .dsm .srch .s-drowp").niceScroll();

});


$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});








        new WOW().init();







        $(function() {
            'use strict';

            $('.sizeimg .carousel-fade .carousel-inner > .item > img,.sizeimg .carousel-fade .carousel-inner > .item').height($(window).height());
            $(window).resize(function() {

                $('.sizeimg .carousel-fade .carousel-inner > .item > img,.sizeimg .carousel-fade .carousel-inner > .item').height($(window).height());
            });
        });




        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }




        $(function() {
            $(document).on('click', 'a.page-scroll', function(event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top
                }, 900, 'easeInOutExpo');
                event.preventDefault();
            });
        });











$(window).load(function() {
    $("#loader").delay(400).fadeOut("slow");
});

$(document).ready(function() {

var trigger = $('#hamburger_anim'), isClosed = true;
    trigger.click(function () {
      burgerClock();
    });
    function burgerClock() {
      if (isClosed == true) {
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = false;
        $("#menu").addClass('menuopen');
        $("#menu").removeClass('menuclose');

        $("#menubackfilter").addClass('backfilterOn');
        $("#menubackfilter").removeClass('backfilterOff');
        var tl_burgerOn = new TimelineLite();
            tl_burgerOn.to("#menutopline", 0.2, {directionalRotation:"20_cw",smoothOrigin:"100% 50%",  ease:Linear.easeNone}, "burgerstep1")
            .to("#menumiddleline", 0.2, {css:{scaleX:0.5, transformOrigin:"100% 50%"},  ease:Linear.easeNone}, "burgerstep1")
            .to("#menubottomline", 0.2, {directionalRotation:"-20_ccw", smoothOrigin:"100% 50%",  ease:Linear.easeNone}, "burgerstep1")
            .to("#menutopline", 0.4, {directionalRotation:"-45_ccw", y:12, smoothOrigin:"50% 50%",  ease:Linear.easeNone}, "burgerstep2")
            .to("#menumiddleline", 0.4, {css:{scaleX:0 , autoAlpha:0, transformOrigin:"100% 50%"},  ease:Linear.easeNone}, "burgerstep2")
            .to("#menubottomline", 0.4, {directionalRotation:"45_cw", y:"-=12", smoothOrigin:"50% 50%", ease:Linear.easeNone}, "burgerstep2")
            ;

        $("#menubackfilter").click(function () {
            trigger.removeClass('is-open');
            trigger.addClass('is-closed');
            isClosed = true;
            $("#menu").addClass('menuclose');
            $("#menu").removeClass('menuopen');
            $("#menubackfilter").addClass('backfilterOff');
            $("#menubackfilter").removeClass('backfilterOn');
            var tl_burgerOff = new TimelineLite();
                tl_burgerOff.to("#menutopline", 0.4, {directionalRotation:"20_cw", y:0, smoothOrigin:"50% 50%",  ease:Linear.easeNone}, "burgeroffstep1")
                .to("#menumiddleline", 0.4, {css:{scaleX:0.5, autoAlpha:1, transformOrigin:"100% 50%"},  ease:Linear.easeNone}, "burgeroffstep1")
                .to("#menubottomline", 0.4, {directionalRotation:"-20_ccw", y:0, smoothOrigin:"50% 50%", ease:Linear.easeNone}, "burgeroffstep1")
                .to("#menutopline", 0.2, {directionalRotation: 0 , y:0, smoothOrigin:"100% 50%",  ease:Linear.easeNone}, "burgeroffstep2")
                .to("#menumiddleline", 0.2, {css:{scaleX:1, transformOrigin:"100% 50%"},  ease:Linear.easeNone}, "burgeroffstep2")
                .to("#menubottomline", 0.2, {directionalRotation: 0 , y:0, smoothOrigin:"100% 50%",  ease:Linear.easeNone}, "burgeroffstep2")
                ;    
        }); 

      } else {
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = true;
        $("#menu").addClass('menuclose');
        $("#menu").removeClass('menuopen');

        $("#menubackfilter").addClass('backfilterOff');
        $("#menubackfilter").removeClass('backfilterOn');

        var tl_burgerOff = new TimelineLite();
            tl_burgerOff.to("#menutopline", 0.4, {directionalRotation:"20_cw", y:0, smoothOrigin:"50% 50%",  ease:Linear.easeNone}, "burgeroffstep1")
            .to("#menumiddleline", 0.4, {css:{scaleX:0.5, autoAlpha:1, transformOrigin:"100% 50%"},  ease:Linear.easeNone}, "burgeroffstep1")
            .to("#menubottomline", 0.4, {directionalRotation:"-20_ccw", y:0, smoothOrigin:"50% 50%", ease:Linear.easeNone}, "burgeroffstep1")
            .to("#menutopline", 0.2, {directionalRotation: 0 , y:0, smoothOrigin:"100% 50%",  ease:Linear.easeNone}, "burgeroffstep2")
            .to("#menumiddleline", 0.2, {css:{scaleX:1, transformOrigin:"100% 50%"},  ease:Linear.easeNone}, "burgeroffstep2")
            .to("#menubottomline", 0.2, {directionalRotation: 0 , y:0, smoothOrigin:"100% 50%",  ease:Linear.easeNone}, "burgeroffstep2")
            ;

      }
    }

    $('#logosun').hover(
        function(){
          var tl = new TimelineLite();
            tl.to("#logosun", 1, {directionalRotation:"72_cw",transformOrigin:"50% 54%"}, "logohoverOn")
            ;
        },
        function(){

          var tl = new TimelineLite();
            tl.to("#logosun", 1, {directionalRotation:"144_cw",transformOrigin:"50% 54%"}, "logohoverOff")
            ;
    });

        $('#menubuttonhover').hover(
        function(){
          var tl = new TimelineLite();
            tl.set("#burger-container", {perspective:100})

            .to("#menubottomline", 0.3, {css:{scaleX:1.5, transformOrigin:"50% 50%"}, ease:Power1.easeOut}, "menuperspective")
            .to("#menumiddleline", 0.3, {css:{scaleX:1.5, transformOrigin:"50% 50%"}, ease:Power1.easeOut}, "menuperspective+=0.05")
            .to("#menutopline", 0.3, {css:{scaleX:1.5, transformOrigin:"50% 50%"}, ease:Power1.easeOut}, "menuperspective+=0.1")
            .to("#menubottomline", 0.3, {css:{scaleX:1, transformOrigin:"50% 50%"}, ease:Power1.easeOut}, "menuperspective+=0.15")
            .to("#menumiddleline", 0.3, {css:{scaleX:1, transformOrigin:"50% 50%"}, ease:Power1.easeOut}, "menuperspective+=0.2")
            .to("#menutopline", 0.3, {css:{scaleX:1, transformOrigin:"50% 50%"}, ease:Power1.easeOut}, "menuperspective+=0.25")
            ;
        },
        function(){

          var tl = new TimelineLite();
            tl.to("#menutopline", 0.3, {css:{scaleX:1.5, transformOrigin:"50% 50%"}, ease:Power1.easeOut}, "1menuperspective")
            .to("#menumiddleline", 0.3, {css:{scaleX:1.5, transformOrigin:"50% 50%"}, ease:Power1.easeOut}, "1menuperspective+=0.05")
            .to("#menubottomline", 0.3, {css:{scaleX:1.5, transformOrigin:"50% 50%"}, ease:Power1.easeOut}, "1menuperspective+=0.1")
            .to("#menutopline", 0.3, {css:{scaleX:1,  transformOrigin:"50% 50%"}, ease:Power1.easeOut}, "1menuperspective+=0.15")
            .to("#menumiddleline", 0.3, {css:{scaleX:1, transformOrigin:"50% 50%"}, ease:Power1.easeOut}, "1menuperspective+=0.2")
            .to("#menubottomline", 0.3, {css:{scaleX:1,  transformOrigin:"50% 50%"}, ease:Power1.easeOut}, "1menuperspective+=0.25")
            ;
    });

    $('#gonextpage').hover(
        function(){
          var tl = new TimelineLite();
            tl.to("#arrow", 0.6, {css:{x:10, transformOrigin:"50% 50% -20"}, ease:Power1.easeOut}, "gonextpage")
            ;
        },
        function(){
          var tl = new TimelineLite();
            tl.to("#arrow", 0.6, {css:{x:0 }, ease:Power1.easeOut}, "dontgonextpage")
            ;
    });
    $('#gomotivators').hover(
        function(){
          var tl = new TimelineLite();
            tl.to("#arrow_up", 0.6, {css:{y:"-=10", transformOrigin:"50% 50% -20"}, ease:Power1.easeOut})
            ;
        },
        function(){
          var tl = new TimelineLite();
            tl.to("#arrow_up", 0.6, {css:{y:0 }, ease:Power1.easeOut})
            ;
    });





    if ('ontouchstart' in window ) {    //behaviour and events for touch device
        // $('#garagelink').on('touchstart',function(){
        //     setTimeout(function(){
        //        window.location.href='index.html';
        //    },1000);
        // });

        $('#logosun').on('touchstart',function(event){
            event.preventDefault();
            var tlmain = new TimelineLite({onComplete:sendtopage});
            tlmain.to("#logosun", 3, {directionalRotation:"1590_cw", scale:4, transformOrigin:"50% 54%", ease:Power1.easeIn});
            $('#logosun').bind('mouseup mouseleave', function() {           
                tlmain.time(0)      
                tlmain.stop()          
            });

            $('#logosun').on('touchend',function(){
                tlmain.time(0)      
                tlmain.stop() 
            });
            $('#motorcycle').on('touchleave',function(){
                tlmain.time(0)      
                tlmain.stop() 
            });

            var gotoUrl = $("#sendtopage").attr('href');
            function sendtopage() {
                $(location).attr("href", gotoUrl);
            };

        });   

    }

    else{   //behaviour and events for pointing device like mouse


        $('#logosun').mousedown(function(event) {
            event.preventDefault();
            var tlmain = new TimelineLite({onComplete:sendtopage});
            tlmain.to("#logosun", 3, {directionalRotation:"1590_cw", scale:4, transformOrigin:"50% 54%", ease:Power1.easeIn});
            $('#logosun').bind('mouseup mouseleave', function() {           
                tlmain.time(0)      
                tlmain.stop()          
            });

            var gotoUrl = $("#sendtopage").attr('href');
            function sendtopage() {
                $(location).attr("href", gotoUrl);
            };

        });


    };






    

	//Цели для Яндекс.Метрики и Google Analytics
	$(".count_element").on("click", (function() {
		ga("send", "event", "goal", "goal");
		yaCounterXXXXXXXX.reachGoal("goal");
		return true;
	}));

	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};




	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

});

window.onload = function() {

    
    if (document.getElementById('warningden')) {
        
        var show_text = new TimelineMax()
        show_text.set("#contain_all", {perspective:500})
        .set(".anyhide", {autoAlpha:0})
        .fromTo("#warningden", 5, {autoAlpha:0, scale:1}, {autoAlpha:1, scale:1, ease:Power3.easeIn}, "startcircle")       
        .to(".anyhide", 3, {autoAlpha:1, ease:Power1.easeIn})
        .fromTo("#onebutton", 3, {autoAlpha:0}, {autoAlpha:1, scale:1, ease:Power4.easeIn})
        ;
    };
    if (document.getElementById('stepden')) {
        
        var show_text = new TimelineMax()
        show_text.set("#contain_all", {perspective:500})

        .fromTo("#onebutton", 10, {autoAlpha:0}, {autoAlpha:1, scale:1, ease:Power4.easeIn})
        ;
    };


    
   











};







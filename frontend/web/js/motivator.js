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


    if (document.getElementById('motivator_evolution_1')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})

        .to("#box1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeIn})
        .to("#q2_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q3_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q4_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

        .to("#box5", 0.5, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q5_1", 2, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q6_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q6_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q9_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#q9_3", 2, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

        ;
    };
    if (document.getElementById('motivator_happylife_1')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})

        .to("#box1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q2_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q3_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
       
        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q4_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
       
        .to("#box5", 0.5, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q5_1", 2, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q6_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
       
        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
       
        .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q9_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box10", 0.5, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q10_1", 2, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box11", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q11_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q11_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box12", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q12_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q12_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q12_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        
        ;
    };

    if (document.getElementById('motivator_changes_1')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})
     
        .to("#box1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q2_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q3_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
       
        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q4_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
       
        .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q5_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q5_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q6_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q6_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       
        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q9_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q9_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})



        .to("#box10", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q10_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q10_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q10_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        
        ;
    };
    if (document.getElementById('motivator_challenges_1')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})
     
        .to("#box1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q2_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
 
       
        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q4_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
       
        .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q5_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q5_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q5_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q5_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
       
        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
       
        .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q9_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q9_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q9_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box10", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q10_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q10_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q10_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        
        ;
    };
    if (document.getElementById('motivator_selfrespect_1')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})
     
        .to("#box1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q1_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q1_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q2_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_1", 2, {autoAlpha:1, y: 0, ease:Power1.easeOut})
 
        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
       
        .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q5_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "box6")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "box6")
       
        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       
        .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q9_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box10", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q10_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q10_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q10_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q10_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")

        .to("#box11", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q11_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q11_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")

        .to("#box12", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q12_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q12_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        
        ;
    };
    if (document.getElementById('motivator_communication_1')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})
     
        .to("#box1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q1_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=0.5")


        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q2_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
 

        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q3_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
 
        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q4_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       
        .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q5_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q5_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q5_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q6_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q6_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       
        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=4")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})


        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=4")
        .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q8_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q8_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q8_5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q8_6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       
        .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q9_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q9_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
       
       
        
        ;
    };
    if (document.getElementById('motivator_survivethefailure_1')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})
     
        .to("#box1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       

        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q2_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       
        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q3_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
 
        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q4_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       
        .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q5_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q6_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=0.5")
        .to("#q6_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=0.5")
        .to("#q6_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=0.5")
       
        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q7_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3")


        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q8_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q8_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

       
        .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q9_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       
        .to("#box10", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q10_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box11", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3")
        .to("#q11_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q11_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q11_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

        .to("#box12", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q12_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q12_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q12_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

        
        ;
    };
    if (document.getElementById('motivator_railway')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})
     
        .to("#box1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       

        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q2_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       
        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q3_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
 
 
        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q4_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       
        .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q5_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q5_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q6_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q6_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

       
        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")


        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

       
        .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q9_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
       
        .to("#box10", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q10_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q10_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")


        .to("#box11", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q11_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q11_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

        .to("#box12", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q12_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q12_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

        
        ;
    };
    if (document.getElementById('motivator_aviator')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})
     
        .to("#box1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       

        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q2_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       
        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q3_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
 
 
        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q4_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       
        .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q5_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})


        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q6_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

       
        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")


        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

       
        .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q9_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       
        .to("#box10", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q10_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q10_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q10_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q10_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")


        .to("#box11", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q11_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q11_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q11_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")



        
        ;
    };
    if (document.getElementById('motivator_sport')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})
     
        .to("#box1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       

        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q2_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       
        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q3_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
 
 
        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q4_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       
        .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q5_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q5_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")


        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q6_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q6_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

       
        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q7_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")


        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q8_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3")
        .to("#q8_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

       
        .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q9_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       
        .to("#box10", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q10_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q10_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q10_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q10_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")


        
        ;
    };

    if (document.getElementById('motivator_builder')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})
     
        .to("#box1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q1_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q1_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       

        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q2_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3")
        .to("#q2_5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       
        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3")
        .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q3_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q3_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
 
 
        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q4_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       
        .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q5_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        
        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q6_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

       
        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q7_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")


        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q8_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})


       
        .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q9_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")


        
        ;
    };
    if (document.getElementById('motivator_voroneg')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})
     
        .to("#box1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
       

        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
       

        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q3_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
 
 
        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
       
        .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q5_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q5_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        
        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q6_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

       
        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})



        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3")
        .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

       
        .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box10", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q10_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q10_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

       
        .to("#box11", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q11_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box12", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q12_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q12_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        
        .to("#box13", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q13_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q13_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

        ;
    };
   
if (document.getElementById('motivator_moscow')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})
     
        .to("#box1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
       

        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q2_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
       

        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q3_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
 
 
        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q4_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
       
        .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q5_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q5_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        
        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q6_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

       
        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})



        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

       
        .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q9_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q9_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q9_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box10", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q10_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q10_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q10_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

        
        ;
    };

if (document.getElementById('motivator_tula')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})
     
        .to("#box1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
       

        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
 

        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
 

        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
  

        .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q5_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
  

        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

       
        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})



        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

       
        .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})


        .to("#box10", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q10_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box11", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q11_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box12", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q12_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q12_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box13", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q13_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q13_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        
        ;
    };

    if (document.getElementById('motivator_recruiter')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})
     
        .to("#box1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       

        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q2_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
 

        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q3_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
 

        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q4_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
  

        .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q5_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q5_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q5_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q5_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
  

        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q6_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q6_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

       
        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")



        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

       
        .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q9_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        
        ;
    };

    if (document.getElementById('motivator_traveller')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})
     
        .to("#box1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       

        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q2_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
 

        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q3_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        
 

        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q4_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
      
  

        .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q5_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q5_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q5_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       
  

        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q6_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       

       
        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")



        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q8_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

       
        .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q9_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

        .to("#box10", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q10_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q10_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q10_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box11", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q11_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q11_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q11_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        ;
    };

    if (document.getElementById('motivator_translator')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})
     
        .to("#box1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       

        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q2_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
 

        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q3_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

        
 

        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q4_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

      
  

        .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q5_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q5_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q5_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       
  

        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q6_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       

       
        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")



        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q8_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

       
        .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box10", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3")
        .to("#q10_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q10_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")


        .to("#box11", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q11_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q11_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
 
        ;
    };

    if (document.getElementById('motivator_teacher')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})
     
        .to("#box1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
       

        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q2_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
 

        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q3_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

        
 

        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q4_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=0.5")

      
  

        .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q5_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q5_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=0.5")
       
  

        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q6_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
       

       
        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q7_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")



        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        

       
        .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box10", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3")
        .to("#q10_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q10_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")


        .to("#box11", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q11_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q11_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
 
        ;
    };

      if (document.getElementById('motivator_hr')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})
     
        .to("#box1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=0.5")
       

        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q2_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
 

        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q3_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q3_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=0.5")

        
 

        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q4_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q4_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=0.5")

      
  

        .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1.5")
        .to("#q5_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q5_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
       
  

        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q6_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q6_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")

       
        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q7_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1.5")



        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        

       
        ;
    };

    if (document.getElementById('motivator_acceptthelife')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})
     
        .to("#box1", 0.5, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_1", 1.5, {autoAlpha:1, y: 0, ease:Power1.easeOut})   

        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q3_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2.5")
        .to("#q3_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=0.5")
        .to("#q3_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2.5")

        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q4_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2.0")
        .to("#q4_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2.0")
        .to("#q4_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=0.5")

        .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3.0")
        .to("#q5_1", 2, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=4")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q6_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q6_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q6_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=0.5")
  
        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q7_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q7_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=0.7")
        .to("#q7_5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")

        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3")
        .to("#q8_1", 3, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        
        ;
    };

    if (document.getElementById('motivator_cook')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})
     
        .to("#box1", 0.5, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})   
        .to("#q1_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1") 

        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q2_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")

        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q3_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")

        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q4_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2.0")


        .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2.0")
        .to("#q5_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q5_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q5_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=0.5")

        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q6_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q6_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
  
        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q7_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")

        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=0.5")
        
        .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q9_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
        .to("#q9_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

        .to("#box10", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q10_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q10_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")

        .to("#box11", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q11_1", 3, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        ;
    };

    if (document.getElementById('motivator_mechanic')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})
     
        .to("#box1", 0.5, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})   
        .to("#q1_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2") 

        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q2_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")

        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q3_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")

        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q4_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2.0")


        .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2.0")
        .to("#q5_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q5_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
   

        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q6_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")

  
        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")


        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        
        .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q9_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")


        .to("#box10", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q10_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q10_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")

        ;
    };

    if (document.getElementById('motivator_sailor')) {
        
        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
        .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})
     
        .to("#box1", 0.5, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})   
        .to("#q1_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2") 

        .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q2_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q2_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=0.5")

        .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q3_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")

        .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q4_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2.0")
        .to("#q4_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=0.5")

        .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2.0")
        .to("#q5_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q5_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q5_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q5_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
   

        .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q6_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q6_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q6_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")

  
        .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q7_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")


        .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q8_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q8_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        
        .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q9_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")


        .to("#box10", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
        .to("#q10_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
        .to("#q10_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")

        ;
    };

    if (document.getElementById('motivator_accountant')) {

        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
            .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})

            .to("#box1", 0.5, {autoAlpha:1, y: 0, ease:Power1.easeOut})
            .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
            .to("#q1_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
            .to("#q1_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1.0")

            .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
            .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
            .to("#q2_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")

            .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3")
            .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
            .to("#q3_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=4")
            .to("#q3_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=4")

            .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=7")
            .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
            .to("#q4_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=5.0")
            .to("#q4_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3.0")
            .to("#q4_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3.0")

            .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=4.0")
            .to("#q5_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
            .to("#q5_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
            .to("#q5_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1.0")


            .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3")
            .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
            .to("#q6_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=0.5")


            .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3")
            .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
            .to("#q7_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3")
            .to("#q7_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3")


            .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=5")
            .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
            .to("#q8_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=4")
            .to("#q8_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=4")
            .to("#q8_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=4")

            .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=6")
            .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
            .to("#q9_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=1")
            .to("#q9_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3")
            .to("#q9_4", 3, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=4")


        ;
    };
    if (document.getElementById('motivator_selfknowledge')) {

        var show_text = new TimelineMax()
        show_text.set(".anishow", {css:{autoAlpha:0, transformOrigin:"50% 50%"}})
            .fromTo("#pagename", 3, {autoAlpha:1, scale:2.0}, {autoAlpha:1, scale:1, ease:Power1.easeOut})

            .to("#box1", 0.5, {autoAlpha:1, y: 0, ease:Power1.easeOut})
            .to("#q1_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
            .to("#q1_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")

            .to("#box2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3")
            .to("#q2_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
            .to("#q2_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")

            .to("#box3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3")
            .to("#q3_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
            .to("#q3_2", 2, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")

            .to("#box4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=5")
            .to("#q4_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
            .to("#q4_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")

            .to("#box5", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3")
            .to("#q5_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
            .to("#q5_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
            .to("#q5_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2.0")
            .to("#q5_4", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2.0")


            .to("#box6", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=5")
            .to("#q6_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
            .to("#q6_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")


            .to("#box7", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=5")
            .to("#q7_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})


            .to("#box8", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=3")
            .to("#q8_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})

            .to("#box9", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=5")
            .to("#q9_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
            .to("#q9_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")

            .to("#box10", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=5")
            .to("#q10_1", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut})
            .to("#q10_2", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")
            .to("#q10_3", 1, {autoAlpha:1, y: 0, ease:Power1.easeOut}, "+=2")

        ;
    };








};







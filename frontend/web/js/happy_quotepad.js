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
            tl.to("#logosun", 1, {directionalRotation:"72_cw",transformOrigin:"50% 54%"})
            ;
        },
        function(){

          var tl = new TimelineLite();
            tl.to("#logosun", 1, {directionalRotation:"144_cw",transformOrigin:"50% 54%"})
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
        

        $('#logosun').mousedown(function() {
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

    var tl_skroll = new TimelineMax({repeat:900})
    tl_skroll.set("#scrollring", {css:{autoAlpha:0, y: "-=2", transformOrigin:"50% 50%"}})
    .to("#scrollring", 1, {autoAlpha:1, y: 4, ease:Power1.easeIn})
    .to("#scrollring", 2, {autoAlpha:1, y: 14, ease:Linear.easeNone})
    .to("#scrollring", 1, {autoAlpha:0, y: 19, ease:Power1.easeOut});


    // var tl = new TimelineMax({onComplete:function() {
    // this.restart()}
    // });
    // tl.fromTo("#carrot", 1, {css:{rotation:"-=55", transformOrigin:"80% 7%"}, ease:Power1.easeInOut})
    // .to("#carrot", 1, {css:{rotation: 0, transformOrigin:"80% 7%"} ease:Power1.easeOut});

    var tl_s2 = new TimelineMax({repeat:100})
    tl_s2.fromTo("#carrot", 2, {rotation:"0", x: "-=50%", transformOrigin:"80% 7%"}, {x: "50%", rotation:"-=75", ease: Linear.easeNone}, "carrotstep1")
    .fromTo("#rope", 2, {rotation:"+=20", x: "-=20%", transformOrigin:"0% 0%"}, { rotation:"-=47", ease: Linear.easeNone}, "carrotstep1")
    .fromTo("#carrot_x5F_green", 2, {rotation:"-=10", x: "-=35",  transformOrigin:"60% 40%"}, { rotation:"-=75", x: "+=40", ease: Linear.easeNone}, "carrotstep1")
    .to("#carrot", 1, {rotation:"+=35", x: "-=20%", ease:Linear.easeNone}, "carrotstep2")
    .to("#rope", 1, {rotation:"+=5",  ease:Linear.easeNone}, "carrotstep2")
    .to("#carrot_x5F_green", 1, {rotation:"+=35",  ease:Linear.easeNone}, "carrotstep2")
    .to("#carrot", 1, {rotation:"-=20", x: "-=30%", ease:Linear.easeNone}, "carrotstep3")
    .to("#rope", 1, {rotation:"+=15",  ease:Linear.easeNone}, "carrotstep3")
    .to("#carrot_x5F_green", 1, {rotation:"-=20", x: "-=20", ease:Linear.easeNone}, "carrotstep3")
    .to("#carrot", 1, {rotation:"0", x: "-=50%", ease:Linear.easeNone}, "carrotstep4")
    .to("#rope", 1, {rotation:"+=29",  ease:Linear.easeNone}, "carrotstep4")
    .to("#carrot_x5F_green", 1, {rotation:"0", x: "-=20", ease:Linear.easeNone}, "carrotstep4");


	var controller = new ScrollMagic.Controller();

    var scene1_1 = new ScrollMagic.Scene({triggerElement: "#screen1", duration: 1400, offset: 300})
        .setPin("#textbox1")
        .addTo(controller);
    var tween1_2 = new TimelineMax()
    .fromTo("#textbox1", 3, {x: "54%"}, {x: "0%", ease:Power1.easeOut})
    .fromTo("#q_img1", 1, {autoAlpha:0, y: 700}, {autoAlpha:1, ease: Linear.easeNone})
    .to("#q_img1", 1, { y: 900,  ease:Linear.easeNone})
    .to("#q_img1", 2, { scale:4.0, y: 1800, autoAlpha:0.1, ease:Linear.easeNone});
    var scene1_2 = new ScrollMagic.Scene({triggerElement: "#screen1", duration: 1200, offset: 500})
        .setTween(tween1_2)
        .addTo(controller);

    var scene2_1 = new ScrollMagic.Scene({triggerElement: "#screen2", duration: 1500, offset: 300})
        .setPin("#textbox2")
        .addTo(controller);  

    var scene2_3 = new ScrollMagic.Scene({triggerElement: "#screen2", duration: 1400, offset: 400})
        .setPin("#donkeywrap")
        .addTo(controller); 

    var tween = new TimelineMax()
    .fromTo("#textbox2", 30, {x: "-=54%"}, {x: "0%", ease:Power1.easeOut})
    .fromTo("#donkey", 40, {autoAlpha:0}, {autoAlpha:1, ease: Linear.easeNone})


    .set("#leg1", {css:{rotation:0, y: 0, x: 0, transformOrigin:"80% 7%"}})
    .set("#leg2", {css:{rotation:0, y: 0, x: 0, transformOrigin:"17% 11%"}})
    .set("#leg2-down_x5F_knee", {css:{rotation:0, y: 0, x: 0, transformOrigin:"10% 25%"}})
    .set("#leg2-down_x5F_boot", {css:{rotation:0, y: 0, x: 0, transformOrigin:"-290% -20%"}})
    .set("#hand1", {css:{rotation:0, y: 0, x: 0, transformOrigin:"17% 11%"}})
    .set("#case", {css:{rotation:0, y: 0, x: 0, transformOrigin:"-5% -140%"}})
    .set("#hand2", {css:{rotation:0, y: 0, x: 0, transformOrigin:"80% 7%"}})
    .set("#leg1-down_x5F_knee", {css:{rotation:0, y: 0, x: 0, transformOrigin:"75% 4%"}})
    .set("#leg1-down_x5F_boot", {css:{rotation:0, y: 0, x: 0, transformOrigin:"90% -90%"}})

    .to("#leg1", 10, {css:{rotation:"-=27"}, ease:Linear.easeNone}, "step05")
    .to("#leg2", 10, {css:{rotation:"+=37"}, ease:Linear.easeNone}, "step05")
    .to("#leg2-down_x5F_knee", 10, {css:{rotation:"-=42"}, ease:Linear.easeNone}, "step05")
    .to("#leg2-down_x5F_boot", 10, {css:{rotation:"-=45", y: "-=45", x: "-=10"}, ease:Linear.easeNone}, "step05")
    .to("#hand1", 10, {css:{rotation:"+=17"}, ease:Linear.easeNone}, "step05") 
    .to("#case", 10, {css:{rotation:"+=17"}, ease:Linear.easeNone}, "step05")
    .to("#hand2", 10, {css:{rotation:"-=23"}, ease:Power0.easeInOut}, "step05")

    .to("#leg1", 10, {css:{rotation:"-=27"}, ease:Power0.easeInOut}, "step1")
    .to("#leg2", 10, {css:{rotation:"+=37"}, ease:Power0.easeInOut}, "step1")
    .to("#leg2-down_x5F_knee", 10, {css:{rotation: 25}, ease:Linear.easeNone}, "step1")
    .to("#leg2-down_x5F_boot", 10, {css:{rotation: 45, y: 12, x: 28}, ease:Linear.easeNone}, "step1")
    .to("#hand1", 10, {css:{rotation:"+=38"}, ease:Linear.easeNone}, "step1") 
    .to("#case", 10, {css:{rotation:"+=38"}, ease:Linear.easeNone}, "step1")
    .to("#hand2", 10, {css:{rotation:"-=22"}, ease:Linear.easeNone}, "step1")
    .to("#leg1-down_x5F_knee", 10, {css:{rotation:"-=25"}, ease:Linear.easeNone}, "step1")
    .to("#leg1-down_x5F_boot", 10, {css:{rotation:"-=45", x: 25}, ease:Linear.easeNone}, "step1")

    .to("#leg1", 10, {css:{rotation:"+=27"}, ease:Linear.easeNone}, "step15")
    .to("#leg2", 10, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step15")
    .to("#leg1-down_x5F_knee", 10, {css:{rotation:"-=35"}, ease:Linear.easeNone}, "step15")
    .to("#leg1-down_x5F_boot", 10, {css:{rotation:"-=45", x: 85}, ease:Linear.easeNone}, "step15")
    .to("#hand1", 10, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step15") 
    .to("#case", 10, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step15")
    .to("#hand2", 10, {css:{rotation:"-=23"}, ease:Power0.easeInOut}, "step15")

    .to("#leg1", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step2")
    .to("#leg2", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step2")
    .to("#leg2-down_x5F_knee", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step2")
    .to("#leg2-down_x5F_boot", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step2")
    .to("#hand1", 10, {css:{rotation: 0, y: 0, x: 0}, ease:Linear.easeNone}, "step2")
    .to("#case", 10, {css:{rotation: 0, y: 0, x: 0}, ease:Linear.easeNone}, "step2")
    .to("#hand2", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step2")
    .to("#leg1-down_x5F_knee", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step2")
    .to("#leg1-down_x5F_boot", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step2")

    .to("#leg1", 10, {css:{rotation:"-=27"}, ease:Linear.easeNone}, "step25")
    .to("#leg2", 10, {css:{rotation:"+=37"}, ease:Linear.easeNone}, "step25")
    .to("#leg2-down_x5F_knee", 10, {css:{rotation:"-=42"}, ease:Linear.easeNone}, "step25")
    .to("#leg2-down_x5F_boot", 10, {css:{rotation:"-=45", y: "-=45", x: "-=10"}, ease:Linear.easeNone}, "step25")
    .to("#hand1", 10, {css:{rotation:"+=17"}, ease:Linear.easeNone}, "step25") 
    .to("#case", 10, {css:{rotation:"+=17"}, ease:Linear.easeNone}, "step25")
    .to("#hand2", 10, {css:{rotation:"-=23"}, ease:Power0.easeInOut}, "step25")

    .to("#leg1", 10, {css:{rotation:"-=27"}, ease:Power0.easeInOut}, "step3")
    .to("#leg2", 10, {css:{rotation:"+=37"}, ease:Power0.easeInOut}, "step3")
    .to("#leg2-down_x5F_knee", 10, {css:{rotation: 25}, ease:Linear.easeNone}, "step3")
    .to("#leg2-down_x5F_boot", 10, {css:{rotation: 45, y: 12, x: 28}, ease:Linear.easeNone}, "step3")
    .to("#hand1", 10, {css:{rotation:"+=38"}, ease:Linear.easeNone}, "step3") 
    .to("#case", 10, {css:{rotation:"+=38"}, ease:Linear.easeNone}, "step3")
    .to("#hand2", 10, {css:{rotation:"-=22"}, ease:Linear.easeNone}, "step3")
    .to("#leg1-down_x5F_knee", 10, {css:{rotation:"-=25"}, ease:Linear.easeNone}, "step3")
    .to("#leg1-down_x5F_boot", 10, {css:{rotation:"-=45", x: 25}, ease:Linear.easeNone}, "step3")

    .to("#leg1", 10, {css:{rotation:"+=27"}, ease:Linear.easeNone}, "step35")
    .to("#leg2", 10, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step35")
    .to("#leg1-down_x5F_knee", 10, {css:{rotation:"-=35"}, ease:Linear.easeNone}, "step35")
    .to("#leg1-down_x5F_boot", 10, {css:{rotation:"-=45", x: 85}, ease:Linear.easeNone}, "step35")
    .to("#hand1", 10, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step35") 
    .to("#case", 10, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step35")
    .to("#hand2", 10, {css:{rotation:"-=23"}, ease:Power0.easeInOut}, "step35")

    .to("#leg1", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step4")
    .to("#leg2", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step4")
    .to("#leg2-down_x5F_knee", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step4")
    .to("#leg2-down_x5F_boot", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step4")
    .to("#hand1", 10, {css:{rotation: 0, y: 0, x: 0}, ease:Linear.easeNone}, "step4")
    .to("#case", 10, {css:{rotation: 0, y: 0, x: 0}, ease:Linear.easeNone}, "step4")
    .to("#hand2", 10, {css:{rotation: 0, y: 0, x: 0}, ease:Linear.easeNone}, "step4")
    .to("#leg1-down_x5F_knee", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step4")
    .to("#leg1-down_x5F_boot", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step4")

    .to("#leg1", 10, {css:{rotation:"-=27"}, ease:Linear.easeNone}, "step45")
    .to("#leg2", 10, {css:{rotation:"+=37"}, ease:Linear.easeNone}, "step45")
    .to("#leg2-down_x5F_knee", 10, {css:{rotation:"-=42"}, ease:Linear.easeNone}, "step45")
    .to("#leg2-down_x5F_boot", 10, {css:{rotation:"-=45", y: "-=45", x: "-=10"}, ease:Linear.easeNone}, "step45")
    .to("#hand1", 10, {css:{rotation:"+=17"}, ease:Linear.easeNone}, "step45") 
    .to("#case", 10, {css:{rotation:"+=17"}, ease:Linear.easeNone}, "step45")
    .to("#hand2", 10, {css:{rotation:"-=23"}, ease:Power0.easeInOut}, "step45")

    .to("#leg1", 10, {css:{rotation:"-=27"}, ease:Power0.easeInOut}, "step5")
    .to("#leg2", 10, {css:{rotation:"+=37"}, ease:Power0.easeInOut}, "step5")
    .to("#leg2-down_x5F_knee", 10, {css:{rotation: 25}, ease:Linear.easeNone}, "step5")
    .to("#leg2-down_x5F_boot", 10, {css:{rotation: 45, y: 12, x: 28}, ease:Linear.easeNone}, "step5")
    .to("#hand1", 10, {css:{rotation:"+=38"}, ease:Linear.easeNone}, "step5") 
    .to("#case", 10, {css:{rotation:"+=38"}, ease:Linear.easeNone}, "step5")
    .to("#hand2", 10, {css:{rotation:"-=22"}, ease:Linear.easeNone}, "step5")
    .to("#leg1-down_x5F_knee", 10, {css:{rotation:"-=25"}, ease:Linear.easeNone}, "step5")
    .to("#leg1-down_x5F_boot", 10, {css:{rotation:"-=45", x: 25}, ease:Linear.easeNone}, "step5")

    .to("#leg1", 10, {css:{rotation:"+=27"}, ease:Linear.easeNone}, "step55")
    .to("#leg2", 10, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step55")
    .to("#leg1-down_x5F_knee", 10, {css:{rotation:"-=35"}, ease:Linear.easeNone}, "step55")
    .to("#leg1-down_x5F_boot", 10, {css:{rotation:"-=45", x: 85}, ease:Linear.easeNone}, "step55")
    .to("#hand1", 10, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step55") 
    .to("#case", 10, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step55")
    .to("#hand2", 10, {css:{rotation:"-=23"}, ease:Power0.easeInOut}, "step55")

    .to("#leg1", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step6")
    .to("#leg2", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step6")
    .to("#leg2-down_x5F_knee", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step6")
    .to("#leg2-down_x5F_boot", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step6")
    .to("#hand1", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step6")
    .to("#case", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step6")
    .to("#hand2", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step6")
    .to("#leg1-down_x5F_knee", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step6")
    .to("#leg1-down_x5F_boot", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step6")

    .to("#leg1", 10, {css:{rotation:"-=27"}, ease:Linear.easeNone}, "step65")
    .to("#leg2", 10, {css:{rotation:"+=37"}, ease:Linear.easeNone}, "step65")
    .to("#leg2-down_x5F_knee", 10, {css:{rotation:"-=42"}, ease:Linear.easeNone}, "step65")
    .to("#leg2-down_x5F_boot", 10, {css:{rotation:"-=45", y: "-=45", x: "-=10"}, ease:Linear.easeNone}, "step65")
    .to("#hand1", 10, {css:{rotation:"+=17"}, ease:Linear.easeNone}, "step65") 
    .to("#case", 10, {css:{rotation:"+=17"}, ease:Linear.easeNone}, "step65")
    .to("#hand2", 10, {css:{rotation:"-=23"}, ease:Power0.easeInOut}, "step65")

    .to("#leg1", 10, {css:{rotation:"-=27"}, ease:Power0.easeInOut}, "step7")
    .to("#leg2", 10, {css:{rotation:"+=37"}, ease:Power0.easeInOut}, "step7")
    .to("#leg2-down_x5F_knee", 10, {css:{rotation: 25}, ease:Linear.easeNone}, "step7")
    .to("#leg2-down_x5F_boot", 10, {css:{rotation: 45, y: 12, x: 28}, ease:Linear.easeNone}, "step7")
    .to("#hand1", 10, {css:{rotation:"+=38"}, ease:Linear.easeNone}, "step7") 
    .to("#case", 10, {css:{rotation:"+=38"}, ease:Linear.easeNone}, "step7")
    .to("#hand2", 10, {css:{rotation:"-=22"}, ease:Linear.easeNone}, "step7")
    .to("#leg1-down_x5F_knee", 10, {css:{rotation:"-=25"}, ease:Linear.easeNone}, "step7")
    .to("#leg1-down_x5F_boot", 10, {css:{rotation:"-=45", x: 25}, ease:Linear.easeNone}, "step7")

    .to("#leg1", 10, {css:{rotation:"+=27"}, ease:Linear.easeNone}, "step75")
    .to("#leg2", 10, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step75")
    .to("#leg1-down_x5F_knee", 10, {css:{rotation:"-=35"}, ease:Linear.easeNone}, "step75")
    .to("#leg1-down_x5F_boot", 10, {css:{rotation:"-=45", x: 85}, ease:Linear.easeNone}, "step75")
    .to("#hand1", 10, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step15") 
    .to("#case", 10, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step15")
    .to("#hand2", 10, {css:{rotation:"-=23"}, ease:Power0.easeInOut}, "step75")

    .to("#leg1", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step8")
    .to("#leg2", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step8")
    .to("#leg2-down_x5F_knee", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step8")
    .to("#leg2-down_x5F_boot", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step8")
    .to("#hand1", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step8")
    .to("#case", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step8")
    .to("#hand2", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step8")
    .to("#leg1-down_x5F_knee", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step8")
    .to("#leg1-down_x5F_boot", 10, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step8")
    ;
    var scene2_2 = new ScrollMagic.Scene({triggerElement: "#screen2", duration:1100, offset: 500})
        .setTween(tween)
        .addTo(controller);


    var scene3_1 = new ScrollMagic.Scene({triggerElement: "#screen3", pushFollowers: false, duration: 7500, offset: 300})
        .setPin("#textbox3" )
        .addTo(controller); 

     var scene3_3 = new ScrollMagic.Scene({triggerElement: "#screen3", pushFollowers: false, duration: 7500, offset: 300})
        .setPin("#anywrap" , {pushFollowers: false})
        .addTo(controller);    

    var tween = new TimelineMax()
    .set("#richsmoke2", {css:{rotation:0, y: 0, x: 0, transformOrigin:"50% 50%"}})
    .set("#richsmoke1", {css:{rotation:0, y: 0, x: 0, transformOrigin:"50% 50%"}})
    .set("#richwheelback", {css:{rotation:0, y: 0, x: 0, transformOrigin:"50% 50%"}})
    .set("#richwheelfront", {css:{rotation:0, y: 0, x: 0, transformOrigin:"50% 50%"}})
    .set("#happywheelback", {css:{rotation:0, y: 0, x: 0, transformOrigin:"50% 50%"}})
    .set("#happywheelfront", {css:{rotation:0, y: 0, x: 0, transformOrigin:"50% 50%"}})
    .set("#happyotherwheel1", {css:{rotation:0, y: 0, x: 0, transformOrigin:"50% 50%"}})
    .set("#happyotherwheel2", {css:{rotation:0, y: 0, x: 0, transformOrigin:"50% 50%"}})
    .set("#happyclowd2_1_", {css:{rotation:0, y: 0, x: 0, transformOrigin:"50% 50%"}})
    .set("#happyclowd1", {css:{rotation:0, y: 0, x: 0, transformOrigin:"50% 50%"}})
    .set("#moneyclowd", {css:{rotation:0, svgOrigin:"450 300" }})
    .set("#smilecloud", {css:{rotation:0, svgOrigin:"450 300" }})
    .set("#girlscloud", {css:{rotation:0, svgOrigin:"450 300" }})
    .set("#lamborginicloud", {css:{rotation:0, svgOrigin:"450 300" }})
    .set("#happycar", {css:{autoAlpha:0, y: 0}})

    .fromTo("#textbox3", 5, {x: "54%"}, {x: "0%", ease:Power1.easeOut})
    .fromTo("#richcar", 5, {autoAlpha:0}, {autoAlpha:1, ease: Linear.easeNone})
    .to("#richcar", 40, {y: "+=3", ease:Linear.easeNone}, "richcarmainstep")
    .fromTo("#moneyclowd", 10, {autoAlpha:0, scale:0.3 }, {autoAlpha:1, scale:0.8 , ease: Linear.easeNone}, "richcarmainstep")
    .to("#moneyclowd", 40, {scale:1.0, ease:Linear.easeNone}, "richcarmainstep+=10")
    .fromTo("#girlscloud", 10, {autoAlpha:0, scale:0.3 }, {autoAlpha:1, scale:0.8 , ease: Linear.easeNone}, "richcarmainstep+=15")
    .to("#girlscloud", 25, {scale:1.0, ease:Linear.easeNone}, "richcarmainstep+=25")
    .fromTo("#lamborginicloud", 10, {autoAlpha:0, scale:0.3 }, {autoAlpha:1, scale:0.8 , ease: Linear.easeNone}, "richcarmainstep+=30")
    .to("#lamborginicloud", 10, {scale:1.0, ease:Linear.easeNone}, "richcarmainstep+=40")

    .fromTo("#richsmoke2", 40, {autoAlpha:1, scale:1.0}, {autoAlpha:0, scale:1.5, ease: Linear.easeNone}, "richcarmainstep")
    .fromTo("#richsmoke1", 40, {autoAlpha:1, scale:1.0, x: 10}, {autoAlpha:0.5, scale:1.3, x: 0,  ease: Linear.easeNone}, "richcarmainstep")
    .fromTo("#richwheelback", 5, {scaleY:1.0}, {scaleY:1.1, ease: Linear.easeNone}, "richcarmainstep")
    .to("#richwheelback", 5, {scaleY:1.0, ease:Linear.easeNone}, "richcarmainstep+=5")
    .to("#richwheelback", 5, {scaleX:1.1, ease:Linear.easeNone}, "richcarmainstep+=10")
    .to("#richwheelback", 5, {scaleX:1.0, ease:Linear.easeNone}, "richcarmainstep+=15")
    .to("#richwheelback", 5, {scaleY:1.1, ease:Linear.easeNone}, "richcarmainstep+=20")
    .to("#richwheelback", 5, {scaleY:1.0, ease:Linear.easeNone}, "richcarmainstep+=25")
    .to("#richwheelback", 5, {scaleX:1.1, ease:Linear.easeNone}, "richcarmainstep+=30")
    .to("#richwheelback", 5, {scaleX:1.0, ease:Linear.easeNone}, "richcarmainstep+=35")

    .fromTo("#richwheelfront", 5, {scaleY:1.0}, {scaleY:0.9, ease: Linear.easeNone}, "richcarmainstep")
    .to("#richwheelfront", 5, {scaleY:1.1, ease:Linear.easeNone}, "richcarmainstep+=5")
    .to("#richwheelfront", 5, {scaleX:1.0, ease:Linear.easeNone}, "richcarmainstep+=10")
    .to("#richwheelfront", 5, {scaleX:1.1, ease:Linear.easeNone}, "richcarmainstep+=15")
    .to("#richwheelfront", 5, {scaleY:1.0, ease:Linear.easeNone}, "richcarmainstep+=20")
    .to("#richwheelfront", 5, {scaleY:1.1, ease:Linear.easeNone}, "richcarmainstep+=25")
    .to("#richwheelfront", 5, {scaleX:1.0, ease:Linear.easeNone}, "richcarmainstep+=30")
    .to("#richwheelfront", 5, {scaleX:1.1, ease:Linear.easeNone}, "richcarmainstep+=35")



    .to("#moneyclowd", 5, {autoAlpha:0, ease:Linear.easeNone}, "richout")
    .to("#richcar", 5, {autoAlpha:0, ease:Linear.easeNone}, "richout")
    .fromTo("#happycar", 5, {autoAlpha:0 }, {autoAlpha:1, ease: Linear.easeNone})
    .to("#happycar", 40, {y: "+=3", ease:Linear.easeNone}, "happycarmainstep")
    .fromTo("#smilecloud", 10, {autoAlpha:0, scale:0.3 }, {autoAlpha:1, scale:0.8 , ease: Linear.easeNone}, "happycarmainstep+=10")
    .to("#smilecloud", 20, {scale:1.0, ease:Linear.easeNone}, "happycarmainstep+=20")


    .fromTo("#happyclowd1", 8, {autoAlpha:1, scale:1.0, x: 20}, {autoAlpha:0, scale:1.5, x: "-=10", ease: Linear.easeNone}, "happycarmainstep")
    .fromTo("#happyclowd2_1_", 12, {autoAlpha:1, scale:1.0, x: 20}, {autoAlpha:0, scale:1.3, x: 0,  ease: Linear.easeNone}, "happycarmainstep")
    .fromTo("#happyclowd1", 10, {autoAlpha:1, scale:0.05, x: 85}, {autoAlpha:0, scale:1.5, x: "-=85", ease: Linear.easeNone}, "happycarmainstep+=8")
    .fromTo("#happyclowd2_1_", 10, {autoAlpha:1, scale:0.05, x: 35}, {autoAlpha:0, scale:1.3, x: 0,  ease: Linear.easeNone}, "happycarmainstep+=12")
    .fromTo("#happyclowd1", 12, {autoAlpha:1, scale:0.05, x: 85}, {autoAlpha:0, scale:1.5, x: "-=85", ease: Linear.easeNone}, "happycarmainstep+=18")
    .fromTo("#happyclowd2_1_", 10, {autoAlpha:1, scale:0.05, x: 35}, {autoAlpha:0, scale:1.3, x: 0,  ease: Linear.easeNone}, "happycarmainstep+=22")
    .fromTo("#happyclowd1", 12, {autoAlpha:1, scale:0.05, x: 85}, {autoAlpha:0, scale:1.5, x: "-=85", ease: Linear.easeNone}, "happycarmainstep+=30")
    .fromTo("#happyclowd2_1_", 10, {autoAlpha:1, scale:0.05, x: 35}, {autoAlpha:0, scale:1.3, x: 0,  ease: Linear.easeNone}, "happycarmainstep+=33")
   
    .fromTo("#happywheelback", 5, {scaleX:1.0}, {scaleX:1.1, ease: Linear.easeNone}, "happycarmainstep")
    .to("#happywheelback", 5, {scaleX:1.0, ease:Linear.easeNone}, "happycarmainstep+=5")
    .to("#happywheelback", 5, {scaleX:1.05, ease:Linear.easeNone}, "happycarmainstep+=10")
    .to("#happywheelback", 5, {scaleX:1.0, ease:Linear.easeNone}, "happycarmainstep+=15")
    .to("#happywheelback", 5, {scaleY:1.05, ease:Linear.easeNone}, "happycarmainstep+=20")
    .to("#happywheelback", 5, {scaleY:1.0, ease:Linear.easeNone}, "happycarmainstep+=25")
    .to("#happywheelback", 5, {scaleX:1.05, ease:Linear.easeNone}, "happycarmainstep+=30")
    .to("#happywheelback", 5, {scaleX:1.0, ease:Linear.easeNone}, "happycarmainstep+=35")

    .fromTo("#happywheelfront", 5, {scaleX:1.0}, {scaleX:0.9, ease: Linear.easeNone}, "happycarmainstep")
    .to("#happywheelfront", 5, {scaleX:1.05, ease:Linear.easeNone}, "happycarmainstep+=5")
    .to("#happywheelfront", 5, {scaleX:1.0, ease:Linear.easeNone}, "happycarmainstep+=10")
    .to("#happywheelfront", 5, {scaleY:1.05, ease:Linear.easeNone}, "happycarmainstep+=15")
    .to("#happywheelfront", 5, {scaleY:1.0, ease:Linear.easeNone}, "happycarmainstep+=20")
    .to("#happywheelfront", 5, {scaleX:1.05, ease:Linear.easeNone}, "happycarmainstep+=25")
    .to("#happywheelfront", 5, {scaleX:1.0, ease:Linear.easeNone}, "happycarmainstep+=30")
    .to("#happywheelfront", 5, {scaleX:1.05, ease:Linear.easeNone}, "happycarmainstep+=35")

    .fromTo("#happyotherwheel2", 5, {scaleY:1.0}, {scaleY:1.01, ease: Linear.easeNone}, "happycarmainstep")
    .to("#happyotherwheel2", 5, {scaleY:1.0, ease:Linear.easeNone}, "happycarmainstep+=5")
    .to("#happyotherwheel2", 5, {scaleY:1.01, ease:Linear.easeNone}, "happycarmainstep+=10")
    .to("#happyotherwheel2", 5, {scaleY:1.0, ease:Linear.easeNone}, "happycarmainstep+=15")
    .to("#happyotherwheel2", 5, {scaleY:1.01, ease:Linear.easeNone}, "happycarmainstep+=20")
    .to("#happyotherwheel2", 5, {scaleY:1.0, ease:Linear.easeNone}, "happycarmainstep+=25")
    .to("#happyotherwheel2", 5, {scaleY:1.01, ease:Linear.easeNone}, "happycarmainstep+=30")
    .to("#happyotherwheel2", 5, {scaleY:1.0, ease:Linear.easeNone}, "happycarmainstep+=35")

    .fromTo("#happyotherwheel1", 5, {scaleY:1.0}, {scaleY:0.98, ease: Linear.easeNone}, "happycarmainstep")
    .to("#happyotherwheel1", 5, {scaleY:1.01, ease:Linear.easeNone}, "happycarmainstep+=5")
    .to("#happyotherwheel1", 5, {scaleY:1.0, ease:Linear.easeNone}, "happycarmainstep+=10")
    .to("#happyotherwheel1", 5, {scaleY:1.01, ease:Linear.easeNone}, "happycarmainstep+=15")
    .to("#happyotherwheel1", 5, {scaleY:1.0, ease:Linear.easeNone}, "happycarmainstep+=20")
    .to("#happyotherwheel1", 5, {scaleY:1.01, ease:Linear.easeNone}, "happycarmainstep+=25")
    .to("#happyotherwheel1", 5, {scaleY:1.0, ease:Linear.easeNone}, "happycarmainstep+=30")
    .to("#happyotherwheel1", 5, {scaleY:1.01, ease:Linear.easeNone}, "happycarmainstep+=35")

    ;
    var scene3_2 = new ScrollMagic.Scene({triggerElement: "#screen3", duration:7500, offset: 500})
        .setTween(tween)
        .addTo(controller);         

 






};


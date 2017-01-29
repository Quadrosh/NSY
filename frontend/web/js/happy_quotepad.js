$(window).load(function() {
    $("#loader").delay(400).fadeOut("slow");
});

$(document).ready(function() {


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


    var anishowTl = new TimelineMax();
    anishowTl.set(".anishow",  { autoAlpha: 0 });





    if (document.getElementById('slideshow')) {
        var items = document.querySelectorAll('.quotepic'), length = items.length;
        var duration = 5;
        var looptl = new TimelineMax({ paused:true, repeat: -1, delay: duration * 0.5 });
        for (var iter = 0; iter < length; iter += 1) {
            looptl.to(".anishow", duration * 0.3,  {autoAlpha: 0, ease:Power1.easeInOut})
                .to("#avatar_img", duration * 0.4,  { autoAlpha: 1, ease:Power1.easeInOut})
                .to("#text1", duration * 0.5,  { autoAlpha: 1, ease:Power1.easeInOut})
                .to("#text2", duration * 0.5,  { autoAlpha: 1, ease:Power1.easeInOut})
                .to("#text3", duration * 0.5,  { autoAlpha: 1, ease:Power1.easeInOut})
                .to("#text4", duration * 0.5,  { autoAlpha: 1, ease:Power1.easeInOut})
                .to("#avatar_info", duration * 0.5,  { autoAlpha: 1, ease:Power1.easeInOut})
                .from(items[iter], duration * 1.5, { x: -20, autoAlpha: 0, ease: Power2.easeInOut })
                .to(items[iter], duration * 1.5, { x: 0, autoAlpha: 0, ease: Power2.easeInOut })
                .to(".anishow", duration * 0.5,  {autoAlpha: 0, ease:Power1.easeInOut},"end");
        }
        looptl.play();
    }



    if (document.getElementById('run')) {
        var carrot_tl = new TimelineMax({repeat:-1})
        .fromTo("#carrot", 2, {rotation:"0", x: "-=50%", transformOrigin:"80% 7%"}, {x: "50%", rotation:"-=75", ease: Linear.easeNone}, "carrotstep1")
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
            .to("#carrot_x5F_green", 1, {rotation:"0", x: "-=20", ease:Linear.easeNone}, "carrotstep4")
            ;


        var durationRun = 0.2;


        var q2RunTl = new TimelineMax({paused: true, repeat: -1})
            .set("#leg1", {css:{rotation:0, y: 0, x: 0, transformOrigin:"80% 7%"}})
            .set("#leg2", {css:{rotation:0, y: 0, x: 0, transformOrigin:"17% 11%"}})
            .set("#leg2-down_x5F_knee", {css:{rotation:0, y: 0, x: 0, transformOrigin:"10% 25%"}})
            .set("#leg2-down_x5F_boot", {css:{rotation:0, y: 0, x: 0, transformOrigin:"-290% -20%"}})
            .set("#hand1", {css:{rotation:0, y: 0, x: 0, transformOrigin:"17% 11%"}})
            .set("#case", {css:{rotation:0, y: 0, x: 0, transformOrigin:"-5% -140%"}})
            .set("#hand2", {css:{rotation:0, y: 0, x: 0, transformOrigin:"80% 7%"}})
            .set("#leg1-down_x5F_knee", {css:{rotation:0, y: 0, x: 0, transformOrigin:"75% 4%"}})
            .set("#leg1-down_x5F_boot", {css:{rotation:0, y: 0, x: 0, transformOrigin:"90% -90%"}})

            .to("#leg1", durationRun, {css:{rotation:"-=27"}, ease:Linear.easeNone}, "step05")
            .to("#leg2", durationRun, {css:{rotation:"+=37"}, ease:Linear.easeNone}, "step05")
            .to("#leg2-down_x5F_knee", durationRun, {css:{rotation:"-=42"}, ease:Linear.easeNone}, "step05")
            .to("#leg2-down_x5F_boot", durationRun, {css:{rotation:"-=45", y: "-=45", x: "-=10"}, ease:Linear.easeNone}, "step05")
            .to("#hand1", durationRun, {css:{rotation:"+=17"}, ease:Linear.easeNone}, "step05")
            .to("#case", durationRun, {css:{rotation:"+=17"}, ease:Linear.easeNone}, "step05")
            .to("#hand2", durationRun, {css:{rotation:"-=23"}, ease:Power0.easeInOut}, "step05")

            .to("#leg1", durationRun, {css:{rotation:"-=27"}, ease:Power0.easeInOut}, "step1")
            .to("#leg2", durationRun, {css:{rotation:"+=37"}, ease:Power0.easeInOut}, "step1")
            .to("#leg2-down_x5F_knee", durationRun, {css:{rotation: 25}, ease:Linear.easeNone}, "step1")
            .to("#leg2-down_x5F_boot", durationRun, {css:{rotation: 45, y: 12, x: 28}, ease:Linear.easeNone}, "step1")
            .to("#hand1", durationRun, {css:{rotation:"+=38"}, ease:Linear.easeNone}, "step1")
            .to("#case", durationRun, {css:{rotation:"+=38"}, ease:Linear.easeNone}, "step1")
            .to("#hand2", durationRun, {css:{rotation:"-=22"}, ease:Linear.easeNone}, "step1")
            .to("#leg1-down_x5F_knee", durationRun, {css:{rotation:"-=25"}, ease:Linear.easeNone}, "step1")
            .to("#leg1-down_x5F_boot", durationRun, {css:{rotation:"-=45", x: 25}, ease:Linear.easeNone}, "step1")

            .to("#leg1", durationRun, {css:{rotation:"+=27"}, ease:Linear.easeNone}, "step15")
            .to("#leg2", durationRun, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step15")
            .to("#leg1-down_x5F_knee", durationRun, {css:{rotation:"-=35"}, ease:Linear.easeNone}, "step15")
            .to("#leg1-down_x5F_boot", durationRun, {css:{rotation:"-=45", x: 85}, ease:Linear.easeNone}, "step15")
            .to("#hand1", durationRun, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step15")
            .to("#case", durationRun, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step15")
            .to("#hand2", durationRun, {css:{rotation:"-=23"}, ease:Power0.easeInOut}, "step15")

            .to("#leg1", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step2")
            .to("#leg2", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step2")
            .to("#leg2-down_x5F_knee", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step2")
            .to("#leg2-down_x5F_boot", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step2")
            .to("#hand1", durationRun, {css:{rotation: 0, y: 0, x: 0}, ease:Linear.easeNone}, "step2")
            .to("#case", durationRun, {css:{rotation: 0, y: 0, x: 0}, ease:Linear.easeNone}, "step2")
            .to("#hand2", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step2")
            .to("#leg1-down_x5F_knee", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step2")
            .to("#leg1-down_x5F_boot", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step2")

            .to("#leg1", durationRun, {css:{rotation:"-=27"}, ease:Linear.easeNone}, "step25")
            .to("#leg2", durationRun, {css:{rotation:"+=37"}, ease:Linear.easeNone}, "step25")
            .to("#leg2-down_x5F_knee", durationRun, {css:{rotation:"-=42"}, ease:Linear.easeNone}, "step25")
            .to("#leg2-down_x5F_boot", durationRun, {css:{rotation:"-=45", y: "-=45", x: "-=10"}, ease:Linear.easeNone}, "step25")
            .to("#hand1", durationRun, {css:{rotation:"+=17"}, ease:Linear.easeNone}, "step25")
            .to("#case", durationRun, {css:{rotation:"+=17"}, ease:Linear.easeNone}, "step25")
            .to("#hand2", durationRun, {css:{rotation:"-=23"}, ease:Power0.easeInOut}, "step25")

            .to("#leg1", durationRun, {css:{rotation:"-=27"}, ease:Power0.easeInOut}, "step3")
            .to("#leg2", durationRun, {css:{rotation:"+=37"}, ease:Power0.easeInOut}, "step3")
            .to("#leg2-down_x5F_knee", durationRun, {css:{rotation: 25}, ease:Linear.easeNone}, "step3")
            .to("#leg2-down_x5F_boot", durationRun, {css:{rotation: 45, y: 12, x: 28}, ease:Linear.easeNone}, "step3")
            .to("#hand1", durationRun, {css:{rotation:"+=38"}, ease:Linear.easeNone}, "step3")
            .to("#case", durationRun, {css:{rotation:"+=38"}, ease:Linear.easeNone}, "step3")
            .to("#hand2", durationRun, {css:{rotation:"-=22"}, ease:Linear.easeNone}, "step3")
            .to("#leg1-down_x5F_knee", durationRun, {css:{rotation:"-=25"}, ease:Linear.easeNone}, "step3")
            .to("#leg1-down_x5F_boot", durationRun, {css:{rotation:"-=45", x: 25}, ease:Linear.easeNone}, "step3")

            .to("#leg1", durationRun, {css:{rotation:"+=27"}, ease:Linear.easeNone}, "step35")
            .to("#leg2", durationRun, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step35")
            .to("#leg1-down_x5F_knee", durationRun, {css:{rotation:"-=35"}, ease:Linear.easeNone}, "step35")
            .to("#leg1-down_x5F_boot", durationRun, {css:{rotation:"-=45", x: 85}, ease:Linear.easeNone}, "step35")
            .to("#hand1", durationRun, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step35")
            .to("#case", durationRun, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step35")
            .to("#hand2", durationRun, {css:{rotation:"-=23"}, ease:Power0.easeInOut}, "step35")

            .to("#leg1", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step4")
            .to("#leg2", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step4")
            .to("#leg2-down_x5F_knee", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step4")
            .to("#leg2-down_x5F_boot", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step4")
            .to("#hand1", durationRun, {css:{rotation: 0, y: 0, x: 0}, ease:Linear.easeNone}, "step4")
            .to("#case", durationRun, {css:{rotation: 0, y: 0, x: 0}, ease:Linear.easeNone}, "step4")
            .to("#hand2", durationRun, {css:{rotation: 0, y: 0, x: 0}, ease:Linear.easeNone}, "step4")
            .to("#leg1-down_x5F_knee", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step4")
            .to("#leg1-down_x5F_boot", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step4")

            .to("#leg1", durationRun, {css:{rotation:"-=27"}, ease:Linear.easeNone}, "step45")
            .to("#leg2", durationRun, {css:{rotation:"+=37"}, ease:Linear.easeNone}, "step45")
            .to("#leg2-down_x5F_knee", durationRun, {css:{rotation:"-=42"}, ease:Linear.easeNone}, "step45")
            .to("#leg2-down_x5F_boot", durationRun, {css:{rotation:"-=45", y: "-=45", x: "-=10"}, ease:Linear.easeNone}, "step45")
            .to("#hand1", durationRun, {css:{rotation:"+=17"}, ease:Linear.easeNone}, "step45")
            .to("#case", durationRun, {css:{rotation:"+=17"}, ease:Linear.easeNone}, "step45")
            .to("#hand2", durationRun, {css:{rotation:"-=23"}, ease:Power0.easeInOut}, "step45")

            .to("#leg1", durationRun, {css:{rotation:"-=27"}, ease:Power0.easeInOut}, "step5")
            .to("#leg2", durationRun, {css:{rotation:"+=37"}, ease:Power0.easeInOut}, "step5")
            .to("#leg2-down_x5F_knee", durationRun, {css:{rotation: 25}, ease:Linear.easeNone}, "step5")
            .to("#leg2-down_x5F_boot", durationRun, {css:{rotation: 45, y: 12, x: 28}, ease:Linear.easeNone}, "step5")
            .to("#hand1", durationRun, {css:{rotation:"+=38"}, ease:Linear.easeNone}, "step5")
            .to("#case", durationRun, {css:{rotation:"+=38"}, ease:Linear.easeNone}, "step5")
            .to("#hand2", durationRun, {css:{rotation:"-=22"}, ease:Linear.easeNone}, "step5")
            .to("#leg1-down_x5F_knee", durationRun, {css:{rotation:"-=25"}, ease:Linear.easeNone}, "step5")
            .to("#leg1-down_x5F_boot", durationRun, {css:{rotation:"-=45", x: 25}, ease:Linear.easeNone}, "step5")

            .to("#leg1", durationRun, {css:{rotation:"+=27"}, ease:Linear.easeNone}, "step55")
            .to("#leg2", durationRun, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step55")
            .to("#leg1-down_x5F_knee", durationRun, {css:{rotation:"-=35"}, ease:Linear.easeNone}, "step55")
            .to("#leg1-down_x5F_boot", durationRun, {css:{rotation:"-=45", x: 85}, ease:Linear.easeNone}, "step55")
            .to("#hand1", durationRun, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step55")
            .to("#case", durationRun, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step55")
            .to("#hand2", durationRun, {css:{rotation:"-=23"}, ease:Power0.easeInOut}, "step55")

            .to("#leg1", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step6")
            .to("#leg2", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step6")
            .to("#leg2-down_x5F_knee", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step6")
            .to("#leg2-down_x5F_boot", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step6")
            .to("#hand1", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step6")
            .to("#case", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step6")
            .to("#hand2", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step6")
            .to("#leg1-down_x5F_knee", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step6")
            .to("#leg1-down_x5F_boot", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step6")

            .to("#leg1", durationRun, {css:{rotation:"-=27"}, ease:Linear.easeNone}, "step65")
            .to("#leg2", durationRun, {css:{rotation:"+=37"}, ease:Linear.easeNone}, "step65")
            .to("#leg2-down_x5F_knee", durationRun, {css:{rotation:"-=42"}, ease:Linear.easeNone}, "step65")
            .to("#leg2-down_x5F_boot", durationRun, {css:{rotation:"-=45", y: "-=45", x: "-=10"}, ease:Linear.easeNone}, "step65")
            .to("#hand1", durationRun, {css:{rotation:"+=17"}, ease:Linear.easeNone}, "step65")
            .to("#case", durationRun, {css:{rotation:"+=17"}, ease:Linear.easeNone}, "step65")
            .to("#hand2", durationRun, {css:{rotation:"-=23"}, ease:Power0.easeInOut}, "step65")

            .to("#leg1", durationRun, {css:{rotation:"-=27"}, ease:Power0.easeInOut}, "step7")
            .to("#leg2", durationRun, {css:{rotation:"+=37"}, ease:Power0.easeInOut}, "step7")
            .to("#leg2-down_x5F_knee", durationRun, {css:{rotation: 25}, ease:Linear.easeNone}, "step7")
            .to("#leg2-down_x5F_boot", durationRun, {css:{rotation: 45, y: 12, x: 28}, ease:Linear.easeNone}, "step7")
            .to("#hand1", durationRun, {css:{rotation:"+=38"}, ease:Linear.easeNone}, "step7")
            .to("#case", durationRun, {css:{rotation:"+=38"}, ease:Linear.easeNone}, "step7")
            .to("#hand2", durationRun, {css:{rotation:"-=22"}, ease:Linear.easeNone}, "step7")
            .to("#leg1-down_x5F_knee", durationRun, {css:{rotation:"-=25"}, ease:Linear.easeNone}, "step7")
            .to("#leg1-down_x5F_boot", durationRun, {css:{rotation:"-=45", x: 25}, ease:Linear.easeNone}, "step7")

            .to("#leg1", durationRun, {css:{rotation:"+=27"}, ease:Linear.easeNone}, "step75")
            .to("#leg2", durationRun, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step75")
            .to("#leg1-down_x5F_knee", durationRun, {css:{rotation:"-=35"}, ease:Linear.easeNone}, "step75")
            .to("#leg1-down_x5F_boot", durationRun, {css:{rotation:"-=45", x: 85}, ease:Linear.easeNone}, "step75")
            .to("#hand1", durationRun, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step15")
            .to("#case", durationRun, {css:{rotation:"-=37"}, ease:Linear.easeNone}, "step15")
            .to("#hand2", durationRun, {css:{rotation:"-=23"}, ease:Power0.easeInOut}, "step75")

            .to("#leg1", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step8")
            .to("#leg2", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step8")
            .to("#leg2-down_x5F_knee", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step8")
            .to("#leg2-down_x5F_boot", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step8")
            .to("#hand1", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step8")
            .to("#case", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step8")
            .to("#hand2", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step8")
            .to("#leg1-down_x5F_knee", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step8")
            .to("#leg1-down_x5F_boot", durationRun, {css:{rotation:0, y: 0, x: 0}, ease:Linear.easeNone}, "step8")
        ;
        var q2RunMainTl = new TimelineMax()
            .set("#textbox",  {x: "-=54%"})
            .to("#textbox", durationRun * 20,  {x: "+=54%", ease:Power1.easeInOut},"6")
            .add(q2RunTl.play(),"startrun")
            .fromTo("#donkey", durationRun * 12, {x:"-=0%" ,autoAlpha:0}, {x: "-=54%",autoAlpha:1, ease: Power1.easeInOut},"startrun")
        ;
    }



    if (document.getElementById('cars')) {
        var durationCars = 1;


        var q3ReachCarTl = new TimelineMax({paused: true})

            .set("#richcar", {y: 0, x: 0, transformOrigin:"50% 50%"})
            .set("#richsmoke2", {css:{rotation:0, y: 0, x: 0, transformOrigin:"50% 50%"}})
            .set("#richsmoke1", {css:{rotation:0, y: 0, x: 0, transformOrigin:"50% 50%"}})
            .set("#richwheelback", {css:{rotation:0, y: 0, x: 0, transformOrigin:"50% 50%"}})
            .set("#richwheelfront", {css:{rotation:0, y: 0, x: 0, transformOrigin:"50% 50%"}})

            .set("#moneyclowd", {css:{rotation:0, svgOrigin:"400 50" }})

            //.set("#girlscloud", {css:{rotation:0,  y: 0, x: 100, svgOrigin:"200 0" }})
            .set("#lamborginicloud", {css:{rotation:0, svgOrigin:"0 100" }})



            .fromTo("#richcar", durationCars * 1, {autoAlpha:0, x: "-=200"}, {autoAlpha:1,x:0, ease: Power1.easeOut})

            .fromTo("#moneyclowd", durationCars* 5, {autoAlpha:0, x:"-=50", scale:0.3 }, {autoAlpha:1, x:10, scale:1.0 , ease: Power3.easeInOut}, "richcarmainstep")
            .fromTo("#girlscloud", durationCars*3.5, {autoAlpha:0, scale:0.3 }, {autoAlpha:1, scale:1.0 , ease: Power3.easeInOut}, durationCars*5)
            .fromTo("#lamborginicloud", durationCars*2, {autoAlpha:0, scale:0.3 }, {autoAlpha:1, scale:1.0 , ease: Power3.easeInOut}, durationCars*10)
            ;

        var q3ReachCarTlSmoke = new TimelineMax({paused: true, repeat: 4.5})
            .fromTo("#richsmoke2", durationCars * 2, {autoAlpha:1, scale:1.0}, {autoAlpha:0, scale:1.5, ease: Linear.easeNone}, "start")
            .to("#richsmoke2", durationCars * 2, {autoAlpha:0.5, scale:1.0},  durationCars * 2)

            .fromTo("#richsmoke1", durationCars * 1, {autoAlpha:1, rotation:0, scale:0.5, x: 20}, {autoAlpha:0, rotation:-30, scale:1.6, x: "-=20",  ease: Linear.easeNone}, "start")
            .fromTo("#richsmoke1", durationCars * 1, {autoAlpha:0.6, rotation:0, scale:0.7, x: 15}, {autoAlpha:0, rotation:-35, scale:1.6, x: "-=25",  ease: Linear.easeNone},durationCars * 1)
            .fromTo("#richsmoke1", durationCars * 1, {autoAlpha:0.8, rotation:0, scale:0.6, x:10}, {autoAlpha:0, rotation:-25, scale:1.6, x: "-=30",  ease: Linear.easeNone},durationCars * 2)
            .fromTo("#richsmoke1", durationCars * 1, {autoAlpha:0.9, rotation:0, scale:0.8, x: 12}, {autoAlpha:0,rotation:-40,  scale:1.6, x: "-=40",  ease: Linear.easeNone},durationCars * 3)

            ;
        var q3ReachCarTlWheels = new TimelineMax({paused: true, repeat: 2})
            .fromTo("#richwheelback", durationCars * 0.5, {scaleY:1.0,scaleX:1.0}, {scaleY:1.1,scaleX:1.0, ease: Linear.easeNone}, "richcarmainstep")
            .to("#richwheelback", durationCars * 0.5, {scaleY:1.0, ease:Linear.easeNone}, durationCars*0.5)
            .to("#richwheelback", durationCars * 0.5, {scaleX:1.1, ease:Linear.easeNone}, durationCars)
            .to("#richwheelback", durationCars * 0.5, {scaleX:1.0, ease:Linear.easeNone}, durationCars*1.5)
            .to("#richwheelback", durationCars * 0.5, {scaleY:1.1, ease:Linear.easeNone}, durationCars*2)
            .to("#richwheelback", durationCars * 0.5, {scaleY:1.0, ease:Linear.easeNone}, durationCars*2.5)
            .to("#richwheelback", durationCars * 0.5, {scaleX:1.1, ease:Linear.easeNone}, durationCars*3)
            .to("#richwheelback", durationCars * 0.5, {scaleX:1.0, ease:Linear.easeNone}, durationCars*3.5)

            .to("#richwheelback", durationCars * 0.5, {scaleY:1.0, ease:Linear.easeNone}, durationCars*4)
            .to("#richwheelback", durationCars * 0.5, {scaleX:1.1, ease:Linear.easeNone}, durationCars*4.5)
            .to("#richwheelback", durationCars * 0.5, {scaleX:1.0, ease:Linear.easeNone}, durationCars*5)
            .to("#richwheelback", durationCars * 0.5, {scaleY:1.1, ease:Linear.easeNone}, durationCars*5.5)
            .to("#richwheelback", durationCars * 0.5, {scaleY:1.0, ease:Linear.easeNone}, durationCars*6)
            .to("#richwheelback", durationCars * 0.5, {scaleX:1.1, ease:Linear.easeNone}, durationCars*6.5)
            .to("#richwheelback", durationCars * 0.5, {scaleY:1.0,scaleX:1.0, ease:Linear.easeNone}, durationCars*7)

            .fromTo("#richwheelfront", durationCars * 0.5, {scaleY:1.0,scaleX:1.0}, {scaleY:0.98,scaleX:1.0, ease: Linear.easeNone}, "richcarmainstep")
            .to("#richwheelfront", durationCars * 0.5, {scaleY:1.1, ease:Linear.easeNone}, durationCars*0.5)
            .to("#richwheelfront", durationCars * 0.5, {scaleX:1.0, ease:Linear.easeNone}, durationCars)
            .to("#richwheelfront", durationCars * 0.5, {scaleX:1.1, ease:Linear.easeNone}, durationCars*1.5)
            .to("#richwheelfront", durationCars * 0.5, {scaleY:1.0, ease:Linear.easeNone}, durationCars*2)
            .to("#richwheelfront", durationCars * 0.5, {scaleY:1.1, ease:Linear.easeNone}, durationCars*2.5)
            .to("#richwheelfront", durationCars * 0.5, {scaleX:1.0, ease:Linear.easeNone}, durationCars*3)
            .to("#richwheelfront", durationCars * 0.5, {scaleX:1.1, ease:Linear.easeNone}, durationCars*3.5)

            .to("#richwheelfront", durationCars * 0.5, {scaleY:1.05, ease:Linear.easeNone}, durationCars*4)
            .to("#richwheelfront", durationCars * 0.5, {scaleX:1.0, ease:Linear.easeNone}, durationCars*4.5)
            .to("#richwheelfront", durationCars * 0.5, {scaleX:1.1, ease:Linear.easeNone}, durationCars*5)
            .to("#richwheelfront", durationCars * 0.5, {scaleY:1.0, ease:Linear.easeNone}, durationCars*5.5)
            .to("#richwheelfront", durationCars * 0.5, {scaleY:1.1, ease:Linear.easeNone}, durationCars*6)
            .to("#richwheelfront", durationCars * 0.5, {scaleX:1.05, ease:Linear.easeNone}, durationCars*6.5)
            .to("#richwheelfront", durationCars * 0.5, {scaleY:1.0,scaleX:1.0, ease:Linear.easeNone}, durationCars*7)
            ;

        var q3ReachCarTlEnd = new TimelineMax({paused: true})
            .to("#moneyclowd", durationCars * 4.5, {autoAlpha:0, ease:Linear.easeNone}, "richout")
            .to("#richcar", durationCars * 4.5, {autoAlpha:0, ease:Linear.easeNone}, "richout")
            .to("#girlscloud", durationCars * 4.5, {autoAlpha:0, ease:Linear.easeNone}, "richout")
            .to("#lamborginicloud", durationCars * 4.5, {autoAlpha:0, ease:Linear.easeNone}, "richout")
            ;

        var q3HappyCarTl = new TimelineMax({paused: true})

            .set("#happycar", {css:{autoAlpha:0, y: 0, x:0}})
            .set("#happywheelback", {css:{rotation:0, y: 0, x: 0, transformOrigin:"50% 50%"}})
            .set("#happywheelfront", {css:{rotation:0, y: 0, x: 0, transformOrigin:"50% 50%"}})
            .set("#happyotherwheel1", {css:{rotation:0, y: 0, x: 0, transformOrigin:"50% 50%"}})
            .set("#happyotherwheel2", {css:{rotation:0, y: 0, x: 0, transformOrigin:"50% 50%"}})
            .set("#happyclowd2_1_", {css:{rotation:0, y: 30, x: 0, transformOrigin:"50% 50%"}})
            .set("#happyclowd1", {css:{rotation:0, y: 30, x: 0, transformOrigin:"50% 50%"}})
            .set("#smilecloud", {css:{rotation:0, svgOrigin:"550 50" }})

            .fromTo("#happycar", durationCars * 1, {autoAlpha:0,x: "-=300" }, {autoAlpha:1,x:0, ease: Power1.easeOut})
            .to("#happycar", durationCars * 2, {y: "+=3", ease:Linear.easeNone}, "happycarmainstep")
            .fromTo("#smilecloud", durationCars*3, {autoAlpha:0, scale:0.3 }, {autoAlpha:1, scale:1 , ease: Power1.easeOut}, durationCars*1)
        ;

        var q3HappyCarTlsmile = new TimelineMax({paused: true, repeat: 2})
            .fromTo("#smilemouth", durationCars * 5, {scale:1.0, x: 0,ease:Linear.easeNone}, {scale:1.3,x: "-=18", ease:Linear.easeNone})
            .to("#smilemouth", durationCars * 5, {scale:1.0,x: 0, ease:Linear.easeNone})
        ;

        var q3HappyCarTlsmoke = new TimelineMax({paused: true, repeat: 5})
            .fromTo("#happyclowd1", durationCars * 0.8, {autoAlpha:1, scale:1.0, x: 20}, {autoAlpha:0, scale:1.5, x: "-=10", ease: Linear.easeNone}, "happycarmainstep")
            .fromTo("#happyclowd2_1_", durationCars * 1.2, {autoAlpha:1, scale:1.0, x: 20}, {autoAlpha:0, scale:1.3, x: 0,  ease: Linear.easeNone}, "happycarmainstep")
            .fromTo("#happyclowd1", durationCars, {autoAlpha:1, scale:0.05, x: 85}, {autoAlpha:0, scale:1.5, x: "-=85", ease: Linear.easeNone}, durationCars*0.8)
            .fromTo("#happyclowd2_1_", durationCars, {autoAlpha:1, scale:0.05, x: 35}, {autoAlpha:0, scale:1.3, x: 0,  ease: Linear.easeNone}, durationCars*1.2)
            .fromTo("#happyclowd1", durationCars * 1.2, {autoAlpha:1, scale:0.05, x: 85}, {autoAlpha:0, scale:1.5, x: "-=85", ease: Linear.easeNone}, durationCars*1.8)
            .fromTo("#happyclowd2_1_", durationCars, {autoAlpha:1, scale:0.05, x: 35}, {autoAlpha:0, scale:1.3, x: 0,  ease: Linear.easeNone}, durationCars*2.2)
            .fromTo("#happyclowd1", durationCars * 1.2, {autoAlpha:1, scale:0.05, x: 85}, {autoAlpha:0, scale:1.5, x: "-=85", ease: Linear.easeNone}, durationCars*3)
            .fromTo("#happyclowd2_1_", durationCars, {autoAlpha:1, scale:0.05, x: 35}, {autoAlpha:0, scale:1.3, x: 0,  ease: Linear.easeNone}, durationCars*3.3)
        ;
        var q3HappyCarTlwheel = new TimelineMax({paused: true, repeat: 5})
            .fromTo("#happywheelback", durationCars * 0.5, {scaleX:1.0}, {scaleX:1.1, ease: Linear.easeNone}, "happycarmainstep")
            .to("#happywheelback", durationCars * 0.5, {scaleX:1.0, ease:Linear.easeNone}, durationCars*0.5)
            .to("#happywheelback", durationCars * 0.5, {scaleX:1.1, ease:Linear.easeNone}, durationCars)
            .to("#happywheelback", durationCars * 0.5, {scaleX:1.0, ease:Linear.easeNone}, durationCars*1.5)
            .to("#happywheelback", durationCars * 0.5, {scaleY:1.1, ease:Linear.easeNone}, durationCars*2)
            .to("#happywheelback", durationCars * 0.5, {scaleY:1.0, ease:Linear.easeNone}, durationCars*2.5)
            .to("#happywheelback", durationCars * 0.5, {scaleX:1.1, ease:Linear.easeNone}, durationCars*3)
            .to("#happywheelback", durationCars * 0.5, {scaleX:1.0, ease:Linear.easeNone}, durationCars*3.5)

            .fromTo("#happywheelfront", durationCars * 0.5, {scaleX:1.0}, {scaleX:0.9, ease: Linear.easeNone}, "happycarmainstep")
            .to("#happywheelfront", durationCars * 0.5, {scaleX:1.1, ease:Linear.easeNone}, durationCars*0.5)
            .to("#happywheelfront", durationCars * 0.5, {scaleX:1.0, ease:Linear.easeNone}, durationCars)
            .to("#happywheelfront", durationCars * 0.5, {scaleY:1.1, ease:Linear.easeNone}, durationCars*1.5)
            .to("#happywheelfront", durationCars * 0.5, {scaleY:1.0, ease:Linear.easeNone}, durationCars*2)
            .to("#happywheelfront", durationCars * 0.5, {scaleX:1.1, ease:Linear.easeNone}, durationCars*2.5)
            .to("#happywheelfront", durationCars * 0.5, {scaleX:1.05, ease:Linear.easeNone}, durationCars*3)
            .to("#happywheelfront", durationCars * 0.5, {scaleX:1.0, ease:Linear.easeNone}, durationCars*3.5)

            .fromTo("#happyotherwheel2", durationCars * 0.5, {scaleY:1.0}, {scaleY:1.01, ease: Linear.easeNone}, "happycarmainstep")
            .to("#happyotherwheel2", durationCars * 0.5, {scaleY:1.0, ease:Linear.easeNone}, durationCars*0.5)
            .to("#happyotherwheel2", durationCars * 0.5, {scaleY:1.1, ease:Linear.easeNone}, durationCars)
            .to("#happyotherwheel2", durationCars * 0.5, {scaleY:1.0, ease:Linear.easeNone}, durationCars*1.5)
            .to("#happyotherwheel2", durationCars * 0.5, {scaleY:1.1, ease:Linear.easeNone}, durationCars*2)
            .to("#happyotherwheel2", durationCars * 0.5, {scaleY:1.0, ease:Linear.easeNone}, durationCars*2.5)
            .to("#happyotherwheel2", durationCars * 0.5, {scaleY:1.1, ease:Linear.easeNone}, durationCars*3)
            .to("#happyotherwheel2", durationCars * 0.5, {scaleY:1.0, ease:Linear.easeNone}, durationCars*3.5)

            .fromTo("#happyotherwheel1", durationCars * 0.5, {scaleY:1.0}, {scaleY:0.98, ease: Linear.easeNone}, "happycarmainstep")
            .to("#happyotherwheel1", durationCars * 0.5, {scaleY:1.1, ease:Linear.easeNone}, durationCars*0.5)
            .to("#happyotherwheel1", durationCars * 0.5, {scaleY:1.0, ease:Linear.easeNone}, durationCars)
            .to("#happyotherwheel1", durationCars * 0.5, {scaleY:1.1, ease:Linear.easeNone}, durationCars*1.5)
            .to("#happyotherwheel1", durationCars * 0.5, {scaleY:1.0, ease:Linear.easeNone}, durationCars*2)
            .to("#happyotherwheel1", durationCars * 0.5, {scaleY:1.1, ease:Linear.easeNone}, durationCars*2.5)
            .to("#happyotherwheel1", durationCars * 0.5, {scaleY:1.05, ease:Linear.easeNone}, durationCars*3)
            .to("#happyotherwheel1", durationCars * 0.5, {scaleY:1.0, ease:Linear.easeNone}, durationCars*3.5)
            ;
        var q3HappyCarTlEnd = new TimelineMax({paused: true})
            .to("#happycar", durationCars * 4, {autoAlpha:0, ease:Linear.easeNone})
            .to("#textbox", durationCars * 4, {x: "53%", ease:Power1.easeInOut})
            ;

        var q3TextTl = new TimelineMax({paused: true})
            .fromTo("#textbox", durationCars * 5, {x: "53%"}, {x: "54%", ease:Power2.easeInOut})
            .fromTo("#textbox", durationCars * 6, {x: "54%"}, {x: "0%", ease:Power2.easeInOut})

        ;

        var q3MasterTl = new TimelineMax({ repeat: -1})

            .add(q3TextTl.play())
            .add(q3ReachCarTl.play(),"allstart")
            .add(q3ReachCarTlWheels.play(),"allstart")
            .add(q3ReachCarTlSmoke.play(),"allstart")
            .add(q3ReachCarTlEnd.play(),"-=4")
            .add(q3HappyCarTl.play(),"happystart")
            .add(q3HappyCarTlwheel.play(),"happystart")
            .add(q3HappyCarTlsmoke.play(),"happystart")
            .add(q3HappyCarTlsmile.play(),"happystart")
            .add(q3HappyCarTlEnd.play(),"-=4")
            ;


    }







};


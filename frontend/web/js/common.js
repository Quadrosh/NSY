$(window).load(function() {
    $("#loader").delay(400).fadeOut("slow");
});

$(document).ready(function() {



    //var trigger = $('#hamburger_anim'), isClosed = true;
    //trigger.click(function () {
    //    burgerClock();
    //});
    //function burgerClock() {
    //    if (isClosed == true) {
    //        trigger.removeClass('is-closed');
    //        trigger.addClass('is-open');
    //        isClosed = false;
    //        $("#menu").addClass('menuopen');
    //        $("#menu").removeClass('menuclose');
    //
    //        $("#menubackfilter").addClass('backfilterOn');
    //        $("#menubackfilter").removeClass('backfilterOff');
    //        var tl_burgerOn = new TimelineLite();
    //        tl_burgerOn.to("#menutopline", 0.2, {directionalRotation:"20_cw",smoothOrigin:"100% 50%",  ease:Linear.easeNone}, "burgerstep1")
    //            .to("#menumiddleline", 0.2, {css:{scaleX:0.5, transformOrigin:"100% 50%"},  ease:Linear.easeNone}, "burgerstep1")
    //            .to("#menubottomline", 0.2, {directionalRotation:"-20_ccw", smoothOrigin:"100% 50%",  ease:Linear.easeNone}, "burgerstep1")
    //            .to("#menutopline", 0.4, {directionalRotation:"-45_ccw", y:12, smoothOrigin:"50% 50%",  ease:Linear.easeNone}, "burgerstep2")
    //            .to("#menumiddleline", 0.4, {css:{scaleX:0 , autoAlpha:0, transformOrigin:"100% 50%"},  ease:Linear.easeNone}, "burgerstep2")
    //            .to("#menubottomline", 0.4, {directionalRotation:"45_cw", y:"-=12", smoothOrigin:"50% 50%", ease:Linear.easeNone}, "burgerstep2")
    //        ;
    //
    //        $("#menubackfilter").click(function () {
    //            trigger.removeClass('is-open');
    //            trigger.addClass('is-closed');
    //            isClosed = true;
    //            $("#menu").addClass('menuclose');
    //            $("#menu").removeClass('menuopen');
    //            $("#menubackfilter").addClass('backfilterOff');
    //            $("#menubackfilter").removeClass('backfilterOn');
    //            var tl_burgerOff = new TimelineLite();
    //            tl_burgerOff.to("#menutopline", 0.4, {directionalRotation:"20_cw", y:0, smoothOrigin:"50% 50%",  ease:Linear.easeNone}, "burgeroffstep1")
    //                .to("#menumiddleline", 0.4, {css:{scaleX:0.5, autoAlpha:1, transformOrigin:"100% 50%"},  ease:Linear.easeNone}, "burgeroffstep1")
    //                .to("#menubottomline", 0.4, {directionalRotation:"-20_ccw", y:0, smoothOrigin:"50% 50%", ease:Linear.easeNone}, "burgeroffstep1")
    //                .to("#menutopline", 0.2, {directionalRotation: 0 , y:0, smoothOrigin:"100% 50%",  ease:Linear.easeNone}, "burgeroffstep2")
    //                .to("#menumiddleline", 0.2, {css:{scaleX:1, transformOrigin:"100% 50%"},  ease:Linear.easeNone}, "burgeroffstep2")
    //                .to("#menubottomline", 0.2, {directionalRotation: 0 , y:0, smoothOrigin:"100% 50%",  ease:Linear.easeNone}, "burgeroffstep2")
    //            ;
    //        });
    //
    //    } else {
    //        trigger.removeClass('is-open');
    //        trigger.addClass('is-closed');
    //        isClosed = true;
    //        $("#menu").addClass('menuclose');
    //        $("#menu").removeClass('menuopen');
    //
    //        $("#menubackfilter").addClass('backfilterOff');
    //        $("#menubackfilter").removeClass('backfilterOn');
    //
    //        var tl_burgerOff = new TimelineLite();
    //        tl_burgerOff.to("#menutopline", 0.4, {directionalRotation:"20_cw", y:0, smoothOrigin:"50% 50%",  ease:Linear.easeNone}, "burgeroffstep1")
    //            .to("#menumiddleline", 0.4, {css:{scaleX:0.5, autoAlpha:1, transformOrigin:"100% 50%"},  ease:Linear.easeNone}, "burgeroffstep1")
    //            .to("#menubottomline", 0.4, {directionalRotation:"-20_ccw", y:0, smoothOrigin:"50% 50%", ease:Linear.easeNone}, "burgeroffstep1")
    //            .to("#menutopline", 0.2, {directionalRotation: 0 , y:0, smoothOrigin:"100% 50%",  ease:Linear.easeNone}, "burgeroffstep2")
    //            .to("#menumiddleline", 0.2, {css:{scaleX:1, transformOrigin:"100% 50%"},  ease:Linear.easeNone}, "burgeroffstep2")
    //            .to("#menubottomline", 0.2, {directionalRotation: 0 , y:0, smoothOrigin:"100% 50%",  ease:Linear.easeNone}, "burgeroffstep2")
    //        ;
    //
    //    }
    //}

	$('.homelink').hover(
        function(){
          var tl = new TimelineLite();
            tl.to("#happycenter", 0.5, {
            	textShadow:"0px 0px 1px rgba(0, 0, 0, 0.6)",
            	color:"#ffffff"
            })
            ;
        },
        function(){
          var tl = new TimelineLite();
            tl.to("#happycenter", 0.5, {
            	textShadow:"0px 1px 2px rgba(0, 0, 0, 0.6)",
            	color:"#ffffff"
            })
            ;

    });
    $('#logosun').hover(
        function(){
          var tl = new TimelineLite();
            tl.to("#logosun", 1, {directionalRotation:"72_cw",transformOrigin:"50% 53%"}, "logohoverOn")

            ;
        },
        function(){

          var tl = new TimelineLite();
            tl.to("#logosun", 1, {directionalRotation:"144_cw",transformOrigin:"50% 53%"}, "logohoverOff")

            ;
    });



	//Parallax
	$('#scene1').parallax();
	$('#scene2').parallax();
	$('#scene3').parallax();

	$.stellar({
		responsive: true,
		horizontalOffset: 50,
		verticalOffset: 220,
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

	//Аякс отправка форм
	$("#submit_training").submit(function() {
		$.ajax({
			type: "POST",
			url: "submit_ml.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку! Скоро мы с Вами свяжемся.");
			$("#submit_training").trigger("reset");
		});
		return false;
	});
	$("#submit_getDiscount").submit(function() {
		$.ajax({
			type: "POST",
			url: "submit_ml.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку! Скоро мы с Вами свяжемся.");
			$("#submit_getDiscount").trigger("reset");
		});
		return false;
	});
	$("#form_trainingWhen").submit(function() {
		$.ajax({
			type: "POST",
			url: "submit_ml.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку! В ближайшее время мы с Вами свяжемся.");
			$("#form_trainingWhen").trigger("reset");
		});
		return false;
	});
	$("#ishe_form_trainingWhen").submit(function() {
		$.ajax({
			type: "POST",
			url: "submit_ishe.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку! В ближайшее время мы с Вами свяжемся.");
			$("#form_trainingWhen").trigger("reset");
		});
		return false;
	});

	$("#form_trainingorder").submit(function() {
		$.ajax({
			type: "POST",
			url: "submit_ml.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку! В ближайшее время мы с Вами свяжемся.");
			$("#form_trainingorder").trigger("reset");
		});
		return false;
	});
	$("#form_willithelp").submit(function() {
		$.ajax({
			type: "POST",
			url: "submit_ml.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку! В ближайшее время мы с Вами свяжемся.");
			$("#form_willithelp").trigger("reset");
		});
		return false;
	});
	$("#form_freeconsult").submit(function() {
		$.ajax({
			type: "POST",
			url: "submit_ml.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку! В ближайшее время мы с Вами свяжемся.");
			$("#form_freeconsult").trigger("reset");
		});
		return false;
	});



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










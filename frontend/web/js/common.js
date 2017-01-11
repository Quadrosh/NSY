$(window).load(function() {
    $("#loader").delay(400).fadeOut("slow");
});

$(document).ready(function() {



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
		horizontalOffset: 0,
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










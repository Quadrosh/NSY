$(document).ready(function() {

    //sunmenu
    var tl = new TimelineMax();
    tl.set(".sunbeam",{css:{autoAlpha:0}})
        .fromTo("#center_3_text",0.4,{attr:{startOffset:'-50%'}},{attr:{startOffset:'0%'},ease:Power3.easeOut})
        .fromTo("#center_2_text",0.4,{attr:{startOffset:'-50%'}},{attr:{startOffset:'0.6472%'},ease:Power1.easeOut})
        .fromTo("#center_1_text",0.4,{attr:{startOffset:'-50%'}},{attr:{startOffset:'1.123%'},ease:Power1.easeOut})

        .fromTo("#beam_1_text",0.4,{attr:{startOffset:'0%'}},{attr:{startOffset:'44.177%'},ease:Power1.easeOut},'start')
        .fromTo("#beam_2_text",0.4,{attr:{startOffset:'0%'}},{attr:{startOffset:'44.177%'},ease:Power1.easeOut},'start')
        .fromTo("#beam_3_text",0.4,{attr:{startOffset:'0%'}},{attr:{startOffset:'44.177%'},ease:Power1.easeOut},'start')
        .fromTo("#beam_4_text",0.4,{attr:{startOffset:'0%'}},{attr:{startOffset:'44.177%'},ease:Power1.easeOut},'start')
        .fromTo("#beam_5_text",0.4,{attr:{startOffset:'0%'}},{attr:{startOffset:'44.177%'},ease:Power1.easeOut},'start')
        .fromTo("#beam_6_text",0.4,{attr:{startOffset:'0%'}},{attr:{startOffset:'44.177%'},ease:Power1.easeOut},'start')
        .fromTo("#beam_7_text",0.4,{attr:{startOffset:'0%'}},{attr:{startOffset:'44.177%'},ease:Power1.easeOut},'start')
        .fromTo("#beam_8_text",0.4,{attr:{startOffset:'0%'}},{attr:{startOffset:'44.177%'},ease:Power1.easeOut},'start')
        .fromTo("#beam_9_text",0.4,{attr:{startOffset:'0%'}},{attr:{startOffset:'44.177%'},ease:Power1.easeOut},'start')
        .fromTo("#beam_10_text",0.4,{attr:{startOffset:'0%'}},{attr:{startOffset:'44.177%'},ease:Power1.easeOut},'start')
        .fromTo("#beam_11_text",0.4,{attr:{startOffset:'0%'}},{attr:{startOffset:'44.177%'},ease:Power1.easeOut},'start')
        .fromTo("#beam_12_text",0.4,{attr:{startOffset:'0%'}},{attr:{startOffset:'44.177%'},ease:Power1.easeOut},'start')
        .fromTo("#beam_13_text",0.4,{attr:{startOffset:'0%'}},{attr:{startOffset:'44.177%'},ease:Power1.easeOut},'start')
        .fromTo(".sunbeam",0.4,{css:{autoAlpha:0}},{css:{autoAlpha:1},ease:Power4.easeIn},'start')
    ;
    // get data
    //var id = $(".menu_beam_4").data('id');
    //console.log(id);



    for (biter=1, len = 8; biter<len; biter++) {
        //var beamdefs = ["\"","beam_",biter,"_defs","\""].join("");
        //var beampath = ["\"","beam_",biter,"_path","\""].join("");
        //var menubeam = ["\'",".menu_beam_",biter,"\'"].join("");
        //var beamtext = ["\"","#beam_",biter,"_text","\""].join("");

        var beamdefs = "beam_"+biter+"_defs";
        var beampath = "beam_"+biter+"_path";
        var menubeam = ".menu_beam_"+biter;
        var beamtext = "beam_"+biter+"_text";

        //console.log(beamdefs);
        //console.log(beampath);



        //var hoverOn = function (itemid){
        //    var tl = new TimelineMax();
        //    tl.to(itemid,0.3,{attr:{startOffset:'47%'},ease:Power1.easeInOut});
        //};
        //var hoverOff = function (itemid){
        //    var tl = new TimelineMax();
        //    tl.to(itemid,0.6,{attr:{startOffset:'44.177%'},ease:Power1.easeInOut});
        //};



        //var hoverOn = function(data){
        //    var tl = new TimelineMax();
        //    tl.to("#beam_"+data+"_text",0.3,{attr:{startOffset:'47%'},ease:Power1.easeInOut});
        //    console.log("#beam_"+data+"_text");
        //};
        //var hoverOff = function(data){
        //    var tl = new TimelineMax();
        //    tl.to("#beam_"+data+"_text",0.6,{attr:{startOffset:'44.177%'},ease:Power1.easeInOut});
        //};

        var Iterator = {}; // Globally scoped object

        function setiterator(x){
            Iterator.iter = x;
        }
        setiterator(biter);

        document.getElementById("beam_"+biter+"_defs").setAttribute("d",document.getElementById("beam_"+biter+"_path").getAttribute("d"));
        //$('.menu_beam_'+biter).hover(
        $('.menu_beam_'+biter).hover(
            //hoverOn(biter), hoverOff(biter)





            function(){
                var tl = new TimelineMax();
                tl.to("#beam_"+Iterator.iter+"_text",0.3,{attr:{startOffset:'47%'},ease:Power1.easeInOut});
            },
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_"+Iterator.iter+"_text",0.6,{attr:{startOffset:'44.177%'},ease:Power1.easeInOut});
            }



                //function(){
                //    var tl = new TimelineMax();
                //    tl.to("#beam_1_text",0.3,{attr:{startOffset:'47%'},ease:Power1.easeInOut});
                //},
                //function(){
                //    var tl = new TimelineMax();
                //    tl.to("#beam_1_text",0.6,{attr:{startOffset:'44.177%'},ease:Power1.easeInOut});
                //}





        );
    }




    // sunmenu hover
    //document.getElementById("beam_1_defs").setAttribute("d",document.getElementById("beam_1_path").getAttribute("d"));
    //$('.menu_beam_1').hover(
    //
    //    function(){
    //        var tl = new TimelineMax();
    //        tl.to("#beam_1_text",0.3,{attr:{startOffset:'47%'},ease:Power1.easeInOut});
    //    },
    //    function(){
    //        var tl = new TimelineMax();
    //        tl.to("#beam_1_text",0.6,{attr:{startOffset:'44.177%'},ease:Power1.easeInOut});
    //    }
    //);




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

$(window).load(function() {



	$(".loader_inner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");

});








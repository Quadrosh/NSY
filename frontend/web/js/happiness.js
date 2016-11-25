$(document).ready(function() {

	$('#yolka').magnificPopup({
        type: 'iframe', 
        iframe: {
          markup: '<div class="mfp-iframe-scaler">'+
                    '<div class="mfp-close"></div>'+
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                  '</div>', 
          patterns: {
            youtube: {
              index: 'youtube.com/', 
              src: 'https://www.youtube.com/embed/0M6qsrlL9oA' 
            },
          },
         
          srcAction: 'iframe_src', 
        }
    });

	$('#feelinggood').magnificPopup({
        type: 'iframe', 
        iframe: {
          markup: '<div class="mfp-iframe-scaler">'+
                    '<div class="mfp-close"></div>'+
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                  '</div>', 
          patterns: {
            youtube: {
              index: 'youtube.com/', 
              src: 'https://www.youtube.com/embed/VQlJhkD95Uc' 
            },
          },
         
          srcAction: 'iframe_src', 
        }
    });

	$('#plasticbag').magnificPopup({
        type: 'iframe', 
        iframe: {
          markup: '<div class="mfp-iframe-scaler">'+
                    '<div class="mfp-close"></div>'+
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                  '</div>', 
          patterns: {
            youtube: {
              index: 'youtube.com/', 
              src: 'https://www.youtube.com/embed/gHxi-HSgNPc' 
            },
          },
         
          srcAction: 'iframe_src', 
        }
    });

	$('#sciencevsmusic').magnificPopup({
        type: 'iframe', 
        iframe: {
          markup: '<div class="mfp-iframe-scaler">'+
                    '<div class="mfp-close"></div>'+
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                  '</div>', 
          patterns: {
            youtube: {
              index: 'youtube.com/', 
              src: 'https://www.youtube.com/embed/Q3oItpVa9fs' 
            },
          },
         
          srcAction: 'iframe_src', 
        }
    });

    $('#dontyouworrychild').magnificPopup({
        type: 'iframe', 
        iframe: {
          markup: '<div class="mfp-iframe-scaler">'+
                    '<div class="mfp-close"></div>'+
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                  '</div>', 
          patterns: {
            yandexmusic: {
              index: 'music.yandex.ru/', 
              src: 'https://music.yandex.ru/iframe/#album/580112' 
            },
          },
         
          srcAction: 'iframe_src', 
        }
    });



    $('.open-popup-link').magnificPopup({
		 type:'inline',
		  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
	});

//Аякс отправка форм
//Документация: http://api.jquery.com/jquery.ajax/
	$("#happy_add").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку!");
			$("#happy_add").trigger("reset");
			$.magnificPopup.close();
		});
		return false;
	});

	$("#short_happiness_add_form").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо!");
			$("#short_happiness_add_form").trigger("reset");
			$.magnificPopup.close();
		});
		return false;
	});

	$("#long_happiness_add_form").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо!");
			$("#long_happiness_add_form").trigger("reset");
			$.magnificPopup.close();
		});
		return false;
	});

	$("#happy_music_add_form").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо!");
			$("#happy_music_add_form").trigger("reset");
			$.magnificPopup.close();
		});
		return false;
	});	

	$("#happy_cinema_add_form").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо!");
			$("#happy_cinema_add_form").trigger("reset");
			$.magnificPopup.close();
		});
		return false;
	});	

	$("#happy_quote_add_form").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо!");
			$("#happy_quote_add_form").trigger("reset");
			$.magnificPopup.close();
		});
		return false;
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
	//Документация: http://api.jquery.com/jquery.ajax/
	$("#submit_training").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
			$("#submit_training").trigger("reset");
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

$(document).ready(function() {

    $("#loader").delay(400).fadeOut("slow");
    $("#start_loader").delay(400).fadeOut("slow");

    $('.popularItems').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        easing:'easeInOutSine',
        //arrows: false,
        prevArrow:'.slickPrev',
        nextArrow:'.slickNext',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ],
        //appendArrows:'.popularItems',
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










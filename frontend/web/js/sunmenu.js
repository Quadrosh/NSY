window.addEventListener('load', function(){
    var menuIcon = document.getElementById("logosunIcon");


    $("#start_loader").delay(400).fadeOut("slow");




    var startTl = new TimelineMax();
    startTl.set(".sunbeam",{css:{autoAlpha:0}})
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




     //click
    $('.menu_beam_1').on('click', function(e) {
        e.preventDefault();
        var self = this;
        var tl = new TimelineMax();
            tl.to("#beam_1_text",0.3,{attr:{startOffset:'44.177%'},ease:Power1.easeIn})
            .to(".sunbeam",0.5,{css:{autoAlpha:0}},'go')
            .to(".centerfirst",0.5,{css:{autoAlpha:0}},'go');
        setTimeout(function() {
            window.location.href = self.href;
        }, 900);
        SVGAnimatedString.prototype.toString = function () { return this.baseVal; }
    });

    $('.menu_beam_2').on('click', function(e) {
        e.preventDefault();
        var self = this;
        var tl = new TimelineMax();
            tl.to("#beam_2_text",0.3,{attr:{startOffset:'44.177%'},ease:Power1.easeIn})
            .to(".sunbeam",0.5,{css:{autoAlpha:0}},'go')
            .to(".centerfirst",0.5,{css:{autoAlpha:0}},'go');
        setTimeout(function() {
            window.location.href = self.href;
        }, 900);
        SVGAnimatedString.prototype.toString = function () { return this.baseVal; }
    });

    $('.menu_beam_3').on('click', function(e) {
        e.preventDefault();
        var self = this;
        var tl = new TimelineMax();
            tl.to("#beam_3_text",0.3,{attr:{startOffset:'44.177%'},ease:Power1.easeIn})
            .to(".sunbeam",0.5,{css:{autoAlpha:0}},'go')
            .to(".centerfirst",0.5,{css:{autoAlpha:0}},'go');
        setTimeout(function() {
            window.location.href = self.href;
        }, 900);
        SVGAnimatedString.prototype.toString = function () { return this.baseVal; }
    });

    $('.menu_beam_4').on('click', function(e) {
        e.preventDefault();
        var self = this;
        var tl = new TimelineMax();
            tl.to("#beam_4_text",0.3,{attr:{startOffset:'44.177%'},ease:Power1.easeIn})
            .to(".sunbeam",0.5,{css:{autoAlpha:0}},'go')
            .to(".centerfirst",0.5,{css:{autoAlpha:0}},'go');
        setTimeout(function() {
            window.location.href = self.href;
        }, 900);
        SVGAnimatedString.prototype.toString = function () { return this.baseVal; }
    });

    $('.menu_beam_5').on('click', function(e) {
       e.preventDefault();
        var self = this;
        var tl = new TimelineMax();
        tl.to("#beam_5_text",0.3,{attr:{startOffset:'44.177%'},ease:Power1.easeIn})
            .to(".sunbeam",0.5,{css:{autoAlpha:0}},'go')
            .to(".centerfirst",0.5,{css:{autoAlpha:0}},'go');
        setTimeout(function() {
            window.location.href = self.href;
        }, 900);
        SVGAnimatedString.prototype.toString = function () { return this.baseVal; }
    });

    $('.menu_beam_6').on('click', function(e) {
       e.preventDefault();
        var self = this;
        var tl = new TimelineMax();
        tl.to("#beam_6_text",0.3,{attr:{startOffset:'44.177%'},ease:Power1.easeIn})
            .to(".sunbeam",0.5,{css:{autoAlpha:0}},'go')
            .to(".centerfirst",0.5,{css:{autoAlpha:0}},'go');
        setTimeout(function() {
            window.location.href = self.href;
        }, 900);
        SVGAnimatedString.prototype.toString = function () { return this.baseVal; }
    });

    $('.menu_beam_7').on('click', function(e) {
        e.preventDefault();
        var self = this;
        var tl = new TimelineMax();
        tl.to("#beam_7_text",0.3,{attr:{startOffset:'44.177%'},ease:Power1.easeIn})
            .to(".sunbeam",0.5,{css:{autoAlpha:0}},'go')
            .to(".centerfirst",0.5,{css:{autoAlpha:0}},'go');
        setTimeout(function() {
            window.location.href = self.href;
        }, 900);
        SVGAnimatedString.prototype.toString = function () { return this.baseVal; }
    });

    $('.menu_beam_8').on('click', function(e) {
        e.preventDefault();
        var self = this;
        var tl = new TimelineMax();
        tl.to("#beam_8_text",0.3,{attr:{startOffset:'44.177%'},ease:Power1.easeIn})
            .to(".sunbeam",0.5,{css:{autoAlpha:0}},'go')
            .to(".centerfirst",0.5,{css:{autoAlpha:0}},'go');
        setTimeout(function() {
            window.location.href = self.href;
        }, 900);
        SVGAnimatedString.prototype.toString = function () { return this.baseVal; }
    });

    $('.menu_beam_9').on('click', function(e) {
        e.preventDefault();
        var self = this;
        var tl = new TimelineMax();
        tl.to("#beam_9_text",0.3,{attr:{startOffset:'44.177%'},ease:Power1.easeIn})
            .to(".sunbeam",0.5,{css:{autoAlpha:0}},'go')
            .to(".centerfirst",0.5,{css:{autoAlpha:0}},'go');
        setTimeout(function() {
            window.location.href = self.href;
        }, 900);
        SVGAnimatedString.prototype.toString = function () { return this.baseVal; }
    });

    $('.menu_beam_10').on('click', function(e) {
        e.preventDefault();
        var self = this;
        var tl = new TimelineMax();
        tl.to("#beam_10_text",0.3,{attr:{startOffset:'44.177%'},ease:Power1.easeIn})
            .to(".sunbeam",0.5,{css:{autoAlpha:0}},'go')
            .to(".centerfirst",0.5,{css:{autoAlpha:0}},'go');
        setTimeout(function() {
            window.location.href = self.href;
        }, 900);
        SVGAnimatedString.prototype.toString = function () { return this.baseVal; }
    });

    $('.menu_beam_11').on('click', function(e) {
        e.preventDefault();
        var self = this;
        var tl = new TimelineMax();
        tl.to("#beam_11_text",0.3,{attr:{startOffset:'44.177%'},ease:Power1.easeIn})
            .to(".sunbeam",0.5,{css:{autoAlpha:0}},'go')
            .to(".centerfirst",0.5,{css:{autoAlpha:0}},'go');
        setTimeout(function() {
            window.location.href = self.href;
        }, 900);
        SVGAnimatedString.prototype.toString = function () { return this.baseVal; }
    });

    $('.menu_beam_12').on('click', function(e) {
        e.preventDefault();
        var self = this;
        var tl = new TimelineMax();
        tl.to("#beam_12_text",0.3,{attr:{startOffset:'44.177%'},ease:Power1.easeIn})
            .to(".sunbeam",0.5,{css:{autoAlpha:0}},'go')
            .to(".centerfirst",0.5,{css:{autoAlpha:0}},'go');
        setTimeout(function() {
            window.location.href = self.href;
        }, 900);
        SVGAnimatedString.prototype.toString = function () { return this.baseVal; }
    });

    $('.menu_beam_13').on('click', function(e) {
        e.preventDefault();
        var self = this;
        var tl = new TimelineMax();
        tl.to("#beam_13_text",0.3,{attr:{startOffset:'44.177%'},ease:Power1.easeIn})
            .to(".sunbeam",0.5,{css:{autoAlpha:0}},'go')
            .to(".centerfirst",0.5,{css:{autoAlpha:0}},'go');
        setTimeout(function() {
            window.location.href = self.href;
        }, 900);
        SVGAnimatedString.prototype.toString = function () { return this.baseVal; }
    });



    // hover beams

    var beam1 = document.getElementById("beam_1_defs");
    if (beam1) {
        document.getElementById("beam_1_defs").setAttribute("d",document.getElementById("beam_1_path").getAttribute("d"));
        $('.menu_beam_1').hover(
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_1_text",0.3,{attr:{startOffset:'47%'},ease:Power1.easeInOut});
            },
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_1_text",0.6,{attr:{startOffset:'44.177%'},ease:Power1.easeInOut});
            });
    }

    var beam2 = document.getElementById("beam_2_defs");
    if (beam2) {
        document.getElementById("beam_2_defs").setAttribute("d",document.getElementById("beam_2_path").getAttribute("d"));
        $('.menu_beam_2').hover(
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_2_text",0.3,{attr:{startOffset:'47%'},ease:Power1.easeInOut});
            },
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_2_text",0.6,{attr:{startOffset:'44.177%'},ease:Power1.easeInOut});
            });
    }
    var beam3 = document.getElementById("beam_3_defs");
    if (beam3) {
        document.getElementById("beam_3_defs").setAttribute("d",document.getElementById("beam_3_path").getAttribute("d"));
        $('.menu_beam_3').hover(
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_3_text",0.3,{attr:{startOffset:'47%'},ease:Power1.easeInOut});
            },
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_3_text",0.6,{attr:{startOffset:'44.177%'},ease:Power1.easeInOut});
            });
    }

    var beam4 = document.getElementById("beam_4_defs");
    if (beam4) {
        document.getElementById("beam_4_defs").setAttribute("d",document.getElementById("beam_4_path").getAttribute("d"));
        $('.menu_beam_4').hover(
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_4_text",0.3,{attr:{startOffset:'47%'},ease:Power1.easeInOut});
            },
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_4_text",0.6,{attr:{startOffset:'44.177%'},ease:Power1.easeInOut});
            });
    }

    var beam5 = document.getElementById("beam_5_defs");
    if (beam5) {
        document.getElementById("beam_5_defs").setAttribute("d",document.getElementById("beam_5_path").getAttribute("d"));
        $('.menu_beam_5').hover(
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_5_text",0.3,{attr:{startOffset:'47%'},ease:Power1.easeInOut});
            },
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_5_text",0.6,{attr:{startOffset:'44.177%'},ease:Power1.easeInOut});
            });
    }

    var beam6 = document.getElementById("beam_6_defs");
    if (beam6) {
        document.getElementById("beam_6_defs").setAttribute("d",document.getElementById("beam_6_path").getAttribute("d"));
        $('.menu_beam_6').hover(
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_6_text",0.3,{attr:{startOffset:'47%'},ease:Power1.easeInOut});
            },
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_6_text",0.6,{attr:{startOffset:'44.177%'},ease:Power1.easeInOut});
            });
    }



    var beam7 = document.getElementById("beam_7_defs");
    if (beam7) {
        document.getElementById("beam_7_defs").setAttribute("d",document.getElementById("beam_7_path").getAttribute("d"));
        $('.menu_beam_7').hover(
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_7_text",0.3,{attr:{startOffset:'47%'},ease:Power1.easeInOut});
            },
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_7_text",0.6,{attr:{startOffset:'44.177%'},ease:Power1.easeInOut});
            });
    }


    var beam8 = document.getElementById("beam_8_defs");
    if (beam8) {
        document.getElementById("beam_8_defs").setAttribute("d",document.getElementById("beam_8_path").getAttribute("d"));
        $('.menu_beam_8').hover(
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_8_text",0.3,{attr:{startOffset:'47%'},ease:Power1.easeInOut});
            },
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_8_text",0.6,{attr:{startOffset:'44.177%'},ease:Power1.easeInOut});
            });
    }

    var beam9 = document.getElementById("beam_9_defs");
    if (beam9) {
        document.getElementById("beam_9_defs").setAttribute("d",document.getElementById("beam_9_path").getAttribute("d"));
        $('.menu_beam_9').hover(
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_9_text",0.3,{attr:{startOffset:'47%'},ease:Power1.easeInOut});
            },
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_9_text",0.6,{attr:{startOffset:'44.177%'},ease:Power1.easeInOut});
            });
    }

    var beam10 = document.getElementById("beam_10_defs");
    if (beam10) {
        document.getElementById("beam_10_defs").setAttribute("d",document.getElementById("beam_10_path").getAttribute("d"));
        $('.menu_beam_10').hover(
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_10_text",0.3,{attr:{startOffset:'47%'},ease:Power1.easeInOut});
            },
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_10_text",0.6,{attr:{startOffset:'44.177%'},ease:Power1.easeInOut});
            });
    }

    var beam11 = document.getElementById("beam_11_defs");
    if (beam11) {
        document.getElementById("beam_11_defs").setAttribute("d",document.getElementById("beam_11_path").getAttribute("d"));
        $('.menu_beam_11').hover(
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_11_text",0.3,{attr:{startOffset:'47%'},ease:Power1.easeInOut});
            },
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_11_text",0.6,{attr:{startOffset:'44.177%'},ease:Power1.easeInOut});
            });
    }

    var beam12 = document.getElementById("beam_12_defs");
    if (beam12) {
        document.getElementById("beam_12_defs").setAttribute("d",document.getElementById("beam_12_path").getAttribute("d"));
        $('.menu_beam_12').hover(
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_12_text",0.3,{attr:{startOffset:'47%'},ease:Power1.easeInOut});
            },
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_12_text",0.6,{attr:{startOffset:'44.177%'},ease:Power1.easeInOut});
            });
    }

    var beam13 = document.getElementById("beam_13_defs");
    if (beam13) {
        document.getElementById("beam_13_defs").setAttribute("d",document.getElementById("beam_13_path").getAttribute("d"));
        $('.menu_beam_13').hover(
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_13_text",0.3,{attr:{startOffset:'47%'},ease:Power1.easeInOut});
            },
            function(){
                var tl = new TimelineMax();
                tl.to("#beam_13_text",0.6,{attr:{startOffset:'44.177%'},ease:Power1.easeInOut});
            });
    }







    // document.getElementById("center_1_defs").setAttribute("d",document.getElementById("center_1_path").getAttribute("d"));
    // $('.menu_center_1').hover(
    //         function(){
    //           var tl = new TimelineMax();
    //           tl.to("#center_1_text",0.3,{attr:{startOffset:'5%'},ease:Power1.easeInOut});
    //         },
    //         function(){
    //           var tl = new TimelineMax();
    //           tl.to("#center_1_text",0.3,{attr:{startOffset:'1.123%'},ease:Power1.easeInOut});
    // });





    var center2 = document.getElementById("center_2_text");
    if  (center2) {
        document.getElementById("center_2_defs").setAttribute("d",document.getElementById("center_2_path").getAttribute("d"));
        $('.menu_center_2').hover(
            function(){
                var tl = new TimelineMax();
                tl.to("#center_2_text",0.3,{attr:{startOffset:'5%'},ease:Power1.easeInOut});
            },
            function(){
                var tl = new TimelineMax();
                tl.to("#center_2_text",0.6,{attr:{startOffset:'0.6472%'},ease:Power1.easeInOut});
            }
        );
    }


    var center3 = document.getElementById("center_3_text");
    if  (center3) {
        document.getElementById("center_3_defs").setAttribute("d",document.getElementById("center_3_path").getAttribute("d"));
        $('.menu_center_3').hover(
            function(){
                var tl = new TimelineMax();
                tl.to("#center_3_text",0.3,{attr:{startOffset:'5%'},ease:Power1.easeInOut});
            },
            function(){
                var tl = new TimelineMax();
                tl.to("#center_3_text",0.6,{attr:{startOffset:'0%'},ease:Power1.easeInOut});
            }
        );
    }




    // ////////////center click

    $('.menu_center_2').on('click', function(e) {
        e.preventDefault();
        var self = this;
        var tl = new TimelineMax();
            tl.to("#center_2_text",0.3,{attr:{startOffset:'0.6472%'},ease:Power1.easeIn})
            .to(".sunbeam",0.5,{css:{autoAlpha:0}},'go')
            .to(".suncenter",0.6,{css:{autoAlpha:0}},'go')
            .to(".centerfirst",0.5,{css:{autoAlpha:0}},'go');
        setTimeout(function() {
            window.location.href = self.href;
        }, 900);
        SVGAnimatedString.prototype.toString = function () { return this.baseVal; }
    });

    $('.menu_center_3').on('click', function(e) {
        e.preventDefault();
        var self = this;
        var tl = new TimelineMax();
            tl.to("#center_3_text",0.3,{attr:{startOffset:'0%'},ease:Power1.easeIn})
            .to(".sunbeam",0.5,{css:{autoAlpha:0}},'go')
            .to(".suncenter",0.6,{css:{autoAlpha:0}},'go')
            .to(".centerfirst",0.5,{css:{autoAlpha:0}},'go');
        setTimeout(function() {
            window.location.href = self.href;
        }, 900);
        SVGAnimatedString.prototype.toString = function () { return this.baseVal; }
    });




    

 






	
});













    

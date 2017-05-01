$(window).load(function() {
    $("#start_loader").delay(400).fadeOut("slow");
//});
//window.addEventListener('load', function(){
    var menuIcon = document.getElementById("logosunIcon");




    var backgroundFilter = document.getElementById('menubackfilter');

    if (!menuIcon) {
        alert('hello');
        sunMenuOnEmptyPage();

    } else {
        menuIcon.menuClosed = true;
    }

    function sunMenuOnEmptyPage(){

            var sun2openTl = new TimelineMax();

            sun2openTl.set(".sunmenu",{css:{autoAlpha:1}})
                .set(".sunbeam",{css:{autoAlpha:0}})
                .fromTo("#center_3_text",0.4,{attr:{startOffset:'-70%'}},{attr:{startOffset:'0%'},ease:Power3.easeOut},'load')
                .fromTo("#center_2_text",0.4,{attr:{startOffset:'-70%'}},{attr:{startOffset:'0.6472%'},ease:Power1.easeOut})
                .fromTo("#center_1_text",0.4,{attr:{startOffset:'-70%'}},{attr:{startOffset:'1.123%'},ease:Power1.easeOut})

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
                .to("#burgerTop", 0.4, {directionalRotation:"-45_ccw", y:12, smoothOrigin:"50% 50%",  ease:Linear.easeNone},'load')
                .to("#burgerFilling", 0.4, {css:{scaleX:0 , autoAlpha:0, transformOrigin:"50% 50%"},  ease:Linear.easeNone},'load')
                .to("#burgerBot", 0.4, {directionalRotation:"45_cw", y:"-=12", smoothOrigin:"50% 50%", ease:Linear.easeNone},'load')
                .to("#menuname", 0.4, {autoAlpha:0},'load')
            ;


            //backgroundFilter.addEventListener('click', function(){
            //
            //    //menuIcon.className = 'is-closed';
            //    //backgroundFilter.className = 'backfilterOff';
            //
            //
            //    //var tl = new TimelineMax();
            //    //tl.fromTo(".sunmenu",0.8,{css:{autoAlpha:1}},{css:{autoAlpha:0}}, "off")
            //    //    .to("#burgerTop", 0.8, {directionalRotation:"0_short", y:0, smoothOrigin:"50% 50%",  ease:Linear.easeNone}, "off")
            //    //    .to("#burgerFilling", 0.8, {css:{scaleX:1 , autoAlpha:1, transformOrigin:"50% 50%"},  ease:Linear.easeNone}, "off")
            //    //    .to("#burgerBot", 0.8, {directionalRotation:"0_short", y:0, smoothOrigin:"50% 50%", ease:Linear.easeNone}, "off")
            //    //    .to("#menuname", 0.8, {autoAlpha:1}, "off");
            //    //menuIcon.menuClosed = true;
            //});

    }

    function menuIconHover() {
        if (menuIcon.menuClosed == true) {
            var tl = new TimelineLite();
            tl.to("#burgerTop", 0.4, {
                    directionalRotation: "-15_ccw",
                    y: 0,
                    smoothOrigin: "50% 50%",
                    ease: Linear.easeNone
                }, "logohoverOn")
                .to("#burgerBot", 0.4, {
                    directionalRotation: "15_cw",
                    y: 0,
                    smoothOrigin: "50% 50%",
                    ease: Linear.easeNone
                }, "logohoverOn")
                .to("#menuname", 0.4, {autoAlpha: 0, ease: Linear.easeNone}, "logohoverOn")
            ;
        }
    }
    function menuIconHoverOut(){
        if (menuIcon.menuClosed == true) {
            var tl = new TimelineLite();
            tl.to("#burgerTop", 0.6, {directionalRotation:"0_short", y:0, smoothOrigin:"50% 50%",  ease:Linear.easeNone}, "logohoverOff")
                .to("#burgerBot", 0.6, {directionalRotation:"0_short", y:0, smoothOrigin:"50% 50%",  ease:Linear.easeNone}, "logohoverOff")
                .to("#menuname", 0.8, {autoAlpha:1, ease:Linear.easeNone}, "logohoverOff")
            ;
        }

    }

    if (menuIcon) {
        var hideSunMenuOnLoadTl = new TimelineMax();
        hideSunMenuOnLoadTl.set(".sunmenu",{css:{autoAlpha:0}});

        menuIcon.addEventListener('mouseover', menuIconHover);
        menuIcon.addEventListener('mouseout', menuIconHoverOut);
        menuIcon.addEventListener('click', sunMenu);


        function sunMenu(){
            if (menuIcon.menuClosed == true) {
                menuIcon.className = 'is-open';
                backgroundFilter.className = 'backfilterOn';

                menuIcon.menuClosed = false;
                var sun2openTl = new TimelineMax();
                sun2openTl.set(".sunmenu",{css:{autoAlpha:1}})
                    .set(".sunbeam",{css:{autoAlpha:0}})
                    .fromTo("#center_3_text",0.4,{attr:{startOffset:'-70%'}},{attr:{startOffset:'0%'},ease:Power3.easeOut},'load')
                    .fromTo("#center_2_text",0.4,{attr:{startOffset:'-70%'}},{attr:{startOffset:'0.6472%'},ease:Power1.easeOut})
                    .fromTo("#center_1_text",0.4,{attr:{startOffset:'-70%'}},{attr:{startOffset:'1.123%'},ease:Power1.easeOut})

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
                    .to("#burgerTop", 0.4, {directionalRotation:"-45_ccw", y:12, smoothOrigin:"50% 50%",  ease:Linear.easeNone},'load')
                    .to("#burgerFilling", 0.4, {css:{scaleX:0 , autoAlpha:0, transformOrigin:"50% 50%"},  ease:Linear.easeNone},'load')
                    .to("#burgerBot", 0.4, {directionalRotation:"45_cw", y:"-=12", smoothOrigin:"50% 50%", ease:Linear.easeNone},'load')
                    .to("#menuname", 0.4, {autoAlpha:0},'load')
                ;
                backgroundFilter.addEventListener('click', function(){

                    menuIcon.className = 'is-closed';
                    backgroundFilter.className = 'backfilterOff';


                    var tl = new TimelineMax();
                    tl.fromTo(".sunmenu",0.8,{css:{autoAlpha:1}},{css:{autoAlpha:0}}, "off")
                        .to("#burgerTop", 0.8, {directionalRotation:"0_short", y:0, smoothOrigin:"50% 50%",  ease:Linear.easeNone}, "off")
                        .to("#burgerFilling", 0.8, {css:{scaleX:1 , autoAlpha:1, transformOrigin:"50% 50%"},  ease:Linear.easeNone}, "off")
                        .to("#burgerBot", 0.8, {directionalRotation:"0_short", y:0, smoothOrigin:"50% 50%", ease:Linear.easeNone}, "off")
                        .to("#menuname", 0.8, {autoAlpha:1}, "off");
                    menuIcon.menuClosed = true;
                });
            } else {
                menuIcon.className = 'is-closed';
                backgroundFilter.className = 'backfilterOff';

                var tl = new TimelineMax();
                  tl.fromTo(".sunmenu",0.8,{css:{autoAlpha:1}},{css:{autoAlpha:0}}, "off")
                      .to("#burgerTop", 0.8, {directionalRotation:"0_short", y:0, smoothOrigin:"50% 50%",  ease:Linear.easeNone}, "off")
                      .to("#burgerFilling", 0.8, {css:{scaleX:1 , autoAlpha:1, transformOrigin:"50% 50%"},  ease:Linear.easeNone}, "off")
                      .to("#burgerBot", 0.8, {directionalRotation:"0_short", y:0, smoothOrigin:"50% 50%", ease:Linear.easeNone}, "off")
                      .to("#menuname", 0.8, {autoAlpha:1}, "off");
                menuIcon.menuClosed = true;
            }
        }
    } else {

        var tlLogoSun = new TimelineMax();
        tlLogoSun.set(".sunbeam",{css:{autoAlpha:0}})
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
    }





    // click  
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




    // center click

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















$(window).load(function() {
    $("#darkblue_loader").delay(400).fadeOut("slow");
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


            var gotoUrl = $("#sendtopage").attr('href');
            function sendtopage() {
                $(location).attr("href", gotoUrl);
            };

        });   

    } else {   //behaviour and events for pointing device like mouse
        

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

},false);



    

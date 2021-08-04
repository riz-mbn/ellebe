(function($){

    var app = {
        onReady: function(){
            app.customDropdown();
        },	
        onLoad: function(){
            $(document).foundation();
            app.utils();
        },


		utils: function(){
            
            $('.navbar .btn-user').click(function(){
                $('#header').toggleClass('show-account');
                $('#header').removeClass('show-classes');
                $('#header').removeClass('show-menu');
            });
            
            $('.navbar .btn-classes').click(function(){
                $('#header').toggleClass('show-classes');
                $('#header').removeClass('show-account');
                $('#header').removeClass('show-menu');
            });

            $('.mobmenu .menu li.menu_item a').click(function(){
                $('.navicon').click();
            });

            $(window).scroll(function() {
                var getTop = $('.courses_results').offset().top;
                if ($(this).scrollTop() > getTop){  
                    $('.filter_sticky').addClass("active");
                }
                else{
                    $('.filter_sticky').removeClass("active");
                }

                var button_up;
                var sticky = false;
                var top = $(window).scrollTop();
                    
                if ( $(".sticky-container").offset().top < top ) {

                    $('.sticky').addClass('is-stuck');
                    $('.sticky').removeClass('is-anchored');
                    sticky = true;

                } else {

                        $('.sticky').addClass('is-anchored');
                        $('.sticky').removeClass('is-stuck');

                }                
                    
                if ( $(".sticky-container").offset().top < top ) {
                    $('.services_sticky, .services_nav, .services').addClass('is_sticky');
                    sticky = true;

                } else {

                        $('.services_sticky, .services_nav, .services').removeClass('is_sticky');

                }
                /* Button Scroll Up */
                (button_up = function() {
                    var button;
                    button = $('.btn_scroll_up');
                    if (top > $(window).offset().top){
                        return button.fadeIn('slow');
                    } else {
                        return button.fadeOut('slow');
                    }
                })();                   

            });

            //Click event to scroll to top
            $('.btn_scroll_up').click(function(){
                $('html, body').animate({scrollTop : 0},800);
                return false;
            });            

            // //smooth scroll
            // $('.home_page .menu_item a[href^="#"]').on('click',function (e) {
            //     e.preventDefault();
            //     var target = this.hash;
            //     var $target = $(target);
            //     var offset = $( window ).height() / 2;

            //     $('html, body').stop().animate({
            //         'scrollTop': $target.offset().top - offset
            //     }, 1000, 'swing', function () {
            //         window.location.hash = target;
            //     });
            // });

            $('a[href*="#"]')
            // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function(event) {
                // On-page links
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
                && location.hostname == this.hostname) {

                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

                    // Does a scroll target exist?
                    if (target.length) {

                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();

                        $('html, body').animate({
                        scrollTop: target.offset().top
                        }, function() {

                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);

                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                        
                        });
                    }
                }
            });
            
                var $windowWidth = $(window).width();

                if ($windowWidth <= 1023) {
                    
                    $('.services_nav').slick({                        
                        dots: false,
                        arrow: true,
                        speed: 300,
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        variableWidth: true,
                        infinite: true,
                        draggable: true,
                    });

                    $('.services_nav.slick-slider .nav_item').each(function(){

                    //$('.services_item:first-child').siblings('.services_item').hide();

                         $(this).on('click', function(e) {
                            e.preventDefault();
            
                            var target = $(this).data('anchor'); 
                            var $target = $(target);                           

                             $('html, body').stop().animate({
                                'scrollTop': $target.offset().top - 40
                            }, function() {

                                // Callback after animation
                                // Must change focus!
                                window.location.hash = target;
                                
                            });

                            // $('#' + target +'.clicked').removeClass('clicked');
                            //  $('#' + target).addClass('clicked');
                        //    $('html, body').animate({scrollTop : 0},800);
                        //      $('#' + target).fadeIn('slow').siblings('.services_item').fadeOut('slow');
                        //     $('#' + target).addClass('clicked').siblings('.services_item').removeClass('clicked');
                        
                           });
                        
                     });
                }

                if ($windowWidth <= 1400) {
                    
                    $('.services_info_items').slick({
                      dots: false,
                      arrow: true,
                      infinite: true,
                      speed: 300,
                      slidesToShow: 5,
                      slidesToScroll: 1,
                      variableWidth: true,
                      focusOnSelect: true,
                      draggable: true,
                      asNavFor: '.services_info_contents',
                      responsive: [
                        {
                          breakpoint: 1200,
                          settings: {
                            slidesToShow: 5,
                            slidesToScroll: 1
                          }
                        },
                          {
                            breakpoint: 375,
                            settings: {
                              slidesToShow: 5,
                              slidesToScroll: 1
                            }
                          }
                        ]                    
                    });
                    $('.services_info_contents').slick({
                        dots: false,
                        arrow: false,
                        infinite: true,
                        speed: 300,
                        asNavFor: '.services_info_items',                 
                      });
                  }

                    
            //smooth scroll
            $('a[href^="#"]').on('click',function (e) {
                e.preventDefault();
                var target = this.hash;
                var $target = $(target);
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top - 100
                }, 900, 'swing', function () {
                    // window.location.hash = target;
                });
            });

            var $el, $ps, $up, totalHeight;

            $(".col-copy .button").click(function() {
                
            totalHeight = 0

            $el = $(this);
            $p  = $el.parent();
            $up = $p.parent();
            $ps = $up.find("div:not('.btn_read_more')");
            
            // measure how tall inside should be by adding together heights of all inside paragraphs (except read-more paragraph)
            $ps.each(function() {
                totalHeight += $(this).outerHeight();
            });
                    
            $up
                .css({
                // Set height to prevent instant jumpdown when max height is removed
                "height": $up.height(),
                "max-height": '100%'
                })
                .animate({
                "height": '100%'
                });
            
            // fade out read-more
            $p.fadeOut();
            
            // prevent jump-down
            return false;
                
            });
        },

        customDropdown: function() {
            $('.custom_dropdown > li').hover(function(){
                $(this).addClass('hover');
            }, function(){
                $(this).removeClass('hover');
            })

            $('.custom_dropdown > li').click(function(){
                $(this).toggleClass('hover');
            });

            
        }
        
        
    }


    document.addEventListener('DOMContentLoaded', app.onReady);
    window.addEventListener('load', app.onLoad);

})(jQuery);

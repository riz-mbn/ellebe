
    </main>
    
    <footer id="footer" class="footer">
        <div class="footer_top">
            <div class="grid-container">
                <div class="grid-x ">
                    <div class="cell medium-12 large-3 xlarge-3 col-item footer_col">    
                        <a class="footer_logo" href="<?php echo get_home_url(); ?>">
                            <figure>
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/ElleBe_logo.png" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="cell small-12 medium-6 large-1 xlarge-2 col-item footer_col desktop_only">
                        <a class="title " href="<?php echo home_url();?>"><p>Home</p></a>     
                    </div>
                    <div class="cell small-12 medium-6 large-2 xlarge-2 col-item footer_col ">           
                        <a class="title" href="<?php echo home_url("/services/");?>"><p>Services</p></a>    
                        <div class="grid-x">
                            <div class="small-6 medium-6 large-12">
                                <a href="<?php echo home_url("/services/#botox");?>"><p>Botox/Dysport</p></a>
                                <a href="<?php echo home_url("/services/#dermafiller");?>"><p>Dermal Filler</p></a>
                                <a href="<?php echo home_url("/services/#prf");?>"><p>PRF</p></a>
                            </div>
                            <div class="small-6 medium-6 large-12">
                                <a href="<?php echo home_url("/services/#kybella");?>"><p>Kybella</a>
                                <a href="<?php echo home_url("/services/#pdo");?>"><p>PDO Thread Lift</p></a>
                                <a href="<?php echo home_url("/services/#microneedling");?>"><p>Microneedling</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="cell small-12 medium-6 large-3 xlarge-2 col-item footer_col"> 
                        <p class="title">Business Hours</p>
                        <div class="grid-x">
                            <div class="small-6 medium-6 large-12"><p>Monday to Friday</p></div>
                            <div class="small-6 medium-6 large-12"><p>9:00 a.m. - 6:00 p.m.</p></div>
                        </div>
                        <div class="grid-x">
                            <div class="small-6 medium-6 large-12"><p>Saturday</p></div>
                            <div class="small-6 medium-6 large-12"><p>9:00 a.m. - 1:00 p.m.</p></div>
                        </div>
                    </div>
                    <div class="cell small-12 medium-12 large-3 xlarge-3 col-item footer_col">                            
                        <a class="title" href="<?php echo esc_url('tel:4806857380'); ?>"><p>Call 480-685-7380</p></a>
                        <p>7077 E. Bell Rd, Suite 200-310 Scottsdale, AZ 85254</p>
                        </p>info@ellebemedspa.com</p>
                        <div class="social_icons">
                            <a href="<?php echo esc_url('https://www.facebook.com/ElleBe-Medical-Aesthetics-101151665599430'); ?>" target="_blank">
                                <figure>
                                    <img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-fb.png" alt="">
                                </figure>
                            </a>
                            <a href="<?php echo esc_url('https://www.instagram.com/lindsay_aestheticpa/'); ?>" target="_blank">
                                <figure>
                                    <img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-ig.png" alt="">
                                </figure>
                            </a>
                            <a href="<?php echo esc_url('https://www.yelp.com/biz/ellebe-medical-aesthetics-scottsdale'); ?>" target="_blank">
                                <figure>
                                    <img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-yelp.png" alt="">
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>       
            </div>       
        </div>        
        <div class="footer_bottom">
            <div class="grid-container">
                <div class="footer_copyright">
                    Ellebe Medical Aesthetics ©2021.<span> | </span>
                </div>
                <div class="footer_links">
                    <a href="<?php echo home_url('/privacy-policy');?>">Privacy Policy</a><span> | </span>
                    <a href="<?php echo home_url('/terms-of-use');?>">Terms of Use</a></div>
                </div>
            </div> 
        </div>
    </footer>
</div>  
<script>
(function($){
	$(window).load(function(){
		
		var $windowWidth = $(window).width();
		var offset = 0;
		// *only* if we have anchor on the url
		if(window.location.hash) {
			if( $windowWidth <= 1023 ){ offset = 250;}
			else { offset = 100; }	
			var scroll = $(window.location.hash).offset().top - offset;
			scroll  = scroll + 'px';
			
			// smooth scroll to the anchor id
			$('html, body').animate({
				scrollTop: scroll
			});
		
			var url  = window.location.hash;
			var hash = url.substring(url.indexOf("#")+1);
			$('.services_nav .nav_item.' + hash).addClass('is_active slick-current').siblings('.slick-slide').removeClass('is_active slick-current');     
			$('.subnav .menu .menu_item.' + hash).addClass('is_active').siblings('.menu_item').removeClass('is_active');     
		}            
		else {

			$('.services_nav .nav_item.botox').addClass('is_active slick-current');
			$('.subnav .menu .menu_item.botox').addClass('is_active');
		}
                        
		$('.menu .submenu .menu_item').click(function(e){
			var anchor = $(this).attr('data-anchor');
			//$('.subnav .menu .menu_item.' + anchor).addClass('is_active').siblings().removeClass('is_active'); 
			
			if( !$('.services_nav .nav_item.' + anchor).hasClass('is_active') ) {
				$('.services_nav .nav_item.is_active').removeClass('is_active slick-current');
				$('.services_nav .nav_item.' + anchor).addClass('is_active slick-current');
			}	
			
			e.stopPropagation();
		});      

		$('.subnav .menu .menu_item').click(function(e){
			$('.subnav .menu .menu_item.is_active').removeClass('is_active');
			$(this).addClass('is_active');
		});           

		$('.services_nav .nav_item').click(function(e){
			$('.services_nav .nav_item.is_active').removeClass('is_active slick-current');
			$(this).addClass('is_active slick-current');
		});

		//smooth scroll
		$('a[href*="#"]').click(function (e) {
			var target = this.hash;
			var $target = $(target);
			var name = this.hash.slice(1);
			var offset = 0;
           var $windowWidth = $(window).width();
			
			target = target.length ? target : $('[name=' + name +']');

			if( $windowWidth <= 1023 ){
				offset = 150;
			}
			else {
				offset = 150;
			}
			
			offset = $target.offset().top - offset + 'px';
			
			$('html, body').stop().animate({
				scrollTop: offset
			}, function () {
				window.location.hash = target;
			});
		});
		
		
            var lastId, topMenu = $('.services_menu'),
            topMenuHeight = topMenu.outerHeight()+15,
            // All list items
            menuItems = topMenu.find('a'), 
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function(){
                var url = $(this).attr("href");
                var hash = url.substring(url.indexOf("#"));
                var item = $(hash);
                if (item.length) { return item; }
            });   
		
			$(window).scroll(function() {  
                // Get container scroll position
                var fromTop = $(this).scrollTop()+topMenuHeight;
				
			if( $windowWidth <= 1023 ){ offset = 250;}
			else { offset = 200; }	
                // Get id of current scroll item
                var cur = scrollItems.map(function(){
                    var offsetTop = $(this).offset().top - offset;
                    if (offsetTop < fromTop)
                    return this;
                });                
                // Get the id of the current element
                cur = cur[cur.length-1];
                var id = cur && cur.length ? cur[0].id : "";

				console.log(id);
				
                if (lastId !== id) {
                    lastId = id;   
					var serv_menu = ".services_menu .menu_item." + id;
					$(serv_menu).addClass('is_active').siblings('.menu_item').removeClass('is_active');     
					
					if( !$('.services_nav .nav_item.' + id).hasClass('is_active') ) {
						$('.services_nav .nav_item.is_active').siblings().removeClass('is_active slick-current');
						$('.services_nav .nav_item.' + id).addClass('is_active slick-current');
					}
				} 
				
                //submenu services on scroll desktop
                var getTop = $('.sticky-container').offset().top;                            
                var scrollTop = $(window).scrollTop();
                if ( scrollTop > 180) {
                    $('.subnav').addClass('is_sticky');
                    sticky = true;
                } else {
                    $('.subnav').removeClass('is_sticky');
                }
				
				          
                var scrollTop = $(window).scrollTop();
                // sticky on submenu services and services on scroll mobile
                if ( scrollTop > 250) {
                    $('.services_nav, .services').addClass('is_sticky');
                    sticky = true;

                } else {
                    $('.services_nav, .services').removeClass('is_sticky');
                }


			});
		// $('img').removeAttr('width height');
	});

})(jQuery);
</script>
<?php wp_footer() ?>

</body>
</html>


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
                        <a href="mailto:info@ellebemedspa.com"></p>info@ellebemedspa.com</p></a>
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

<?php wp_footer() ?>

</body>
</html>
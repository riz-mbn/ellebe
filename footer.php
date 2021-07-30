

    </main>
    
    <footer id="footer" class="footer">
        <div class="footer_top">
            <div class="grid-container">
                <div class="grid-x ">
                    <div class="cell medium-6 large-3 xlarge-3 col-item footer_col">    
                        <a class="footer_logo" href="<?php echo get_home_url(); ?>">
                            <figure>
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/ElleBe_logo.png" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="cell small-6 medium-6 large-3 xlarge-3 col-item footer_col">
                        <a class="title" href="<?php echo home_url("/services/");?>"><p>Services</p></a>                        
                        <div class="inner">
                            <div class="col">
                                <a href="<?php echo home_url("/services/#botox");?>"><p>Botox/Dysport</p></a>
                                <a href="<?php echo home_url("/services/#dermafiller");?>"><p>Dermal Filler</p></a>
                                <a href="<?php echo home_url("/services/#prf");?>"><p>PRF</p></a>
                            </div>
                            <div class="col">
                                <a href="<?php echo home_url("/services/#kybella");?>"><p>Kybella</a>
                                <a href="<?php echo home_url("/services/#pdo");?>"><p>PDO Thread Lift</p></a>
                                <a href="<?php echo home_url("/services/#microneedling");?>"><p>Microneedling</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="cell small-6 medium-6 large-3 xlarge-3 col-item footer_col"> 
                        <p class="title">Business Hours</p>
                        <div class="inner">
                            <div class="col"><p>Monday to Friday</p></div>
                            <div class="col"><p>9:00 a.m. - 5:00 p.m.</p></div>
                        </div>
                        <div class="inner">
                            <div class="col"><p>Saturday</p></div>
                            <div class="col"><p>10:00 a.m. - 3:00 p.m.</p></div>
                        </div>
                    </div>
                    <div class="cell small-12 medium-12 large-3 xlarge-3 col-item footer_col">                            
                        <a class="title" href="<?php echo esc_url('tel:4806857380'); ?>"><p>Call 480-685-7380</p></a>
                        <p>7077 E. Bell Rd, Suite 200-310 Scottsdale, AZ 85254</p>
                        <a href="info@ellebemedspa.com"></p>info@ellebemedspa.com</p></a>
                        <div class="social_icons">
                            <a href="<?php echo esc_url('https://www.facebook.com/ElleBe-Medical-Aesthetics-101151665599430'); ?>">
                                <figure>
                                    <img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-fb.png" alt="">
                                </figure>
                            </a>
                            <a href="<?php echo esc_url('https://www.instagram.com/lindsay_aestheticpa/'); ?>">
                                <figure>
                                    <img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-ig.png" alt="">
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>       
            </div>       
        </div>
        <div class="footer_bottom">
            <div class="grid-container">
                <?php 
                if ( is_active_sidebar( 'footer-bottom' ) ) :
                    dynamic_sidebar( 'footer-bottom' );
                endif; 
                ?>
            </div> 
        </div>
    </footer>
</div>  

<?php wp_footer() ?>

</body>
</html>
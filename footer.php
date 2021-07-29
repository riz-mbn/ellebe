

    </main>
    
    <footer id="footer" class="footer">
        <div class="footer_top">
            <div class="grid-container">
                <div class="grid-x ">
                    <div class="cell medium-6 large-3 xlarge-3 col-item">                                      
                        <?php 
                        if ( is_active_sidebar( 'footer-col-1' ) ) :
                            dynamic_sidebar( 'footer-col-1' );
                        endif; 
                        ?>
                    </div>
                    <div class="cell small-6 medium-6 large-3 xlarge-3 col-item">
                        <?php 
                        if ( is_active_sidebar( 'footer-col-2' ) ) :
                            dynamic_sidebar( 'footer-col-2' );
                        endif; 
                        ?>
                    </div>
                    <div class="cell small-6 medium-6 large-3 xlarge-3 col-item"> 
                        <?php 
                        if ( is_active_sidebar( 'footer-col-3' ) ) :
                            dynamic_sidebar( 'footer-col-3' );
                        endif; 
                        ?>
                    </div>
                    <div class="cell small-6 medium-6 large-3 xlarge-3 col-item">     
                        <?php 
                        if ( is_active_sidebar( 'footer-col-4' ) ) :
                            dynamic_sidebar( 'footer-col-4' );
                        endif; 
                        ?>
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
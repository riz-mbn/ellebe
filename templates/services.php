<?php 
    /* Template Name: Services template */
    get_header();
?>

<section class="hero hero-s3 services_hero services_sticky"  data-sticky data-options="marginTop:0">
    <figure class="bg"><img src="<?php echo MBN_ASSETS_URI ?>/img/bgs/img_services_hdr.jpeg" alt=""></figure>
    <div class="hero-caption">
        <div class="grid-container"> 
            <div class="grid-x grid-margin-x">
                <div class="cell large-6 large-offset-1 align-self-middle small-order-2 large-order-1 col-copy">
                    <div class="inner">
                        <h1>Be comfortable. Be confident.<br/>Be beautiful. Be you.</h1>
                    </div>
                </div>
                <div class="cell small-10 small-offset-3 large-5 large-offset-0 align-self-middle small-order-1 large-order-2 col-image">     
                    <div class="inner">               
                        <figure class="text-center"><img src="<?php echo MBN_ASSETS_URI ?>/img/img_services_lindsay.png" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subnav">
        <div class="grid-container">
            <ul class="menu" data-smooth-scroll data-offset="350">
                <li class="menu_item"><a href="<?php echo home_url().'/services/#botox' ?>">BOTOX</a></li>
                <li class="menu_item"><a href="<?php echo home_url().'/services/#dermafiller' ?>">DERMA FILLER</a></li>
                <li class="menu_item"><a href="<?php echo home_url().'/services/#pdo' ?>">PDO THREAD LIFT</a></li>
                <li class="menu_item"><a href="<?php echo home_url().'/services/#prf' ?>">PRF</a></li>
                <li class="menu_item"><a href="<?php echo home_url().'/services/#kybella' ?>">KYBELLA</a></li>
                <li class="menu_item"><a href="<?php echo home_url().'/services/#microneedling' ?>">MICRONEEDLING</a></li>
            </ul>
        </div>
    </div>
</section>


<div class="services_content">
    <div class="services_nav">
        <div class="nav_item" data-anchor="botox" ><div><span>BOTOX</span></div></div>
        <div class="nav_item" data-anchor="dermafiller"><div><span>DERMA FILLER</span></div></div>
        <div class="nav_item" data-anchor="pdo" ><div><span>PDO THREAD LIFT</span></div></div>
        <div class="nav_item" data-anchor="prf" ><div><span>PRF</span></div></div>
        <div class="nav_item" data-anchor="kybella" ><div><span>KYBELLA</span></div></div>
        <div class="nav_item" data-anchor="microneedling" ><div><span>MICRONEEDLING</span></div></div>
    </div>
    <div class="services">            
        <div id="botox" class="services_item botox_section padding_v_40">
            <div class="grid-container"> 
                <div class="grid-x grid-margin-x cols2-s1">
                    <div class="cell large-6 large-order-1 col-copy align-self-middle">
                        <div class="section_title">
                            <h2>Botox</h2>
                        </div>
                        <div class="section_content desktop_only">
                            <p>Botox and Dysport work to treat and prevent fine lines and wrinkles. They are most commonly used for the furrow lines in between the brows, horizontal lines to the forehead, and crow’s feet. The medication is injected into the muscle to affect the movement that causes the wrinkles. Results can last 3-4 months on average. </p>
                            <p>Neuromodulators are also used for off-label use including lines on the nose, neck lines and bands, frowning, gummy smiles, chin dimples, lip flips, hyperhidrosis (excessive sweating), and jawline slimming. </p>
                        </div>                
                    </div>
                    <div class="cell large-6 large-order-2">
                        <figure class="col-image"><img src="<?php echo MBN_ASSETS_URI ?>/img/img_serv_botox.png" alt=""></figure>
                        <div class="col-copy mobile_only">
                            <div class="section_content">
                                <p>Botox and Dysport work to treat and prevent fine lines and wrinkles. They are most commonly used for the furrow lines in between the brows, horizontal lines to the forehead, and crow’s feet. The medication is injected into the muscle to affect the movement that causes the wrinkles. Results can last 3-4 months on average. </p>
                                <p>Neuromodulators are also used for off-label use including lines on the nose, neck lines and bands, frowning, gummy smiles, chin dimples, lip flips, hyperhidrosis (excessive sweating), and jawline slimming. </p>
                            </div>                
                        </div>
                        <div class="buttons cta-group mobile_only">
                            <a href="https://ellebe.myaestheticrecord.com/book/appointments" class="button primary"><?php echo esc_html('Schedule Services'); ?> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="dermafiller" class="services_item dermafiller_section padding_v_40">
            <figure class="floating_img img_lady_3"><img src="<?php echo MBN_ASSETS_URI ?>/img/img_lady_3.png" alt="" class="" /></figure>
            <div class="grid-container"> 
                <div class="grid-x grid-margin-x cols2-s1">
                    <div class="cell large-6 large-order-2 col-copy align-self-middle">
                        <div class="section_title">
                            <h2>Dermal filler</h2>
                            <h4>Juvederm/Restylane</h4>
                        </div>
                        <div class="section_content desktop_only">
                            <p>Most dermal fillers are made of hyaluronic acid. Fillers can be hydrating and are used to improve wrinkles and folds or to add or replace volume loss to various areas of the face. Most results are instant and can last anywhere from 6 months to two years depending on the amount and type of product used or the area being injected. </p>
                        </div>                
                    </div>
                    <div class="cell large-6 large-order-1">
                        <figure class="col-image"><img src="<?php echo MBN_ASSETS_URI ?>/img/img_serv_dermafiller.png" alt=""></figure>
                        <div class="col-copy mobile_only">
                            <div class="section_content">
                                <p>Most dermal fillers are made of hyaluronic acid. Fillers can be hydrating and are used to improve wrinkles and folds or to add or replace volume loss to various areas of the face. Most results are instant and can last anywhere from 6 months to two years depending on the amount and type of product used or the area being injected. </p>
                            </div>                
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        <div id="pdo" class="services_item pdo_section padding_v_40">
            <div class="grid-container"> 
                <div class="grid-x grid-margin-x cols2-s1">
                    <div class="cell large-6 large-order-1 col-copy align-self-middle">
                        <div class="section_title">
                            <h2>PDO Thread Lift</h2>
                        </div>
                        <div class="section_content desktop_only">
                            <p>PDO threads are made of polydioxanone and are used to lift and tighten sagging skin tissue. The treatments are safe and effective with minimal side effects and downtime. They can provide an instant lift, stimulate collagen production, and tighten skin. These are most commonly used in the face and neck. </p>
                        </div>                
                    </div>
                    <div class="cell large-6 large-order-2">
                        <figure class="col-image"><img src="<?php echo MBN_ASSETS_URI ?>/img/img_serv_pdo.png" alt=""></figure>
                        <div class="col-copy mobile_only">
                            <div class="section_content">
                                <p>PDO threads are made of polydioxanone and are used to lift and tighten sagging skin tissue. The treatments are safe and effective with minimal side effects and downtime. They can provide an instant lift, stimulate collagen production, and tighten skin. These are most commonly used in the face and neck. </p>
                            </div>                
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div id="prf" class="services_item prf_section padding_v_40">
            <figure class="floating_img img_lady_4"><img src="<?php echo MBN_ASSETS_URI ?>/img/img_lady_4.png" alt="" class="" /></figure>
            <div class="grid-container"> 
                <div class="grid-x grid-margin-x cols2-s1">
                    <div class="cell large-6 large-order-2 col-copy align-self-middle">
                        <div class="section_title">
                            <h2>PRF</h2>
                        </div>
                        <div class="section_content desktop_only">
                            <p>Platelet Rich Fibrin is obtained by drawing a patient’s blood and processing it in order to be used for treatment. It consists of a high concentration of platelets which contain growth factors. These help to stimulate collagen production and helps with healing and tissue repair of aging skin. It is also used to stimulate hair growth and helps to reduce scarring. It can be used with microneedling or as an injection. PRF is a more natural approach to combat the effects of aging, hair loss, and volume loss. </p>
                        </div>                
                    </div>
                    <div class="cell large-6 large-order-1">
                        <figure class="col-image"><img src="<?php echo MBN_ASSETS_URI ?>/img/img_serv_prf.png" alt=""></figure>
                        <div class="col-copy mobile_only">
                            <div class="section_content">
                                <p>Platelet Rich Fibrin is obtained by drawing a patient’s blood and processing it in order to be used for treatment. It consists of a high concentration of platelets which contain growth factors. These help to stimulate collagen production and helps with healing and tissue repair of aging skin. It is also used to stimulate hair growth and helps to reduce scarring. It can be used with microneedling or as an injection. PRF is a more natural approach to combat the effects of aging, hair loss, and volume loss. </p>
                            </div>                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="kybella" class="services_item kybella_section padding_v_40">
            <div class="grid-container"> 
                <div class="grid-x grid-margin-x cols2-s1">
                    <div class="cell large-6 large-order-1 col-copy align-self-middle">
                        <div class="section_title">
                            <h2>Kybella</h2>
                        </div>
                        <div class="section_content desktop_only">
                            <p>Kybella consists of deoxycholic acid which helps to destroy fat cells. It is FDA approved to improve the appearance of a double chin. Treatment is fast and permanent with minimal downtime. It may require multiple treatments in order to achieve desired results.</p>
                        </div>                
                    </div>
                    <div class="cell large-6 large-order-2">
                        <figure class="col-image"><img src="<?php echo MBN_ASSETS_URI ?>/img/img_serv_kybella.png" alt=""></figure>
                        <div class="col-copy mobile_only">
                            <div class="section_content">
                                <p>Kybella consists of deoxycholic acid which helps to destroy fat cells. It is FDA approved to improve the appearance of a double chin. Treatment is fast and permanent with minimal downtime. It may require multiple treatments in order to achieve desired results.</p>
                            </div>                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="microneedling" class="services_item microneedling_section padding_v_40">
            <figure class="floating_img img_lady_5"><img src="<?php echo MBN_ASSETS_URI ?>/img/img_lady_5.png" alt="" class="" /></figure>
            <div class="grid-container"> 
                <div class="grid-x grid-margin-x cols2-s1">
                    <div class="cell large-6 large-order-2 col-copy align-self-middle">
                        <div class="section_title">
                            <h2>Microneedling</h2>
                        </div>
                        <div class="section_content desktop_only">
                            <p>Microneedling is a popular treatment that provides multiple skin benefits. This treatment involves tiny sterilized needles that help to stimulate collagen production for skin tightening, improved texture, pore size, acne scars, and fine lines and wrinkles. This procedure helps to make your skin look younger and healthier. There is minimal downtime and is usually done every 4-6 weeks for optimal results.</p>
                        </div>                
                    </div>
                    <div class="cell large-6 large-order-1">
                        <figure class="col-image"><img src="<?php echo MBN_ASSETS_URI ?>/img/img_serv_micro.png" alt=""></figure>
                        <div class="col-copy mobile_only">
                            <div class="section_content">
                                <p>Microneedling is a popular treatment that provides multiple skin benefits. This treatment involves tiny sterilized needles that help to stimulate collagen production for skin tightening, improved texture, pore size, acne scars, and fine lines and wrinkles. This procedure helps to make your skin look younger and healthier. There is minimal downtime and is usually done every 4-6 weeks for optimal results.</p>
                            </div>    
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<section id="contact" class="contact_section padding_v_40">
    <figure class="floating_img img_lady_2"><img src="<?php echo MBN_ASSETS_URI ?>/img/img_lady_2.png" alt="" class="" /></figure>
    <figure class="floating_img img_flower"><img src="<?php echo MBN_ASSETS_URI ?>/img/img_flower.png" alt="" class="" /></figure>
    <div class="grid-container">
        <div class="grid-x grid-margin-x contact_wrap">
            <div class="cell large-8 medium-12 small-12">
                <figure class=""><img src="<?php echo MBN_ASSETS_URI ?>/img/img_ladies.jpg" alt="" class="" /></figure>
            </div>
            <div class="cell large-4 medium-12 small-12">
                <div class="contact_box">
                    <h2 class="text_center">Get in touch with us</h2>
                    <?= do_shortcode('[gravityform id="1" title="false" description="false" ajax="false"]') ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    get_footer(); 
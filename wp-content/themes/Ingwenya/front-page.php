<?php get_header()?>

<main>
    <section class="design" id="main3">
        <section id="about">
            <h2>ABOUT US</h2>
            <p>Ingwenya Mineral Processing (Pty) Ltd (IMP) is a South African owned mineral
                processing company with 52% black Shareholding based in Emalahleni, Mpumalanga
                Province. IMP is a level 4 BEE contributor. The company was incorporated in 2006 to
                service the mining industry in the field of contract mineral processing consulting
                services with specific focus on the coal industry. Since 2006 IMP has designed, built
                and commissioned successful coal processing plants. IMP specializes in the supply of
                cost effective, flexible modular plants, which are built within short lead times. Our
                modular plants are tailor-made and easy to operate.</p>
            <p>As a midtier coal-minerals processing specialist, IMPs vision is grow its portfolio
                beyond local borders and to also diversify into other commodities. Ingwenya is
                involved in technological advancements that will see the industry develop.</p>
        </section>
        <section id="products">
            <h2>PRODUCTS / SERVICES</h2>
            <div id="product-row">
                <div class="product">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/ING0529-1-scaled.jpg">
                    <a href="<?php bloginfo('wpurl')?>/services">Operation and maintenance of processing facilities</a>
                </div>
                <div class="product">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Plant3.jpg">
                    <a href="<?php bloginfo('wpurl')?>/services">Design and build of coal processing of coal processing
                        plants</a>
                </div>
                <div class="product">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Plant2.jpg">
                    <a href="<?php bloginfo('wpurl')?>/services">Plant modifications, retrofits and additions</a>
                </div>
                <div class="product">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Picture1-1.jpg">
                    <a href="<?php bloginfo('wpurl')?>/services">General metallurgical consulting</a>
                </div>
                <div class="product">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Three-Product-Cyclone.png">
                    <a href="<?php bloginfo('wpurl')?>/services">Consultation: Feasibility and Due diligence Studies</a>
                </div>
                <div class="product">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Picture1-2.jpg">
                    <a href="<?php bloginfo('wpurl')?>/services">Engineering design and fabrication</a>
                </div>
            </div>
        </section>
        <section id="projects">
            <h2>OPERATIONS</h2>
            <div id="project-row">
                <div class="project">
                    <h3>Mpumalanga</h3>
                    <a href="<?php bloginfo('wpurl')?>/operations">Umlalazi</a>
                    <a href="<?php bloginfo('wpurl')?>/operations">Phalanndwa</a>
                    <a href="<?php bloginfo('wpurl')?>/operations">New Clydesdale Colliery</a>
                    <a href="<?php bloginfo('wpurl')?>/operations">Hakhano</a>
                    <a href="<?php bloginfo('wpurl')?>/operations">Khanye Colliery</a>
                    <a href="<?php bloginfo('wpurl')?>/operations">Holgoun</a>
                </div>
                <div class="project">
                    <h3>Kwazulu Natal</h3>
                    <a href="<?php bloginfo('wpurl')?>/operations">ZAC Discard Plant</a>
                </div>
            </div>
        </section>
        <section id="news">
            <h2>NEWS</h2>
            <div id="news-row">
                <?php
            $args = array(
            'post_type'      => 'post',
            'posts_per_page'    => '4'
            );
            $query = new WP_Query($args);
            if ( $query->have_posts() ) : while ($query->have_posts()) : $query->the_post();?>
                <a href="<?php bloginfo('wpurl')?>/media" class="news">
                    <div class="date"><?php the_time("d")?></div>
                    <div class="title"><?php the_title()?></div>
                </a>
                <?php endwhile; else:?>
                <p>There are currently no blog posts, please check back later.</p>
                <?php endif?>
            </div>
        </section>
        <section id="clients">
            <h2>OUR CLIENTS</h2>
            <div id="client-row">
                <div class="client">
                    <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2020/01/CNY_logo-01.png">
                </div>
                <div class="client">
                    <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2020/01/images.png">
                </div>
                <div class="client">
                    <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2020/02/HolGoun-Mining-Logo-scaled.jpg">
                </div>
                <div class="client">
                    <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2020/02/anglo-coal.jpg">
                </div>
            </div>
        </section>
    </section>
</main>

<?php get_footer()?>
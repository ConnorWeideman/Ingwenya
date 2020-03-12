<?php get_header()?>
<main>
    <section id="news1" class="design">
        <h1>MEDIA</h1>
        <div class="expand">
            <h2>GALLERY</h2>
            <i class="fas fa-chevron-down"></i>
        </div>
        <section id="gallery">
            <div id="wrap">
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/Kiepersol-8th-Nov-2011-026.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/ING0518-1-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/Phalanndwa3-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/BE9296-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/BE9284-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/BE9230-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/tiling-@Bomax-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/tiling-@-Bomax-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/BOMAX-welding-photo-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/Ingwenya-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Umlalazi.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Picture2.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Picture1-1.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/N-C-C-1.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Plant4.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Three-Product-Cyclone.png">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Plant1.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Plant2.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Picture1.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/ING0623.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/ING0529-1.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/ING0646-1.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Picture1-2.jpg">
                </div>
            </div>
        </section>
        <div class="expand">
            <h2>NEWS</h2>
            <i class="fas fa-chevron-down"></i>
        </div>
        <section id="news">
            <div class="circle"></div>
            <?php
            $args = array(
            'post_type'      => 'post',
            'posts_per_page'    => '2'
            );
            $query = new WP_Query($args);
            if ( $query->have_posts() ) : while ($query->have_posts()) : $query->the_post();?>

            <article class="news">
                <div class="circle"></div>
                <div class="left">
                    <div class="day"><?php the_time("d")?></div>
                    <div class="month"><?php the_time("F")?></div>
                </div>
                <div class="right">
                    <h2><?php the_title()?></h2>
                    <p><?php the_content()?></p>
                </div>
            </article>
            <?php endwhile;
            echo paginate_links(
                array(
                    'format'             => '/page/%#%',
                    'end_size'           => 1,
                    'mid_size'           => 3,
                    'prev_next'          => true,
                    'prev_text'          => __('«'),
                    'next_text'          => __('»'),
                )
            );
            endif?>
        </section>
        <div class="expand">
            <h2>PRESS RELEASES</h2>
            <i class="fas fa-chevron-down"></i>
        </div>
        <section id="press">
            <div class="release">
                <h3>Press Release</h3>
                <p>Vivamus quis dapibus nisi. Maecenas porttitor risus et urna tincidunt lobortis. Sed ultricies sapien
                    a felis mattis, quis tempor nunc accumsan. Nam a orci quis purus imperdiet semper vel sed velit.
                    Fusce malesuada vehicula lectus et ultrices. Curabitur vestibulum ac erat pharetra cursus.
                    Vestibulum eget velit eu libero tempus fermentum. Sed accumsan sodales dui, sed pretium elit auctor
                    ac. Proin facilisis varius sem id vehicula....</p>
            </div>
            <div class="release">
                <h3>Press Release</h3>
                <p>Vivamus quis dapibus nisi. Maecenas porttitor risus et urna tincidunt lobortis. Sed ultricies sapien
                    a felis mattis, quis tempor nunc accumsan. Nam a orci quis purus imperdiet semper vel sed velit.
                    Fusce malesuada vehicula lectus et ultrices. Curabitur vestibulum ac erat pharetra cursus.
                    Vestibulum eget velit eu libero tempus fermentum. Sed accumsan sodales dui, sed pretium elit auctor
                    ac. Proin facilisis varius sem id vehicula....</p>
            </div>
            <div class="release">
                <h3>Press Release</h3>
                <p>Vivamus quis dapibus nisi. Maecenas porttitor risus et urna tincidunt lobortis. Sed ultricies sapien
                    a felis mattis, quis tempor nunc accumsan. Nam a orci quis purus imperdiet semper vel sed velit.
                    Fusce malesuada vehicula lectus et ultrices. Curabitur vestibulum ac erat pharetra cursus.
                    Vestibulum eget velit eu libero tempus fermentum. Sed accumsan sodales dui, sed pretium elit auctor
                    ac. Proin facilisis varius sem id vehicula....</p>
            </div>
        </section>
        <div class="expand">
            <h2>DOWNLOADS</h2>
            <i class="fas fa-chevron-down"></i>
        </div>
        <section id="downloads">
            <p>Download1...</p>
            <p>Download2...</p>
            <p>Download3...</p>
            <p>Download4...</p>
            <p>Download5...</p>
            <p>Download6...</p>
        </section>
    </section>
</main>
<?php get_footer()?>